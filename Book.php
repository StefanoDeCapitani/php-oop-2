<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Book_details.php";

class Book extends Product{
    protected $details;
    static $book_instances;

    function __construct($_id, $_name, $_category, $_image, $_available_quantity, $_price_dollars){
        parent::__construct($_id, $_name, $_category, $_image, $_available_quantity, $_price_dollars);
        Book::$book_instances[] = $this;
    }

    function set_book_details($_pages, $_authors, $_languages, $_genres, $_ISBN){
        $this->details = new Book_details($_pages, $_authors, $_languages, $_genres, $_ISBN);
    }

    function set_general_product_details($_short_description, $_long_description, $_dimensions, $_weight){
        $this->details->set_general_details($_short_description, $_long_description, $_dimensions, $_weight);
    }

    function get_details(){
        return $this->details;
    }

    static function get_book_instances(){
        return Book::$book_instances;
    }
}