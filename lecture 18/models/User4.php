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
        //value = "sohaib";
        //method = "setuser_name"
        $method = "set".$name;
        if(!method_exists($this, $method)) {
            throw new Exception("set property $name does'nt Exist");
        }
        $this->$method($value);
    }
    public function __get($name) {
        //name = 'property name user_name'
        $method = "get".$name;
        //getuser_name
        if(!method_exists($this, $method)) {
            throw new Exception("get Proerty $name does'nt Exist ");
        }
        return $this->$method();
    }
    
    private function setUser_name($user_name) {
        $this->user_name = $user_name;
    }
    private function getUser_name() {
       return $this->user_name; 
    }
    private function setEmail($email) {
        $this->email = $email;
    }
    private function getEmail() {
        return $this->email;
    }
    private function setPassword($password) {
        $this->password = $password;
    }
    private function getPassword() {
        return $this->password;
    }
    
}

//create a object of type user
$obj_user = new User();

$obj_user->user_name = "sohaib";
$user_name =  $obj_user->user_name1;
echo($user_name);
