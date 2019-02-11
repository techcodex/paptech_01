<?php
//echo("<pre>");
//print_r($_POST);
//echo("</pre>");
//die;
require_once '../../models/Cart.php';
require_once '../../models/Item.php';
session_start();

if(isset($_SESSION['obj_cart'])) {
    $obj_cart = unserialize($_SESSION['obj_cart']);
} else{
    $obj_cart = new Cart();
}

if(isset($_POST['action'])) {
    switch($_POST['action']) {
        case "add_to_cart":
//            if(isset($_POST['product_id'])) {
//                $product_id = $_POST['id'];
//            } else {
//                $product_id = 0;
//            }
            $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : 0;
//            die("sss".$product_id);
            $item = new Item($product_id);
            $obj_cart->add_to_cart($item);
            break;
        case "update_cart":
//            echo("<pre>");
//            print_r($_POST);
//            echo("</pre>");
//            die;
            $obj_cart->update_cart($_POST['qtys']);
            break;
    }
}
if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "empty_cart":
            $obj_cart->empty_cart();
            break;
        case "remove_item":
            $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : 0;
            $item = new Item($product_id);
//            echo("<pre>");
//            print_r($item);
//            echo("</pre>");
//            die;
            $obj_cart->remove_cart($item);
            break;
    }
}
$_SESSION['obj_cart'] = serialize($obj_cart);
header("Location:../products.php");
?>