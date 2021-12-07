<?php

require_once __DIR__ . "/Payment_method.php";

class Credit_card extends Payment_method{
    protected $card_number;
    protected $CVV;
    protected $expiring_date;

    function __construct($_payment_method){
        parent::set_payment_processing_network($_payment_method["payment_processing_network"]);
        $this->set_card_number($_payment_method["card_number"]);
        $this->set_CVV($_payment_method["CVV"]);
        $this->set_expiring_date($_payment_method["expiring_date"]);
    }

    function set_card_number($new_value){
        $this->card_number = $new_value;
    }

    function get_card_number(){
        return $this->card_number;
    }

    function set_CVV($new_value){
        $this->CVV = $new_value;
    }

    function get_CVV(){
        return $this->CVV;
    }

    function set_expiring_date($new_value){
        $this->expiring_date = $new_value;
    }

    function get_expiring_date(){
        return $this->expiring_date;
    }

    function is_card_expired(){
        $today = date_create();
        $expiration_date_string = ("01/" . $this->get_expiring_date());
        $expiration_date = date_create_from_format("d/m/Y", $expiration_date_string);
        return $today > $expiration_date;
    }
}