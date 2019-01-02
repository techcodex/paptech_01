<?php
//session_start();
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
    private $user_id;
    
    public function __set($name, $value) {
        //name = user_name
        //value = sohaib
        $method = "set".$name;
        //setuser_name
        if(!method_exists($this, $method)) {
            throw new Exception("set property $name does'nt Exist");
        }
        $this->$method($value);
//        $this->setuser_name(sohaib)
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
    private function setUser_id($user_id) {
        if(!is_numeric($user_id) || $user_id <= 0) {
            throw new Exception("Invalid / Missing User ID");
        }
        $this->user_id = $user_id;
    }
    private function getUser_id() {
        return $this->user_id;
    }

    private function setUser_name($user_name) {
        //user_name = 'sohaib';
        $reg = "/^[a-z][a-z0-9]{5,19}$/i";
        if(!preg_match($reg, $user_name)) {
            throw new Exception("*Invalid /Missing  User Name");
        }
        $this->user_name = $user_name;
    }
    private function getUser_name() {
       return $this->user_name; 
    }
    private function setEmail($email) {
        $reg = "/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zAZ]\.)+[a-zA-Z]{2,4})$/";
        if(!preg_match($reg, $email)) {
            throw new Exception("*invalid / Missing Email");
        }
        $this->email = $email;
    }
    private function getEmail() {
        return $this->email;
    }
    private function setPassword($password) {
        $reg = "/^[a-z][a-z0-9]{5,15}$/i";
        if(!preg_match($reg, $password)) {
            throw new Exception("Invalid/ Missing Password");
        }
        $this->password = sha1($password);
    }
    private function getPassword() {
        return $this->password;
    }
    
    public function singup() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "paptech_db";
        
        //$obj_user = new User();
        $obj_db = new mysqli();
        $obj_db->connect($host, $user, $password);
        
        if($obj_db->connect_errno) {
            throw  new Exception("Db Connect Error ".$obj_db->errno.$obj_db->error);
        }
        $obj_db->select_db($database);
        if($obj_db->errno) {
            throw new Exception("Db Not FOund ".$obj_db->error.$obj_db->errno);
        }
        //Create Insert
        //not case sensitive 
        /*
            insert into table_name
          (`column_names`,`column_name`)
            values
         * ('value','value')
        */
        /*
        $query = "INSERT into users "
                ."(`id`,`user_name`,`email`,`password`) "
                ." values "
                ." ('NULL','$this->user_name','$this->email','$this->password')";
        */
        
        /*
        $query = "insert into users "
                ." values "
                ." ('NULL','$this->user_name','$this->email','$this->password')";
        
        */
        
        /*
        $query = "INSERT into users "
                ."(`user_name`,`id`,`email`,`password`) "
                ." values "
                ." ('$this->user_name','NULL','$this->email','$this->password')";
        */
        
        $query = "INSERT into users "
                ."(`id`,`user_name`,`email`,`password`) "
                ." values "
                ." ('NULL','$this->user_name','$this->email','$this->password')";
        $obj_db->query($query);
        if($obj_db->errno == 1062) {
            throw new Exception("User Name ".$this->user_name." Already Exist");
        }
        if($obj_db->errno) {
            throw new Exception("Query Insert Error ".$obj_db->errno.$obj_db->error);
        }
        
    }
    public function login() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "paptech_db";
        
        //$obj_user = new User();
        $obj_db = new mysqli();
        $obj_db->connect($host, $user, $password);
        
        if($obj_db->connect_errno) {
            throw  new Exception("Db Connect Error ".$obj_db->errno.$obj_db->error);
        }
        $obj_db->select_db($database);
        if($obj_db->errno) {
            throw new Exception("Db Not FOund ".$obj_db->error.$obj_db->errno);
        }
        //read / select
        //* means all
//        $query_select  = "select * from users";
        $query_select = "select * from users "
                        ." where user_name = '$this->user_name'";
        $result = $obj_db->query($query_select);
        if($obj_db->errno) {
            throw new Exception("Db Select Error ".$obj_db->errno.$obj_db->error);
        }
        if($result->num_rows == 0) {
            throw new Exception("User Not Found");
        }
        $user_data = $result->fetch_object();
//        echo("<pre>");
//        print_r($user_data);
//        echo("</pre>");
//        die;
        if($user_data->password != $this->password) {
            throw new Exception("Invalid User Name or Password ");
        }
        $this->user_id = $user_data->id;
        $this->email = $user_data->email;
        $this->password = NULL;
        $this->user_name = $user_data->user_name;
        
//        $_SESSION['obj_user'] = serialize($this);
        
    }
    
}

//create a object of type user
