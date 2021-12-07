<?php

class Payment_method{
    protected $payment_processing_network;

    function __construct($_payment_processing_network) {
        $this->set_payment_processing_network($_payment_processing_network);
    }

    function set_payment_processing_network($_payment_processing_network){
        $this->payment_processing_network = $_payment_processing_network;
    }

    function get_payment_processing_network(){
        return $this->payment_processing_network;
    }
}