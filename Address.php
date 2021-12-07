<?php 

class Address {
    protected $street;
    protected $city;
    protected $state;
    protected $postal_code;
    protected $country;

    public function __construct($_street, $_city, $_state, $_postal_code, $_country){
        $this->set_street($_street);
        $this->set_city($_city);
        $this->set_state($_state);
        $this->set_postal_code($_postal_code);
        $this->set_country($_country);
    }

    function set_street($new_value){
        $this->street = $new_value;
    }

    function get_street(){
        return $this->street;
    }

    function set_city($new_value){
        $this->city = $new_value;
    }

    function get_city(){
        return $this->city;
    }

    function set_state($new_value){
        $this->state = $new_value;
    }

    function get_state(){
        return $this->state;
    }

    function set_postal_code($new_value){
        $this->postal_code = $new_value;
    }

    function get_postal_code(){
        return $this->postal_code;
    }

    function set_country($new_value){
        $this->country = $new_value;
    }

    function get_country(){
        return $this->country;
    }
}