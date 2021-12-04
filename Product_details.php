<?php

class Product_details {
    protected $short_description;
    protected $long_description;
    protected $dimensions_cm;
    protected $weight_kg;

    function __construct($_short_description, $_long_description, $_dimensions_cm, $_weight_kg){
        $this->set_short_description($_short_description);
        $this->set_long_description($_long_description);
        $this->set_dimensions_cm($_dimensions_cm);
        $this->set_weight_kg($_weight_kg);
    }

    function set_short_description($new_value){
        $this->short_description = $new_value;
    }

    function get_short_description(){
        return $this->short_description;
    }

    function set_long_description($new_value){
        $this->long_description = $new_value;
    }

    function get_long_description(){
        return $this->long_description;
    }

    function set_dimensions_cm($new_value){
        $this->dimensions_cm = $new_value;
    }

    function get_dimensions_cm(){
        return $this->dimensions_cm;
    }

    function set_weight_kg($new_value){
        $this->weight_kg = $new_value;
    }

    function get_weight_kg(){
        return $this->weight_kg;
    }

    function add_shipment_options($new_value){
        $this->shipment_options = array_merge($this->shipment_options, $new_value);
    }
}

