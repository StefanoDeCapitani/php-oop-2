<?php

require_once __DIR__ . "/Book.php";
require_once __DIR__ . "/Movie.php";

class Product_factory {

    static function create_product($product){
        if($product['category'] === "book"){
            new Book(
                        $product["id"], 
                        $product["name"], 
                        $product["category"], 
                        $product["image"], 
                        $product["available_quantity"], 
                        $product["price_dollars"], 
                        $product["shipment_options"]
                    );
        }
        if($product['category'] === "movie"){
            new Movie(
                        $product["id"], 
                        $product["name"], 
                        $product["category"], 
                        $product["image"], 
                        $product["available_quantity"], 
                        $product["price_dollars"], 
                        $product["shipment_options"]
                    );
        }
        Product::get_product_by_id($product["id"])->set_details($product["details"]);
    }
}