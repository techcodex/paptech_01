<?php
$data = "paptech is number one institue in gujranwala. paptech is paptech paptech gujranwala ";
$reg = "/paptech/";
$matches = [];
//$result = preg_match_all($reg,$data);
//$result = preg_match_all($reg,$data,$matches);
//$result = preg_match_all($reg,$data,$matches,PREG_OFFSET_CAPTURE);
$result = preg_match_all($reg,$data,$matches,PREG_OFFSET_CAPTURE,55);
echo("Result ".$result);
echo("<pre>");
print_r($matches);
echo("</pre>");

?>