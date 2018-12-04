<?php
$date = ("Y-m-d H:i:s");
$appiont_time = time($date);
$time = time();

if($appiont_time < $time) {
	echo("Invalid Time");
} else {
	echo("Valid Time");	
}
?>