<?php
class Car{
	//data members
	/*
		Access Modifiers
		1.public.
		2.private
		3.protected		
	
	*/
	public $tyres = 4;
	public $heavy_engine;
	public $lights;
	public $seats;
	public $wheels;
	
	//methods
	
	public function start() {
		echo("The Car has Been Started <br>");
	}
	public function accelarate() {
		echo("Speed Up <br>");
	}
	public function breaks() {
		echo("Slow Down <br>");
	}
	
}
//object_name = new Car();
$obj_car = new Car();
$obj_car->start();
$obj_car->accelarate();
$obj_car->breaks();

?>