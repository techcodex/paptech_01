<?php
require_once  "oop1.php";
require_once "User.php";

$obj_user1 = new ns1\User();
$obj_user2 = new ns2\User();
$obj_user1->display();
$obj_user2->display();
?>