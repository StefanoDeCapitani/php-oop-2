<?php 

require_once "./Product_factory.php";

$book = [
    "id" => 1,
    "name" => "Il libro della giungla",
    "category" => "book",
    "image" => "https://images-na.ssl-images-amazon.com/images/I/71Vthi1AUXL.jpg",
    "available_quantity" => 2,
    "price_dollars" => 2.15,
    "details" => [],
];

Product_factory::create_product($book);


var_dump(Book::get_book_instances());