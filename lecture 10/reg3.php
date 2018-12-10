<?php
$data = "paptech is No one institute in gujranwala. paptech is paptech paptech gujranwala";
$reg = "/ /";
$rep = "-";

$result = preg_replace($reg,$rep,$data);

echo("<pre>");
print_r($result);
echo("</pre>");
?>

