<?php

require_once __DIR__ . "/Product_details.php";

class Book_details extends Product_details {

    protected $pages;
    protected $languages;
    protected $authors;
    protected $genres;
    protected $ISBN;

    function __construct($_pages, $_authors, $_languages, $_genres, $_ISBN) {
        $this->set_pages($_pages);
        $this->set_authors($_authors);
        $this->set_languages($_languages);
        $this->set_genres($_genres);
        $this->set_ISBN($_ISBN);
    }

    function set_general_product_details($_short_description, $_long_description, $_dimensions, $_weight){
        parent::__construct($_short_description, $_long_description, $_dimensions, $_weight);
        
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
    
}