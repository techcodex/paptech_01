<?php
$number = 321;
$a = $number % 10;
$b = $number / 10;
$c = $b % 10;
$d = $b / 10;

echo($a);
echo($c);
echo((int)$d);
?>