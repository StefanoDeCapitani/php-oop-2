<?php

class Review {

    protected $rating;
    protected $review_message;
    protected $images;

    function __construct($_rating, $_review_message,  $_images) {
        $this->rating = $_rating;
        $this->review_message = $_review_message;
        $this->images = $_images;
    }

    function set_rating($new_value){
        $this->rating = $new_value;
    }

    function get_rating(){
        return $this->rating;
    }

    function set_review_message($new_value){
        $this->review_message = $new_value;
    }

    function get_review_message(){
        return $this->review_message;
    }

    function set_images(...$new_value){
        $this->images = array_merge($this->images, $new_value);
    }

    function get_images(){
        return $this->images;
    }
}