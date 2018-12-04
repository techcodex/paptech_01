<?php
date_default_timezone_set("Asia/Karachi");
$time  = time();
$date = date("H:i:s");

$now = time($date);

echo($now."<br>");
echo($time);

?>