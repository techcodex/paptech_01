<?php
interface ParentA{
	public function display();	
}
interface ParentB{
	public function displayA();	
}
class ChildA implements ParentA,ParentB{
	public function display() {
		echo("Display");	
	}
	public function displayA() {
		echo("Display A");	
	}
}
$obj_child = new ChildA();
$obj_child->display();
$obj_child->displayA();
?>