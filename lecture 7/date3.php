<?php
$time = time();

$expiry_time = time() + 60*60*24*3;
echo($expiry_time);

if($time > $expiry_time) {
	echo("Your Session or time Has been expired please signup again");
} else {
	echo("Login");	
}
?>