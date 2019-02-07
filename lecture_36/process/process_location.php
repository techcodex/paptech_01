<?php
//echo("<pre>");
//print_r($_POST);
//echo("</pre>");
//die;
require_once '../models/Location.php';
$response = [];
if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action']) {
    switch ($_POST['action']) {
        case 'get_states':
            $country_id = $_POST['id'];
            $states = Location::states($country_id);
            $response['success'] = true;
            $response['states'] = $states;
            break;
        case "get_cities":
            $state_id = $_POST['id'];
            $cities = Location::cities($state_id);
            $response['success'] = true;
            $response['cities'] = $cities;
            break;
        default :
            $response['error'] = true;
            $response['msg'] = "Missing Tokken";
    } 
    
} else {
    $response['error'] = true;
    $response['msg'] = "Missing Tokken";
}
    $str_response = json_encode($response);
    echo($str_response);
?>