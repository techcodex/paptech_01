<?php
abstract class User{
	public static function display() {
		echo("Display");	
	}	
}

//$obj_user = new User();
User::display();
?>