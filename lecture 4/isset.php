<?php
$i = 1;
if(isset($i)) {
	echo($i);
} 
//unset($i);
echo($i);

$a = isset($i) ? "true" : "false";
if(isset($i)) {
	$a = "true";
} else {
	$a = "false";	
}
echo($a);
?>