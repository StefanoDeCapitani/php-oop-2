<?php 

class Person {
    protected $first_name;
    protected $last_name;
    protected $profile_image;
    protected $birth_day;

    function set_person_profile($_first_name, $_last_name, $_profile_image, $_birth_day){
        $this->set_first_name($_first_name);
        $this->set_last_name($_last_name);
        $this->set_profile_image($_profile_image);
        $this->set_birth_day($_birth_day);
    }

    function set_first_name($new_value){
        $this->first_name = $new_value;
    }

    function set_last_name($new_value){
        $this->last_name = $new_value;
    }

    function set_profile_image($new_value){
        $this->profile_image = $new_value;
    }

    function get_profile_image(){
        return $this->profile_image;
    }

    function set_birth_day($new_value){
        $this->birth_day = date_create($new_value);
    }

    function get_age(){
        $today = date_create(date("m/d/Y"));
        $interval = date_diff($today, $this->birth_day);
        return $interval->format("%y");
    }

}
