<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Cart_product.php";

class Cart {
    protected $cart_products = [];
    protected $total_price_dollars;

    function get_cart_product(){
        return $this->cart_products;
    }

    function get_total_price_dollars(){
        return $this->total_price_dollars;
    }

    function add_product_to_cart($_product_id, $_quantity){
        $product = Product::get_product_by_id($_product_id);
        $product->set_available_quantity($product->get_available_quantity() - $_quantity);
        $this->cart_products[] = new Cart_product($product, $_quantity);
        $this->update_total_price_dollars();
    }

    function update_total_price_dollars(){
        $prices_array = array_map([$this, "get_prices_array"], $this->cart_products);
        $this->total_price_dollars = array_sum($prices_array);
    }

    function get_prices_array($cart_product){
        return $cart_product->get_price_dollars();
    }
}