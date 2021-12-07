<?php

class PayPal extends Payment_method{
    protected $email;
    protected $account_verification_status;
    protected $payer_ID;

    function __construct($_payment_method){
        parent::set_payment_processing_network($_payment_method["payment_processing_network"]);
        $this->set_email($_payment_method["email"]);
        $this->set_account_verification_status($_payment_method["account_verification_status"]);
        $this->set_payer_ID($_payment_method["payer_ID"]);
    }

    function set_email($new_value){
        $this->email = $new_value;
    }

    function get_email(){
        return $this->email;
    }

    function set_account_verification_status($new_value){
        $this->account_verification_status = $new_value;
    }

    function get_account_verification_status(){
        return $this->account_verification_status;
    }

    function set_payer_ID($new_value){
        $this->payer_ID = $new_value;
    }

    function get_payer_ID(){
        return $this->payer_ID;
    }
}
