<?php
//echo("<pre>");
//print_r($_POST);
//echo("</pre>");
//die;
session_start();
require_once '../models/User.php';
$errors = [];

$obj_user = new User();
try{
    $obj_user->user_name = $_POST['user_name'];
} catch (Exception $ex) {
    $errors['user_name'] = $ex->getMessage();
}
try{
    $obj_user->password = $_POST['password'];
} catch (Exception $ex) {
    $errors['password'] = $ex->getMessage();
}
if(count($errors) == 0) {
    try{
        $obj_user->login();
        $msg = "Congratulation Login";
        $_SESSION['msg'] = $msg;
        $_SESSION['obj_user'] = serialize($obj_user);
        header("Location:../msg.php");
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
        $_SESSION['msg'] = $msg;
        header("Location:../login.php");
    }
    
} else {
    $msg = "Check Your Errors";
    $_SESSION['msg'] = $msg;
    $_SESSION['errors'] = $errors;
    $_SESSION['obj_user'] = serialize($obj_user);
    header("Location:../login.php");
}
?>