<?php

$number = 100;
$even = 0;
$odd = 0;
$i = 0;
while($i <= $number) {
	if($i % 2 == 0) {
		$even++;
	} else {
		$odd++;	
	}
	$i++;
}
echo("Even Numbers Are ".$even."<br>");
echo("ODD Numbers Are ".$odd);
?>