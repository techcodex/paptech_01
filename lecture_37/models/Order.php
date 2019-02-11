<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author SohaiB
 */
require_once 'DbTrait.php';
require_once 'Cart.php';
//$obj_cart = unserialize($_SESSION)
class Order {
    //put your code here
    use DbTrait;
    private $user_id;
    private $address;
    public function __set($name, $value) {
        $method = "set".$name;
        if(!method_exists($this, $method)) {
            throw new Exception("set property $name does,nt Exist");
        }
        $this->$method($value);
    }
    private function setUser_id($user_id) {
        if($user_id <= 0 || !is_numeric($user_id)) {
            throw new Exception("Invalid / Missing User ID");
        }
        $this->user_id = $user_id;
    }
    private function setAddress($address) {
//        die($address);
        $address = trim($address);
        if(strlen($address) < 10) {
            throw new Exception("Too short Address");
        }
        $this->address  = $address;
    }

    public function checkout($items) {
//        echo("<pre>");
//        print_r($items);
//        echo("</pre>");
//        die;
        $obj_db = self::obj_db();
        $now = date("Y-m-d H:i:s");
        $query = "insert into orders "
                ." (`id`,`user_id`,`date`,`address`) "
                ." values "
                . " ('NULL',$this->user_id,'$now','$this->address') ";
        $obj_db->query($query);
        if($obj_db->errno) {
            throw new Exception("Db insert error - $obj_db->errno - $obj_db->error");
        }
        $order_id = $obj_db->insert_id;
//        $query_items = "";
        foreach ($items as $item) {
            $unit_price = $item->unit_price;
            //get product from database
            $query_select_product = "select * from products "
                                    ." where id = $item->item_id ";
            $result = $obj_db->query($query_select_product);
            
            $quantity = $result->fetch_object()->quantity;
            $quantity -= $item->quantity;
            //update the product quantity
            $query_update = "update products set "
                            ." quantity = $quantity "
                            ." where id = $item->item_id ";
            $obj_db->query($query_update);
            
            $query_items = " insert into orderitem "
                      ." (`id`,`order_id`,`product_id`,`quantity`,`unit_price`) "
                      ." values "
                      ." ('NULL',$order_id,$item->item_id,$item->quantity,$unit_price)";
            $obj_db->query($query_items);
            if($obj_db->errno) {
            throw new Exception("order item insert $obj_db->errno - $obj_db->error");
        }
        }
//        die($query_items);
//        $obj_db->query($query_items);
        
        
        
    }
}
