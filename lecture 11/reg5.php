<?php
$data = "A bear in forest. bearable is blha blah . nonbear is good";

//$reg = "/\bbear/";
$reg = "/\bbear\b/";
$matches = [];
$result =  preg_match_all($reg,$data,$matches,PREG_OFFSET_CAPTURE);

echo($result);
echo("<pre>");
print_r($matches);
echo("</pre>");

?>