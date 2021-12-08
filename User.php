<?php 

require_once __DIR__ . "/Person.php";
require_once __DIR__ . "/Address.php";
require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/Payment_method_factory.php";

class User extends Person{
    protected $user_ID;
    protected $email;
    protected $password;
    protected $phone_number;
    protected $payment_methods;
    protected $address;
    protected $cart;
    static $count;
    static public $instances_array = [];

    public function __construct($_user_ID, $_email, $_password){
        $this->set_user_ID($_user_ID);
        $this->set_email($_email);
        $this->set_password($_password);
        $this->cart = new Cart();
        User::$instances_array[] = $this;
    }

    function set_user_ID($new_value){
        $this->user_ID = $new_value;
    }

    function get_user_ID(){
        return $this->user_ID;
    }

    function set_email($new_value){
        $this->email = $new_value;
    }

    function get_email(){
        return $this->email;
    }

    function set_password($new_value){
        $this->password = $new_value;
    }

    function get_password(){
        return $this->password;
    }

    function set_phone_number($new_value){
        $this->phone_number = $new_value;
    }

    function get_phone_number(){
        return $this->phone_number;
    }

    function set_address($_street, $_city, $_state, $_postal_code, $_country){
        $this->address = new Address($_street, $_city, $_state, $_postal_code, $_country);
    }

    function get_address(){
        return $this->address;
    }

    function add_payment_method($_payment_processing_network, ...$rest){
        $this->payment_methods[] = Payment_method_factory::create($_payment_processing_network, $rest);
    }

    function get_payment_methods(){
        return $this->payment_methods;
    }

    function add_product_to_cart($_product_id, $_quantity){
        $this->cart->add_cart_product($_product_id, $_quantity);
        $this->cart->update_total_price_dollars();
    }

    function get_cart(){
        return $this->cart;
    }

    static function get_user_by_ID($_ID){
        foreach(User::$instances_array as $user){
            if($user->user_ID === $_ID){
                return $user;
            }
        }
        return null;
    }
}

