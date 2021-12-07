<?php

require_once __DIR__ . "/Credit_card.php";
require_once __DIR__ . "/PayPal.php";

class Payment_method_factory {

    static function create($_payment_method){
        $payment_method = null;
        if(Payment_method_factory::isCard($_payment_method["payment_processing_network"])) {
            $payment_method = new Credit_card($_payment_method);
        }
        if($_payment_method["payment_processing_network"] === "paypal"){
            $payment_method = new PayPal($_payment_method);
        }
        return $payment_method;
    }

    static function isCard($_payment_processing_network){
        return $_payment_processing_network === "mastercard" || $_payment_processing_network === "visa";
    }
}