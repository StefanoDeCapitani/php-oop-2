<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Cart_product.php";

class Cart {
    protected $cart_products = [];
    protected $total_price_dollars;

    function add_cart_product($_product_id, $_quantity){
        $this->cart_products[] = new Cart_product($_product_id, $_quantity);
    }

    function remove_cart_product($_product_id){
        $cart_products = $this->get_cart_products();
        $ids_array = array_map([$this, 'get_product_ids_array'], $cart_products);
        $product_index = array_search($_product_id, $ids_array);
        array_splice($cart_products, $product_index, 1);

        $this->set_cart_products($cart_products);
    }

    function get_product_ids_array($_cart_product){
        return $_cart_product->get_product()->get_id();
    }

    private function set_cart_products($new_value){
        $this->cart_products = $new_value;
    } 

    function set_cart_product_quantity($_product_id,  $_new_value){
        foreach($this->cart_products as $cart_product){
            if($cart_product->get_product()->get_id() === $_product_id){
                $cart_product->set_quantity($_new_value);
            }
        }
    }

    function get_cart_products(){
        return $this->cart_products;
    }

    function get_total_price_dollars(){
        return $this->total_price_dollars;
    }

    function update_total_price_dollars(){
        $prices_array = array_map([$this, "get_prices_array"], $this->cart_products);
        $this->total_price_dollars = array_sum($prices_array);
    }

    function get_prices_array($cart_product){
        return $cart_product->get_price_dollars();
    }
}