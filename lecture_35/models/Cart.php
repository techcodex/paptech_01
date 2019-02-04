<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cart
 *
 * @author SohaiB
 */
require_once 'Item.php';
class Cart {
    //put your code here
    private $items;
    
    public function __construct() {
        $this->items = [];
        //$this->items = array();
    }
    public function __set($name, $value) {
        $method = "set$name";
        if(!method_exists($this, $method)) {
            throw new Exception("set property $name does'nt Exist");
        }
        $this->$method($value);
    }
    public function __get($name) {
        $method = "get$name";
        if(!method_exists($this, $method)) {
            throw new Exception("get property $name does'nt Exist");
        }
        return $this->$method();
    }
    private function getItem() {
        return $this->items;
    }
    private function getCount() {
//        echo("<pre>");
//        print_r($this->items);
//        echo("</pre>");
//        die;
        $total = 0;
        foreach($this->items as $item) {
            $total = $total + $item->quantity;
        }
        return $total;
    }
    private function getTotal() {
        $total = 0;
        foreach($this->items as $item) {
            $total +=$item->total;
        }
        return $total;
    }
    public function add_to_cart($item) {
//        echo("<pre>");
//        print_r($item);
//        echo("<pre>");
//        die;
        if(!$item instanceof Item) {
            throw new Exception("Not a valid Object");
        }
        if(array_key_exists($item->item_id, $this->items)) {
            $this->items[$item->item_id]->quantity +=$item->quantity;
            //
        } else {
            $this->items[$item->item_id] = $item;
        }
//        echo("<pre>");
//        print_r($this->items);
//        echo("</pre>");
//        die;
    }
    public function update_cart($qtys) {
        foreach($this->items as $item) {
            if(is_numeric($qtys[$item->item_id])) {
                if($qtys[$item->item_id] > 0) {
                    $item->quantity = $qtys[$item->item_id];
                } else if($qtys[$item->item_id] == 0) {
                    $this->remove_cart($item);
                }
            } 
        }
    }
    public function remove_cart($item) {
//        echo("<pre>");
//        print_r($item);
//        echo("</pre>");
//        die;
        if(!$item instanceof Item) {
            throw new Exception("Not a valid Object");
        }
        if(array_key_exists($item->item_id, $this->items)) {
            unset($this->items[$item->item_id]);
        }
    }
    public function empty_cart() {
        $this->items = [];
    }
}
