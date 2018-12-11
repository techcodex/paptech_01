<?php
$data = "paptech is number one institue in gujranwala. paptech is paptech patech gujranwala ";
//empty Regular Expression
$reg = "/paptech/";
$matches = [];
//preg_match($reg,$data);
//preg_match($reg,$data,$,matches);
//preg_match($reg,$data,$matches,PREG_OFFSET_CAPTURE);
//preg_match($reg,$data,$matches,PREG_OFFSET_CAPTURE);
//preg_match($reg,$data,$matches,PREG_OFFSET_CAPTURE,55);
$result =  preg_match($reg,$data,$matches,PREG_OFFSET_CAPTURE,55);

echo("Result".$result);
echo("<pre>");
print_r($matches);
echo("</pre>");



?>