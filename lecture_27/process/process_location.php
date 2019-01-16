<?php
//echo("<pre>");
//print_r($_POST);
//echo("</pre>");
//die;
require_once '../models/Location.php';
$response = [];
if($_SERVER['REQUEST_METHOD'] == "POST") {
    switch ($_POST['action']) {
        case 'get_states':
            $country_id = $_POST['id'];
            $states = Location::states($country_id);
            $response['success'] = true;
            $response['states'] = $states;
            break;
    }
    $str_response = json_encode($response);
    echo($str_response);
}
?>