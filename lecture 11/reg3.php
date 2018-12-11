<?php
$data = "paptech is number one institue in gujranwala. paptech is paptech patech gujranwala ";
$reg = "/ paptech /";

$result = preg_split($reg,$data);
echo("<pre>");
print_r($result);
echo("</pre>");
?>