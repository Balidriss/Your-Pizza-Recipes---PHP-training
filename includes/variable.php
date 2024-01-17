<?php
$lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia voluptatibus corporis, soluta et ex quo? Corporis eligendi iure harum quos tempora odio repellat ipsum unde sequi, dolorem magni debitis nam.";

$users =
    [
        [
            'full_name' => 'Classic Andy',
            'email' => 'classic.andy@jaymeyl.com',
            'age' => 69,
            'isLoggedIn' => false,
            'password' => 'CA0000'
        ],
        [
            'full_name' => 'Fabrice Bricefa',
            'email' => 'four.furieu@jaymeyl.com',
            'age' => 34,
            'isLoggedIn' => false,
            'password' => 'FB0000'
        ],
        [
            'full_name' => 'Anna Conda',
            'email' => 'anna.conda@jaymeyl.com',
            'age' => 28,
            'isLoggedIn' => false,
            'password' => 'FB0000'
        ],
    ];

// Déclaration du tableau des recettes : nom , contenu, author, afficher.
$recipes =
    [
        [
            'title' => 'Pizza Classic',
            'content' => $lorem,
            'author' => 'classic.andy@jaymeyl.com',
            'isDisplayed' => true,
        ],
        [
            'title' => 'Pizza Yolo',
            'content' => $lorem,
            'author' => 'four.furieu@jaymeyl.com',
            'isDisplayed' => true,
        ],
        [
            'title' => 'Pizza Spicy',
            'content' => $lorem,
            'author' => 'four.furieu@jaymeyl.com',
            'isDisplayed' => false,
        ],
        [
            'title' => 'Pizza Reptilien',
            'content' => $lorem,
            'author' => 'anna.conda@jaymeyl.com',
            'isDisplayed' => true,
        ],
    ];
