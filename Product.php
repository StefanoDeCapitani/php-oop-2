<?php

require_once __DIR__ . "/Review.php";

class Product {
    protected $id;
    protected $name;
    protected $category;
    protected $image;
    protected $available_quantity;
    protected $price_dollars;
    protected $average_rating = 0;
    protected $reviews;

    static $count;

    function __construct($_id, $_name, $_category, $_image, $_available_quantity, $_price_dollars) {
        Product::$count++;
        $this->set_id($_id);
        $this->set_name($_name);
        $this->set_category($_category);
        $this->set_image($_image);
        $this->set_available_quantity($_available_quantity);
        $this->set_price_dollars($_price_dollars);
    }

    /* GETTERS AND SETTERS */

    function set_id($new_value){
        $this->id = $new_value;
    }

    function get_id(){
        return $this->id;
    }

    function set_name($new_value){
        $this->name = $new_value;
    }

    function get_name(){
        return $this->name;
    }

    function set_category($new_value){
        $this->category = $new_value;
    }

    function get_category(){
        return $this->category;
    }

    function set_image($new_value){
        $this->image = $new_value;
    }

    function get_image(){
        return $this->image;
    }

    function set_available_quantity($new_value){
        $this->available_quantity = $new_value;
    }

    function get_available_quantity(){
        return $this->available_quantity;
    }

    function set_price_dollars($new_value){
        $this->price_dollars = $new_value;
    }

    function get_price_dollars(){
        return $this->price_dollars;
    }

    function set_average_rating($new_value){
        $this->average_rating = $new_value;
    }

    function get_average_rating(){
        return $this->average_rating;
    }

    function get_reviews(){
        return $this->reviews;
    }

    function add_new_review($rating, $review, $images){
        $this->reviews[] = new Review($rating, $review, $images);
        $this->set_average_rating($this->calculate_average_rating());
    }

    function calculate_average_rating(){
        $ratings = array_map('get_ratings_array', $this->reviews);
        $average = array_sum($ratings) / count($ratings);   
        $this->set_average_rating($average);
    }

    function get_ratings_array($review){
        return $review["rating"];
    }

    function get_price_formatted(){
        return;
    }
}