<?php
trait DBtarit{
	public function display() {
		echo("Display");	
	}	
}
class User{
	use DBtarit;
	public function abc() {
		$this->display();	
	}	
}
$obj_user = new User();
$obj_user->abc();
?>