<?php
$data = "paptech is number one institue in gujranwala. paptech is paptech patech gujranwala ";
$reg = "/paptech/";
$rep = "techcodex";
//$result = preg_replace($reg,$rep,$data);

$result = preg_replace($reg,$rep,$data,3);
echo("<pre>");
print_r($result);
echo("</pre>");
?>