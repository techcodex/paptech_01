<?php
//pass by value 
function increment($num) {
	$num += 10;
	return $num;
}
$num = 10;

echo("Value of varibale before calling function ".$num."<br>");
increment($num);
echo("Value of Variable After Calling Function".$num);

?>