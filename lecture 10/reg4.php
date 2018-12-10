<?php
$data = "aa9";
//empty 
//$reg = "//";

//carrot Notation.

//$reg = "/^def/";
//def
//defagh
//$reg = "/def$/";
//def
//aghdef
//$reg = "/^def$/i";

//$reg = "/^def.$/";
//def9
//def+
//defA

//$reg = "/^defs*$/";
//def
//defs
//defss
//$reg = "/^defs+$/";
//$reg = "/^defs+$/";
//$reg = "/^defs{2}$/";
//$reg= "/^defs{2,4}$/";
//$reg = "/^def[a-zA-Z0-9].$/";
//$reg = "/^def[sa]$/";
//$reg = "/^[A-Z][a-z]*$/";
//$reg = "/^[a-z]+$/i";
//$reg = "/^[a-z]*$/i";/
$reg = "/^[a-z][a-z0-9]{2,19}$/i";

$result = preg_match($reg,$data);
echo($result);
?>