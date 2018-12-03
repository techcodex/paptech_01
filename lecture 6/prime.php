<?php
/*
$number = 11;
$c = 0;
for($i = 1; $i<=$number;$i++) {
	if($number % $i == 0) {
		$c++;
		}
}
if($c == 2 || $number == 1) {
	echo("Prime");
} else {
	echo("Not Prime");	
}
*/

$arr = [1,2,3,4,5,6,7,8,9,10,11];
$length = 0;
for($i = 0;$i<11;$i++) {
	$length++;
}

$c = 0;
$k = 0;
for($j = 0; $j < $length; $j++) {
	$c = 0;
	for($i = 1; $i < $arr[$j];$i++) {

	if($arr[$j] % $i == 0) {
		$c++;
		}
}
if($c == 2 || $arr[$j] == 1) {
	$k++;
	echo($k."Prime <br>");
} else {
	$k++;
	echo($k."Not Prime <br>");	
	
}
}








?>