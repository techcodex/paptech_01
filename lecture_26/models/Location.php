<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Location
 *
 * @author SohaiB
 */
require_once 'DbTrait.php';
class Location {
    use DbTrait;
    public function countries() {
        $obj_db = $this->obj_db();
        $query = "select * from countries c "
                ." ORDER BY c.country_name ASC  ";
        $result = $obj_db->query($query);
        if($obj_db->errno) {
            throw new Exception("Db Select Error -".$obj_db->errno.$obj_db->error);
        }
        if($result->num_rows == 0) {
            throw new Exception("Countries Not Found");
        }
        $countries = [];
        while($data = $result->fetch_object()) {
            $countries[] = $data;
        }
//        echo("<pre>");
//        print_r($countries);
//        echo("</pre>");
//        die;
        
        return $countries;
    } 
}
