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
    public $user_name;
    public $email;
    public $password;
    
    public function setUser_name() {
        $this->user_name = "sohaib";
    }
    public function getUser_name() {
        return $this->user_name;
    }
    public function setEmail() {
        $this->email = "sohaib@yahoo.com";
    }
    public function getEmail() {
        return $this->email;
    }
    public function setPassword() {
        $this->password = "1234567";
    }
    public function getPassword() {
        return $this->password;
    }
}

$obj_user = new User();
/*
$obj_user->user_name = "Sohaib";
echo("Sohaib ".$obj_user->user_name."<br>");
$obj_user->email = "sohaibamjad17@yahoo.com";
echo("Email ".$obj_user->email."<br>");

$obj_user->password = "1234567";

echo("Password ".$obj_user->password."<br>");


*/
$obj_user->setUser_name();
echo("User_name ".$obj_user->getUser_name());

$obj_user->setEmail();
echo($obj_user->getEmail());

$obj_user->setPassword();
echo($obj_user->getPassword());