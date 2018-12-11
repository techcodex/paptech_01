<?php
$data = "";
//carrot notation.

//$reg= "/^def/";
//$result = preg_match($reg,$data);

/*
	def
	defabc
*/
//$reg = "/gooddef$/";
/*
def
gooddef
*/
//$result = preg_match($reg,$data);

//$reg = "/^def$/";
//def

//$reg = "/^def$/i";

/*
def
DEF
*/

//$reg = "/^defs{2,4}$/";


/*

defss
*/

//$reg = "/^def[sa]$/";
/*
defs
defa
*/

//$reg = "/^def.$/";

/*
defa
def1
def+
*/

//$reg = "/^def[a-z0-9].$/";

//$reg = "/^def[a-z][0-9]$/";

//$reg = "/^defs*$/";

/*

def
defs
defss
defsss
defssss
*/

//$reg = "/^defs+$/";
/*
defs
defss
and son on
*/

//$reg = "/^def[a-z]*$/";

//$reg = "/^[a-z][a-z0-9]{2,9}$/";
//$reg = "/^[a-z]*$/i";
$reg = "/^[0-9]{1,4}\-[0-9][0-9][0-9]\-[0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/";
$reg= "/^[0-9]{1,4}\-[0-9]{3}\-[0-9]{7}$/";
$reg= "/^\d{1,4}\-\d{3}\-\d{7}$/";

/*
1-111-1111111
11-111-1111111
111-111-1111111
1111-111-1111111
*/
$result = preg_match($reg,$data);

echo($result);
?>