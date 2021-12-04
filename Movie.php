<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Movie_details.php";

class Movie extends Product{
    protected $details;

    function __construct($_id, $_name, $_category, $_image, $_available_quantity, $_price_dollars, $_shipment_options){
        parent::__construct($_id, $_name, $_category, $_image, $_available_quantity, $_price_dollars, $_shipment_options);
    }

    function set_details($_details){
        $this->details = new Movie_details($_details);
    }

    function get_details(){
        return $this->details;
    }
}