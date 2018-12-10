<?php
$data = "paptech is No one institute in gujranwala. paptech is paptech paptech gujranwala";
$reg = "/ /";

//$result = preg_split($reg,$data);
$result = preg_split($reg,$data,4);

echo("<pre>");
print_r($result);
echo("</pre>");
?>

