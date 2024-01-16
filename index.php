<?php


$lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia voluptatibus corporis, soluta et ex quo? Corporis eligendi iure harum quos tempora odio repellat ipsum unde sequi, dolorem magni debitis nam.";

// Déclaration du tableau des recettes : nom , contenu, author, afficher.
$recipes = [
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
        'isDisplayed' => false,
    ],
    [
        'title' => 'Pizza Spicy',
        'content' => $lorem,
        'author' => 'four.furieu@jaymeyl.com',
        'isDisplayed' => true,
    ],
    [
        'title' => 'Pizza Reptilien',
        'content' => $lorem,
        'author' => 'Anna.Conda@jaymeyl.com',
        'isDisplayed' => true,
    ],
];

$totalrecipes = 4;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes de Pizza</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <section id="section-recipes">
        <h1>Recettes de Pizza</h1>

        <?php
        foreach ($recipes as $item) : ?>

            <?php if (array_key_exists('isDisplayed', $item) && $item['isDisplayed']) : ?>
                <article>
                    <h2>
                        <?php echo $item['title']; ?>
                    </h2>

                    <p>
                        <?php echo $item['content'] ?>
                    </p>

                    <p>from user :<em>
                            <?php echo $item['author'] ?>
                        </em></p>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
</body>

</html>