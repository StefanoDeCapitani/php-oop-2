<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Warranty.php";
class Cart_product{
    
    use Warranty;
    protected $product;
    protected $quantity;

    function __construct($_product_id, $_quantity){
        $product = Product::get_product_by_id($_product_id);
        $this->set_product($product);
        $this->set_quantity($_quantity);
    }

    function set_product(&$new_value){
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