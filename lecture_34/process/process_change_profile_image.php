<?php
//echo("<pre>");
//print_r($_FILES);
//echo("</pre>");
//die;
 
session_start();
require_once '../models/User.php';
if(!isset($_SESSION['obj_user'])) {
    header("Location:../login.php");
}
$obj_user = unserialize($_SESSION['obj_user']);
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = [];
    try{
        $obj_user->profile_image = $_FILES['profile_image'];
    } catch (Exception $ex) {
        $errors['profile_image'] = $ex->getMessage();
    }
    if(count($errors) == 0) {
        $msg = "Profile Image Uploaded SUccessfully";
        $_SESSION['msg'] = $msg;
        header("Location:../msg.php");
    } else {
        $_SESSION['errors'] = $errors;
        header("Location:../change_profile_picture.php");
    }
}
?>