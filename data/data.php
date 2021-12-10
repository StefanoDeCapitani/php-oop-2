<?php

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

$reviews = [
    ["product_id" => 0, "rating" => 3, "review" => "Mi è piaciuto molto", "images" => ""],
    ["product_id" => 0, "rating" => 5, "review" => "Splendido!", "images" => ""],
    ["product_id" => 1, "rating" => 1, "review" => "Pessimo", "images" => ""]
];

$users = [
    [
        "user_ID" => 0,
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
    ],
    [
        "user_ID" => 1,
        "first_name" => "Giacomo",
        "last_name" => "Poretti",
        "profile_image" => "https://www.nonprofitday.it/wp-content/uploads/2021/07/speaker-nonprofit3.jpg",
        "birth_day" => "04/26/1956",
        "email" => "giacomo@poretti.com",
        "password" => "carabbaggio",
        "phone_number" => "0285 756834",
        "payment_methods" => [
            [
                "payment_processing_network" => "visa",
                "card_number" => "0235 0000 1086 9843",
                "expiring_date" => "06/2025",
                "CVV" => "375"
            ],
            [
                "payment_processing_network" => "paypal",
                "email" => "giacomo@poretti.com",
                "account_verification_status" => "verified",
                "payer_ID" => "341003427"
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

$warranties = [
    [
        "price_dollars" => "3.55",
        "duration_months" => "24",
        "conditions" => "No conditions",
    ]
];