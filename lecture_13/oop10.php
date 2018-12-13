<?php
interface ParentA{
	public function display(int $num1,int $num2):string;
}
class ChildA implements ParentA{

}
$obj = new ChildA();
$obj->display();
?>