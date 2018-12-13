<?php
class ParentA {
	/*
		Access Outside of Class
		Inherit in Child Class
	*/
	public $public_data;//Both Yes
	private $private_data;//Both No
	protected $protected_data;//Only Inherit
}
class ChildA extends parentA{
	
}
$obj_parent = new ParentA();
$obj_parent->protected_data;
?>