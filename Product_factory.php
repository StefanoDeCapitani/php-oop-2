<?php

require_once __DIR__ . "/Book.php";

class Product_factory {

    static function create_product($product){
        if($product['category'] === "book"){
            new Book($product["id"], $product["name"], $product["category"], $product["image"], $product["available_quantity"], $product["price_dollars"]);
        }
    }
}