<?php
/*
function sum() {
	$arr = ['even'=>$even,'odd'=>$odd];
	return $arr;
}
*/
//php does'nt allow function overloading 
function sum($num1) {
	echo($num1);
}

function sum() {
	echo("sohaib");
}
sum();
sum(10);

?>