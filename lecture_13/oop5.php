<?php
class ParentA{
	//method signature only or declaration
	public abstract function display();	
}
class ChildA extends ParentA {
	
	public function display() {
		echo("Display OF Child ");	
	}
}
$obj_parent = new ParentA();
$obj_child = new ChildA();
$obj_child->display();

?>