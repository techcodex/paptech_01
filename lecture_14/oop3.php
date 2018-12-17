<?php
class User{
	private $num = 10;
	public function add() {
		$this->num +=10;
		//$obj_user->num +=10;	
	}
	public function display() {
		echo($this->num);	
	}
}
$obj_user = new User();
$obj_user->add();
$obj_user1 = new User();

$obj_user->display();
$obj_user1->display();
?>