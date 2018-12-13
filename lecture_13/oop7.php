<?php
class ParentA{
	
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