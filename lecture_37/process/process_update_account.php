<?php
/*
echo("<pre>");
print_r($_POST);
echo("</pre>");
die;
*/
//echo("gender".$_POST['gender'][0]);
//die;
session_start();
require_once '../models/User.php';
$errors = [];
if(!isset($_SESSION['obj_user'])) {
    header("Location:../index.php");
}
$obj_user = unserialize($_SESSION['obj_user']);
if($_SERVER['REQUEST_METHOD'] == "POST") {
    try{
        $obj_user->first_name = $_POST['first_name'];
    } catch (Exception $ex) {
        $errors['first_name'] = $ex->getMessage();
    }
    try {
        $obj_user->middle_name = $_POST['middle_name'];
    } catch (Exception $ex) {
        $errors['middle_name'] = $ex->getMessage();
    }
    try {
        $obj_user->last_name = $_POST['last_name'];
    } catch (Exception $ex) {
        $errors['last_name'] = $ex->getMessage();
    }
    try{
        $obj_user->street_address = $_POST['street_address'];
    } catch (Exception $ex) {
        $errors['street_address'] = $ex->getMessage();
    }
    try{
        $obj_user->contact_number = $_POST['contact_number'];
    } catch (Exception $ex) {
        $errors['contact_number'] = $ex->getMessage();
    }
    try{
        $obj_user->gender = isset($_POST['gender'][0]) ? $_POST['gender'][0] : "";
    } catch (Exception $ex) {
        $errors['gender'] = $ex->getMessage();
    }
    try {
        $obj_user->date_of_birth = $_POST['date_of_birth'];
    } catch (Exception $ex) {
        $errors['date_of_birth'] = $ex->getMessage();
    }
    try{
        $obj_user->country_id = $_POST['country_id'];
    } catch (Exception $ex) {
        $errors['country_id'] = $ex->getMessage();
    }
    try{
        $obj_user->state_id = $_POST['state_id'];
    } catch (Exception $ex) {
        $errors['state_id'] = $ex->getMessage();
    }
    try{
        $obj_user->city_id = $_POST['city_id'];
    } catch (Exception $ex) {
        $errors['city_id'] = $ex->getMessage();
    }
    if(count($errors) == 0) {
        try{
            $obj_user->update();
            $_SESSION['msg'] = "Account Updated Successfully ";
            header("Location:../msg.php");
        } catch (Exception $ex) {
            $msg = $ex->getMessage();
            $_SESSION['msg'] = $msg;
            header("Location:../update_account.php");
        }
    } else {
        $_SESSION['msg'] = "Check Your Errors";
        $_SESSION['errors'] = $errors;
        header("Location:../update_account.php");
    }
}
?>