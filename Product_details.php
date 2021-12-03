<?php

class Product_details {
    protected $short_description;
    protected $long_description;
    protected $dimensions;
    protected $weight;
    protected $shipment_options = [];

    function __construct($_short_description, $_long_description, $_dimensions, $_weight){
        $this->set_short_description($_short_description);
        $this->set_long_description($_long_description);
        $this->set_dimensions($_dimensions);
        $this->set_weight($_weight);
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

    function set_dimensions($new_value){
        $this->dimensions = $new_value;
    }

    function get_dimensions(){
        return $this->dimensions;
    }

    function set_weight($new_value){
        $this->weight = $new_value;
    }

    function get_weight(){
        return $this->weight;
    }

    function add_shipment_options($new_value){
        $this->shipment_options = array_merge($this->shipment_options, $new_value);
    }
}

