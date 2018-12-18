<?php
defined('BASEPATH') or exit('No direct script access allowed');
function is_active($self, $card)
{
    print($self->uri->segment(2) === $card) ? "active" : "";
}

function innercard($self, $data, $limit = 3, $open = "<div class='row'>", $close = "</div>", $card = "admin/inner_card")
{
    $cardstring = "";
    for ($i = 0; $i < count($data); ++$i) {
        if ($i % $limit == 0) {
            if ($i > 0) {
                $cardstring .= $close;
            }
            $cardstring .= $open;
        }
        $cardstring .= $self->parser->parse($card, $data[$i], true);
    }
    $cardstring .= $close;
    return $cardstring;
}

function generate_select($name, $data, $default = false)
{
    $open = "<div class='form-group'>
    <label for='$name'>$name</label>
    <select class='form-control' id='$name' name='$name'>";
    $close = "</select>
    </div>";
    $string = "";
    $string .= $open;
    if ($default) {
        $string .= "<option disabled selected value>  Seleccione una opción  </option>";
    }
    foreach ($data as $value) {
        $string .= "<option value='{$value['id']}'>{$value['name']}</option>";
    }
    $string .= $close;
    return $string;
}
