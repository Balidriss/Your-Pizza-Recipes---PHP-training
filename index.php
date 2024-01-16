<?php
$lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia voluptatibus corporis, soluta et ex quo? Corporis eligendi iure harum quos tempora odio repellat ipsum unde sequi, dolorem magni debitis nam.";
// Déclaration du tableau des recettes : nom , contenu, afficher.
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
</head>

<body>
    <h1>Recettes de Pizza</h1>

    <?php for ($lines = 0; $lines < $totalrecipes; $lines++) : ?>
        <?php if ($recipes[$lines]['isDisplayed']) : ?>
            <h2>
                <?php echo $recipes[$lines]['title'] ?>
            </h2>
            <p>
                <?php echo $recipes[$lines]['content'] ?>
            </p>

            <p>from user :<em>
                    <?php echo $recipes[$lines]['author'] ?>
                </em></p>

        <?php endif; ?>
    <?php endfor; ?>

</body>

</html>