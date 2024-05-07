<?php
include 'cors.php';

$json = [
    [
        "name" => "Japatonic LITE",
        "categories" => ["Youtube"],
        "link" => ["https://www.youtube.com/watch?v=GG_nllKEGkQ"],
        "image" => "img/portfolio-icons/port-4.png"
    ],
    [
        "name" => "Araya Vlogs",
        "categories" => ["Youtube"],
        "link" => ["https://www.youtube.com/watch?v=CBUS3mair8s"],
        "image" => "img/portfolio-icons/port-2.png"
    ],
    [
        "name" => "JapanGeek",
        "categories" => ["Youtube"],
        "link" => ["https://www.youtube.com/watch?v=tHF4RzQUsGM&t=2s"],
        "image" => "img/portfolio-icons/port-5.png"
    ],
    [
        "name" => "The Skills Factory",
        "categories" => ["Youtube"],
        "link" => ["https://www.youtube.com/watch?v=RxufVnnHG60&t=226s"],
        "image" => "img/portfolio-icons/port-6.png"
    ],
    [
        "name" => "Tipito Enojado",
        "categories" => ["Youtube"],
        "link" => ["https://www.youtube.com/watch?v=zjVoNlRee78"],
        "image" => "img/portfolio-icons/port-7.png"
    ],
    [
        "name" => "",
        "image" => "img/portfolio-icons/port-8.png"
    ]
];

echo json_encode($json);