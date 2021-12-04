<?php

require_once __DIR__ . "/Product_details.php";

class Movie_details extends Product_details {

    protected $file_format;
    protected $director;
    protected $production_company;
    protected $genres;
    protected $playing_time_m;
    protected $ISBN;

    function __construct($_details) {
        parent::__construct($_details["short_description"], $_details["long_description"], $_details["dimensions_cm"], $_details["weight_kg"]);
        $this->set_file_format($_details["file_format"]);
        $this->set_production_company($_details["production_company"]);
        $this->set_director($_details["director"]);
        $this->set_genres($_details["genres"]);
        $this->set_playing_time_m($_details["playing_time_m"]);
        $this->set_ISBN($_details["ISBN"]);
    }

    function set_file_format($new_value){
        $this->file_format = $new_value;
    }

    function get_file_format(){
        return $this->file_format;
    }

    function set_production_company($new_value){
        $this->production_company = $new_value;
    }

    function get_production_company(){
        return $this->production_company;
    }

    function set_director($new_value){
        $this->director = $new_value;
    }

    function get_director(){
        return $this->director;
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

    function set_playing_time_m($new_value){
        $this->playing_time_m = $new_value;
    }

    function get_playing_time_m(){
        return $this->playing_time_m;
    }
    
}