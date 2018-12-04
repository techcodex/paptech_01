<?php
$date = date("Y-m-d H:i:s");
echo(strtotime($date)."<br>");
$now =  time($date);
echo(time()."<br>");
echo($now);
?>