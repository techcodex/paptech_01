<?php
class User{
	private static $num = 10;
	public function display() {
		echo("Display".self::$num."<br>");	
	}
	public function add(){
		self::$num += 10;
	}	
}
$obj_user = new User();
$obj_user1 = new User();

$obj_user->add();

$obj_user->display();
$obj_user1->display();
?>