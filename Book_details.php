<?php

require_once __DIR__ . "/Product_details.php";

class Book_details extends Product_details {

    protected $pages;
    protected $languages;
    protected $authors;
    protected $genres;
    protected $publisher;
    protected $ISBN;

    function __construct($_details) {
        parent::__construct($_details["short_description"], $_details["long_description"], $_details["dimensions_cm"], $_details["weight_kg"]);
        $this->set_pages($_details["pages"]);
        $this->set_authors($_details["authors"]);
        $this->set_languages($_details["languages"]);
        $this->set_genres($_details["genres"]);
        $this->set_publisher($_details["publisher"]);
        $this->set_ISBN($_details["ISBN"]);
    }

    function set_pages($new_value){
        $this->pages = $new_value;
    }

    function get_pages(){
        return $this->pages;
    }

    function set_authors($new_value){
        $this->authors = $new_value;
    }

    function get_authors(){
        return $this->authors;
    }

    function set_languages($new_value){
        $this->languages = $new_value;
    }

    function get_languages(){
        return $this->languages;
    }

    function set_ISBN($new_value){
        $this->ISBN = $new_value;
    }

    function get_ISBN(){
        return $this->ISBN;
    }

    function set_genres($new_value){
        $this->genres = $new_value;
    }

    function get_genres(){
        return $this->genres;
    }

    function set_publisher($new_value){
        $this->publisher = $new_value;
    }

    function get_publisher(){
        return $this->publisher;
    }
    
}