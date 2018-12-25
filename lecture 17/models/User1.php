<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author SohaiB
 */
class User {
    //put your code here
    //data members are not public
    private $user_name;
    private $email;
    private $password;
    
    public function __set($name, $value) {
        echo("Set Called <br>");
    }
    public function __get($name) {
        echo("Get Called <br>");
    }
}

//create a object of type user
$obj_user = new User();
$obj_user->user_name = "sohaib";
echo("User Name -".$obj_user->user_name);

$obj_user->email = "sohaib@yahoo.com";

echo("Email -".$obj_user->email);
$obj_user->password = "123";
echo("Password - ".$obj_user->password);

