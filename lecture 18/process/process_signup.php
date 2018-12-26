<?php
require_once '../models/User.php';
session_start();

//echo("<pre>");
//print_r($_POST);
//echo("</pre>");
//die;
//die($_POST['user_name']);
$obj_user = new User();
$errors = [];
try{
    $obj_user->user_name = $_POST['user_name'];
} catch (Exception $ex) {
    $errors['user_name'] = $ex->getMessage();
//    echo("Exception ".$ex->getMessage().$ex->getLine().$ex->getFile());
}

try{
    $obj_user->email = $_POST['email'];
} catch (Exception $ex) {
    $errors['email'] = $ex->getMessage();
//    echo("Exception ".$ex->getMessage().$ex->getLine().$ex->getFile());
}

try{
    $obj_user->password = $_POST['password'];
} catch (Exception $ex) {
    $errors['password'] = $ex->getMessage();
//    echo("Exception ".$ex->getMessage().$ex->getLine().$ex->getFile());
}
if(count($errors) == 0) {
    $msg = "Congratulation You are signup";
    $_SESSION['msg'] = $msg;
//    require_once '../views/header.php';
    header("Location:../msg.php");
} else {
    $msg = "Check Your Errors";
    $_SESSION['msg'] = $msg;
    header("Location:../signup.php");
}

?>