<?php
function singup($user_name,$email,$remember = FALSE) {
	echo("User Name ".$user_name);
	echo("<br> Email ".$email);
	var_dump($remember);
}
singup("arslan","yahoo.com");

?>