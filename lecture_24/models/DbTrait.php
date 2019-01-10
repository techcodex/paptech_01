<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author SohaiB
 */
trait DbTrait {
    //put your code here
    
    protected function obj_db() {
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
        return $obj_db;
    }
}
