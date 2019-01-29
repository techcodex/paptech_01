<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author SohaiB
 */
require_once 'DbTrait.php';
class Product {
    use DbTrait;
    private $product_id;
    private $product_name;
    private $product_features;
    private $description;
    private $unit_price;
    private $quantity;
    
    public function __set($name, $value) {
        $method = "set".$name;
        if(!method_exists($this, $method)){
            throw new Exception("set property Does'nt Exist");
        }
        $this->$method($value);
    }
    public function __get($name) {
        $method = "get".$name;
        if(!method_exists($this, $method)){
            throw new Exception("get property Does'nt Exist");
        }
        return $this->$method();
    }
    public function setProduct_name($product_name) {
        if(strlen($product_name) < 10) {
            throw new Exception("Too short / Missing Product name");
        }
        $this->product_name = $product_name;
    }
    private function getProduct_name() {
        return $this->product_name;
    }
    public function addProduct() {
        $obj_db = self::obj_db();
        
    }
    public function products() {
        $obj_db = self::obj_db();
        $query = "select * from products ";
        $result = $obj_db->query($query);
        if($obj_db->errno) {
            throw new Exception("db Select error - $obj_db->errno $obj_db->error");
        }
        if($result->num_rows == 0){
            throw new Exception("Product Not FOund");
        }
        $products = [];
        while($data = $result->fetch_object()) {
            $products[] = $data;
        }
        return $products;
    }
}
