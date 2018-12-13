<?php
final class ParentA {
	public function display() {
		echo("Display Of Parent <br>");	
	}
}
class ChildA extends parentA {
	//Redeclare parent function in child
	/*
		Function Overriding
	*/
	/*
	public function display() {
		parent::display();
		echo("Display of Child <br>");	
	}
	*/
}
$obj_parent = new ParentA();
//$obj_parent->display();

$obj_child = new ChildA();
$obj_child->display();
?>