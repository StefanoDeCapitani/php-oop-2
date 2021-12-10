<?php

trait Warranty {
    protected $warranty_duration_months;
    protected $warranty_price_dollars;
    protected $warranty_conditions;

    function get_warranty_duration_months(){
        return $this->warranty_duration_months;
    }

    function set_warranty_duration_months($new_value){
        $this->warranty_duration_months = $new_value;
    }

    function get_warranty_price_dollars(){
        return $this->warranty_price_dollars;
    }

    function set_warranty_price_dollars($new_value){
        $this->warranty_price_dollars = $new_value;
    }

    function get_warranty_conditions(){
        return $this->warranty_conditions;
    }

    function set_warranty_conditions($new_value){
        $this->warranty_conditions = $new_value;
    }
}

?>