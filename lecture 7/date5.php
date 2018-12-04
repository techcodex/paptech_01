<?php
$date = getdate();
echo("<pre>");
print_r($date);
echo("</pre>");
echo($date['year']. "-". $date['mon']."-".$date['mday']);

?>