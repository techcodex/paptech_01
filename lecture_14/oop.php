<?php

interface User{
	public function display(int $num) :string;	
}
class ParentA implements User{
	public function display(int $num):string {
		return $num;
	}
	public function singup(string $user_name,int $age) {
		
	}	
}
$obj_parent = new ParentA();
echo($obj_parent->display(10));
$num1 = 10;
$num2 = "20";
echo($num1 + $num2);
?>