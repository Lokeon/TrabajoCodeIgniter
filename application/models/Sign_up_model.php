<?php
class Sign_up_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->email->initialize($this->config->item('smtp_initialize'));
    }

    public function create_new_user()
    {
        $username = $this->input->post('username', true);
        $email = (string)$this->input->post('email', true);
        $pass = password_hash($this->input->post('pass', true), PASSWORD_BCRYPT, array('cost' => 11));
        $hash = hash("sha512", rand());
        $this->db->insert(
            'users',
            array(
                'username' => $username,
                'email' => $email,
                'pass' => $pass,
                'hash' => $hash,
            )
        );
        if ($this->db->affected_rows() == 1) {
            $this->email->from($this->config->item('smtp_sender'), 'Review');
            $this->email->to($email);
            $this->email->subject('Confirmar correo electrónico');
            $url = base_url() . "Sign_up/validate_email?email=$email&hash=$hash";
            $this->email->message(
                $this->parser->parse('smtp_email', array('url' => $url), true));
            $this->email->send();
            return true;
        } else {
            return false;
        }
    }

    public function validate_email_hash($email, $hash)
    {
        $query = "SELECT id FROM users WHERE email='$email' AND hash='$hash' AND confirmed=0";
        $result = $this->db->query($query);
        if ($result->num_rows() == 1) {
            $this->db->where('id', $result->row()->id);
            $this->db->update('users', array('confirmed' => 1));
            return true;
        } else {
            return false;
        }
    }

}
