<?php 

require_once "./Product_factory.php";
require_once "./Product.php";
require_once "./User.php";
require_once "./data/data.php";

foreach($product_array as $product){
    //Create product
    Product_factory::create_product($product);
    //Set product details
    Product::get_product_by_id($product["id"])->set_details($product["details"]);
}

//Adding a review
foreach($reviews as $review){
    Product::get_product_by_id($review["product_id"])->add_new_review($review["rating"], $review["review"], $review["images"]);
}

foreach($users as $user){
    //Sign up
    $new_user = new User($user["user_ID"], $user["email"], $user["password"]);
    $new_user->set_person_profile($user["first_name"], $user["last_name"], $user["profile_image"], $user["birth_day"]);
    //Adding phone and address info
    $new_user->set_phone_number($user["phone_number"]);
    $new_user->set_address($user["address"]["street"], $user["address"]["city"], $user["address"]["state"], $user["address"]["postal_code"], $user["address"]["country"]);
    //Adding payment methods
    foreach($user["payment_methods"] as $payment_method){
        $new_user->add_payment_method($payment_method);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>
<body>
    <?php 
    echo "<h1>Prodotti</h1>";
    echo "<h2>Prodotto 0:</h2>";
    var_dump(Product::get_product_by_id(0));
    echo "<h2>Prodotto 1:</h2>";
    var_dump(Product::get_product_by_id(1));
    ?>
    <br>
    <br>
    <?php
    echo "<h1>Users</h1>";
    $user = User::get_user_by_id(0);
    echo "<h2>User 0:</h2>";
    var_dump($user);
    echo "<h4>Calcolo dell'età dell'user " . $user->get_first_name() . " " . $user->get_last_name() . " è di ". $user->get_age() . " anni.</h4>";
    ?>
    <?php
    echo "<h3>Carrello dell'user:</h3>";
    $user->add_product_to_cart(1, 2);
    $user->add_product_to_cart(0, 2);
    var_dump($user->get_cart()->get_cart_products());
    echo "<h3>Prezzo totale del carrello: " . $user->get_cart()->get_total_price_dollars() . "$</h3>";
    ?>
    <?php
    $user_b = User::get_user_by_id(1);
    echo "<h2>User 1:</h2>";
    var_dump($user_b);
    echo "<h4>Calcolo dell'età dell'user " . $user_b->get_first_name() . " " . $user_b->get_last_name() . " è di ". $user_b->get_age() . " anni.</h4>";
    ?>
    <?php
    echo "<h3>Carrello dell'user:</h3>";
    $user_b->add_product_to_cart(0, 2);
    $user_b->add_product_to_cart(1, 1);
    var_dump($user_b->get_cart()->get_cart_products());
    echo "<h3>Prezzo totale del carrello: " . $user_b->get_cart()->get_total_price_dollars() . "$</h3>";
    ?>
    <?php
    echo "<h4>Rimozione prodotto 1 dal carrello dell'user 1</h4>";
    $user_b->remove_product_from_cart(1);
    var_dump($user_b->get_cart()->get_cart_products());
    ?>
    <?php
    echo "<h4>Diminuzione quantità prodotto 0 nel carrello dell'user 1</h4>";
    $user_b->get_cart()->set_cart_product_quantity(0, 1);
    var_dump($user_b->get_cart()->get_cart_products());
    ?>
</body>
</html>