<?php
//Types of data:
//1.Numerical
//2.string
//3.float
//4.alphanumeric
//boolean,real

//Types of Variable
//1.Local
//2.Global
$global = 100;
$arr = ['name'=>'mahin','father_name'=>'zafar'];

function sum() {
	//echo($GLOBALS['global']);
	
	echo($GLOBALS['arr']['name']);
	
	//echo($global);
	$local  = 10;
	//echo($local);	
}
//10
//kuj b ni default value
//echo($local);
echo(sum());

?>