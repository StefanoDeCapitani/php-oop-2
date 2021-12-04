<?php

require_once __DIR__ . "/Product.php";

class Cart_product{
    protected $product;
    protected $quantity;

    function __construct($_product, $_quantity){
        $this->set_product($_product);
        $this->set_quantity($_quantity);
    }

    function set_product($new_value){
        $this->product = $new_value;
    }

    function get_product(){
        return $this->product;
    }

    function set_quantity($new_value){
        $this->quantity = $new_value;
    }

    function get_quantity(){
        return $this->quantity;
    }

    function get_price_dollars(){
        return $this->get_product()->get_price_dollars() * $this->get_quantity();
    }
}