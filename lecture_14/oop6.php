<?php
interface car{
	public function display();	
}
class ParentA{
	public function display1() {
		echo("Display of Parent");	
	}	
}
class ChildA extends ParentA{
	public function display2(){
		echo("Display of child");	
	}	
}
class ChildB extends ChildA implements car {
	public function display() {
		echo("Display OF Car");	
	}	
}
$obj_child = new ChildB();
$obj_child->display();
$obj_child->display1();
$obj_child->display2()
?>