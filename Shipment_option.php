<?php

class Shipment_option {
    protected $country;
    protected $price_dollars;
    protected $delivery_time_days;

    function __construct($_country, $_price_dollars, $_delivery_time_days){
        $this->set_country($_country);
        $this->set_price_dollars($_price_dollars);
        $this->set_delivery_time_days($_delivery_time_days);
    }

    function set_country($new_value){
        $this->country = $new_value;
    }

    function get_country(){
        return $this->country;
    }

    function set_price_dollars($new_value){
        $this->price_dollars = $new_value;
    }

    function get_price_dollars(){
        return $this->price_dollars;
    }

    function set_delivery_time_days($new_value){
        $this->delivery_time_days = $new_value;
    }

    function get_delivery_time_days(){
        return $this->delivery_time_days;
    }
}
