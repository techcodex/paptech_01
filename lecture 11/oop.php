<?php

class oop {
	//body
	
	// Access outside class
	//Inherit in child class
	private $private_data; //both no
	public $public_data; // both yes
	protected $protected_data;	 //only inheirt
	

}
$obj = new oop();
//$obj->private_data = "Sohaib";
//$obj->public_data = "Sohaib";
//echo($obj->public_data);
$obj->protected_data = "sohaib";


?>