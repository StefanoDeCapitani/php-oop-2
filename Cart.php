<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Cart_product.php";

class Cart {
    protected $cart_products = [];
    protected $total_price_dollars;

    function add_cart_product($_product_id, $_quantity){
        $this->cart_products[] = new Cart_product($_product_id, $_quantity);
    }

    function get_cart_product(){
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