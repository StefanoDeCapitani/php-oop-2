<?php 

require_once "./Product_factory.php";
require_once "./Product.php";
require_once "./User.php";


$product_array = [
    [
    "id" => 0,
    "name" => "Il libro della giungla",
    "category" => "book",
    "image" => "https://images-na.ssl-images-amazon.com/images/I/71Vthi1AUXL.jpg",
    "available_quantity" => 2,
    "price_dollars" => 7.39,
    "shipment_options" => [
                            [
                            "country" => "US",
                            "price_dollars" => 0,
                            "delivery_time_days" => 5
                            ]
                        ],
    "details" => [
                    "pages" => 115,
                    "authors" => "Ryan Reinolds",
                    "languages" => "english",
                    "genres" => "giallo",
                    "publisher" => "Mondadori",
                    "ISBN" => "978-88-89637-15-9",
                    "short_description" => "Un libro bellissimo scritto da un attore famoso",
                    "long_description" => "Bellissimo questo libro creato da un autore fantastico che ha stregato tutta l'opinione pubblica con le sue descrizioni dettagliate e sognanti allo stesso tempo. Assolutamente da leggere. Un bel regalo per Natale o compleanni. I tuoi amici lo ameranno.",
                    "dimensions_cm" => [15, 7, 2],
                    "weight_kg" => 0.3,
                ],
    ], 
    [
        "id" => 1,
        "name" => "Spider Man",
        "category" => "movie",
        "image" => "https://image.api.playstation.com/vulcan/img/rnd/202011/0714/vuF88yWPSnDfmFJVTyNJpVwW.png",
        "available_quantity" => 4,
        "price_dollars" => 9.99,
        "shipment_options" => [
                                [
                                "country" => "US",
                                "price_dollars" => 0,
                                "delivery_time_days" => 3
                                ],
                                [
                                "country" => "UK",
                                "price_dollars" => 10.29,
                                "delivery_time_days" => 3
                                ]
                            ],
        "details" => [
                        "file_format" => "DVD",
                        "director" => "Sam Raimi",
                        "production_company" => "SONY",
                        "genres" => "cine-comic",
                        "playing_time_m" => 90,
                        "ISBN" => "576-99-34598-22-7",
                        "short_description" => "Il supereroe che si arrampica sui palazzi con le ragantele.",
                        "long_description" => "Peter Parker si ritrova suo malgrado ad affrontare il senso di colpa per la morte dello zio e ad accettare le nuove responsabilità che i suoi poteri da supereroe gli hanno conferito.",
                        "dimensions_cm" => [15, 7, 2],
                        "weight_kg" => 0.2,
                    ],
    ]
];

$review = ["product_id" => 0, "rating" => 3, "review" => "Mi è piaciuto molto", "images" => ""];

$users = [
    [
        "first_name" => "Aldo",
        "last_name" => "Baglio",
        "profile_image" => "https://biografieonline.it/img/bio/a/Aldo_Baglio.jpg",
        "birth_day" => "09/28/1958",
        "email" => "aldo@baglio.com",
        "password" => "Cadrega",
        "phone_number" => "0241 556798",
        "payment_methods" => [
            [
                "payment_processing_network" => "mastercard",
                "card_number" => "0000 1085 9843 1086",
                "expiring_date" => "02/2023",
                "CVV" => "965"
            ],
            [
                "payment_processing_network" => "paypal",
                "email" => "aldo@baglio.com",
                "account_verification_status" => "verified",
                "payer_ID" => "001253425"
            ]
        ],
        "address" => [
            "street" => "via Washington, 37",
            "city" => "Pizzo Calabro",
            "state" => "Calabria",
            "postal_code" => "32920",
            "country" => "IT"
        ],
    ]
];

foreach($product_array as $product){
    Product_factory::create_product($product);
}

Product::get_product_by_id($review["product_id"])->add_new_review($review["rating"], $review["review"], $review["images"]);

foreach($users as $user){
    $new_user = new User($user["email"], $user["password"]);
    $new_user->set_person_profile($user["first_name"], $user["last_name"], $user["profile_image"], $user["birth_day"]);
    echo "Età: " . $new_user->get_age() . " anni";

    $new_user->set_phone_number($user["phone_number"]);
    $new_user->set_address($user["address"]["street"], $user["address"]["city"], $user["address"]["state"], $user["address"]["postal_code"], $user["address"]["country"]);


    foreach($user["payment_methods"] as $payment_method){
        $new_user->add_payment_method($payment_method);
    }

    var_dump($new_user->get_payment_methods());

    $new_user->add_product_to_cart(1, 2);
    $new_user->add_product_to_cart(0, 2);

    var_dump($new_user->get_cart()->get_cart_product());
}

var_dump(User::$instances_array);

var_dump(Product::get_product_instances());
