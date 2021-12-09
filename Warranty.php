<?php

trait Warranty {
    protected $warranty_duration;
    protected $warranty_price;
    protected $warranty_conditions;

    function get_warranty_duration(){
        return $this->warranty_duration;
    }

    function get_warranty_price(){
        return $this->warranty_price;
    }

    function get_warranty_condition(){
        return $this->warranty_conditions;
    }
}

?>