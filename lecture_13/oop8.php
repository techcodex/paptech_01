<?php
//grandfather
class ParentA{
	public function displayA() {
		echo("Diosplay of PArent A <br>");	
	}
}
//parent
class ChildA extends ParentA{
	public function displayB() {
		echo("Diosplay of Child A <br>");	
	}	
}
//child
class ChildB extends ChildA {
	public function displayC() {
		echo("Diosplay of Child A <br>");	
	}	
}
$obj_childb = new ChildB();
$obj_childb->displayA();
$obj_childb->displayB();
$obj_childb->displayA();

?>