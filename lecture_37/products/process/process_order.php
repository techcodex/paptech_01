<?php
session_start();
require_once '../../models/User.php';
require_once '../../models/Order.php';
require_once '../../models/Cart.php';
$errors = [];
if(!isset($_SESSION['obj_user'])) {
    header("Location:../index.php");
}
$obj_order = new Order();
$obj_user = unserialize($_SESSION['obj_user']);
$obj_cart = unserialize($_SESSION['obj_cart']);
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
        $obj_user->contact_number = $_POST['contact_number'];
    } catch (Exception $ex) {
        $errors['contact_number'] = $ex->getMessage();
    }
    try{
        $obj_order->user_id = $obj_user->user_id;
    } catch (Exception $ex) {
        $errors['msg'] = $ex->getMessage();
    }
    try{
        $obj_order->address = $_POST['street_address'];
    } catch (Exception $ex) {
        $errors['street_address'] = $ex->getMessage();
    }
    if(count($errors) == 0) {
        try{
            $obj_order->checkout($obj_cart->item);
            $_SESSION['msg'] = "Order Place Successfully";
            $obj_cart->empty_cart();
            $_SESSION['obj_cart'] = serialize($obj_cart);
            header("Location:../../msg.php");
        } catch (Exception $ex) {
            $msg = $ex->getMessage();
            $_SESSION['msg'] = $msg;
            header("Location:../checkout.php");
        }
    } else {
        $_SESSION['msg'] = "Check Your Errors";
        $_SESSION['errors'] = $errors;
        header("Location:../checkout.php");
    }
}
?>