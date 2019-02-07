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
    public function products($limit = 0,$offset= -1,$brand_id = 0,$category_id = 0) {
        //limit =3 offste = 0
        $obj_db = self::obj_db();
        $query = "select * from products ";
        if($brand_id > 0 ) {
            $query .= " where brand_id = $brand_id ";
        }
        if($category_id > 0) {
            $query .= " where category_id = $category_id ";
        }
        if($limit > 0 && $offset > -1) {
            $query .= "limit $limit offset $offset ";
        }
//        die($query);
        
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
    public function pagination($item_per_page = 3) {
        $obj_db = self::obj_db();
       
        $query = "select count(*) as total from products ";
        
        $result = $obj_db->query($query);
        if($obj_db->errno) {
            throw new Exception("Db Select Error $obj_db->error - $obj_db->errno");
        }
        $total = $result->fetch_object()->total;
        //total_groups = total_student / group length
        //        3     = 13/5
        $total_pages = ceil($total / $item_per_page);
        
        $page_nums = [];
        for($i = 0,$j=0;$i<$total_pages;$i++,$j+=$item_per_page) {
            $page_nums[$i] = $j;
        }
        
        return $page_nums;
    }
    public static function get_product($product_id) {
        $obj_db = self::obj_db();
        $query = "select * from products "
                ." where id = $product_id ";
        $result = $obj_db->query($query);
        if($result->num_rows == 0) {
            throw new Exception("Product Not Found");
        }
        $data = $result->fetch_object();
        return $data;
    }
}
