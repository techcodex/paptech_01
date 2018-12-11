<?php
/*
$arr = [
	'name'=>'sohaib',
	'father_name'=>'amjad pervaiz',
];
//echo($arr['name']);
//echo("<pre>");
//print_r($arr);
//echo("</pre>");

unset($arr['name']);
 echo(isset($arr['name']));
echo("<pre>");
print_r($arr);
echo("</pre>");
*/

$arr = [10,20];
$arr[2] = 40;
unset($arr[0]);
sort($arr);

//$new_arr = [];

/*
for($i = 0;$i<=2;$i++) {
	if(isset($arr[$i])) {
		$new_arr[$i] = $arr[$i];
	}
};
*/
echo("<pre>");
print_r($arr);
echo("</pre>");
?>