
<?PHP

class Sign_up_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function verify_user($user)
    {
        $ssql = "SELECT * FROM users WHERE username=$user";
        $consulta = $this->db->query($ssql);
        return ($consulta->num_rows() == 0) ? false : true;
    }

    public function verify_email($email)
    {
        $ssql = "SELECT * FROM users WHERE email=$email";
        $consulta = $this->db->query($ssql);
        return ($consulta->num_rows() == 0) ? false : true;

    }

    public function sign_up_user()
    {
        $this->db->insert(
            'users',
            array(
                'username' => $this->input->post('username', true),
                'email' => $this->input->post('email', true),
                'pass' => $this->input->post('pass', true)
            )
        );
    }

}