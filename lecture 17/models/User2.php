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
    /*
    public function __set($name, $value) {
        echo("Set Called <br>");
    }
    public function __get($name) {
        echo("Get Called <br>");
    }
     * 
     */
    public function setUser_name($user_name) {
        $this->user_name = $user_name;
    }
    public function getUser_name() {
       return $this->user_name; 
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getPassword() {
        return $this->password;
    }
}

//create a object of type user
$obj_user = new User();
$obj_user->setUser_name("sohaib");
echo("User Name -".$obj_user->getUser_name());

$obj_user->setEmail("sohaib@yahoo.com");

echo("Email -".$obj_user->getEmail());
$obj_user->setPassword("123");
echo("Password - ".$obj_user->getPassword());

