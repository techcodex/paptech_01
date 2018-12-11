<?php
$data = "paptech in gujranwala. paptech and gujranwala. paptech is paptech";

//$reg = "/paptech|gujranwala/";
$reg = "/(paptech) and (gujranwala)/";
$matches = [];
$result =  preg_match_all($reg,$data,$matches); 

echo($result);
echo("<pre>");
print_r($matches);
echo("</pre>");

?>