<?php
//echo("<pre>");
//print_r($_POST);
//echo("</pre>");
//die;
session_start();
require_once '../models/User.php';
$errors = [];
$response = [];
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
        $remember = isset($_POST['remember']) ? TRUE : FALSE;
        $obj_user->login($remember);
//        $msg = "Congratulation Login";
//        $_SESSION['msg'] = $msg;
//        $_SESSION['obj_user'] = serialize($obj_user);
            
        $response['success'] = true;
        $response['msg'] = "Login Sucessfully";
            
//        header("Location:../index.php");
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
        $_SESSION['msg'] = $msg;
//        header("Location:../login.php");
        $response['error'] = true;
        $response['msg'] = $ex->getMessage();
    }
    
} else {
    $msg = "Check Your Errors";
    $response['error'] = TRUE;
    $response['msg'] = $msg;
    $response['errors'] = $errors;
//    $_SESSION['obj_user'] = serialize($obj_user);
//    header("Location:../login.php");
    
}
echo(json_encode($response));
?>