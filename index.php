<?php


$lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia voluptatibus corporis, soluta et ex quo? Corporis eligendi iure harum quos tempora odio repellat ipsum unde sequi, dolorem magni debitis nam.";

$users =
    [
        [
            'full_name' => 'Classic Andy',
            'email' => 'classic.andy@jaymeyl.com',
            'age' => 69,
        ],
        [
            'full_name' => 'Fabrice Bricefa',
            'email' => 'four.furieu@jaymeyl.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Anna Conda',
            'email' => 'anna.conda@jaymeyl.com',
            'age' => 28,
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

function isValidRecipe(array $recipe): bool
{
    if (array_key_exists('isDisplayed', $recipe)) {
        $value = $recipe['isDisplayed'];
    } else {
        $value = false;
    }
    return $value;
}

function displayableRecipes(array $recipes): array
{
    $value = [];
    foreach ($recipes as $item) {
        if (isValidRecipe($item))
            $value[] = $item;
    }
    return $value;
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes de Pizza</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <section id="section-recipes">
        <h1>Pizza Recipes</h1>

        <?php
        foreach ($recipes as $item) : ?>

            <?php if (isValidRecipe($item)) : ?>
                <article>
                    <h2>
                        <?php echo $item['title']; ?>
                    </h2>

                    <p>
                        <?php echo $item['content']; ?>
                    </p>

                    <p>from user :<em>
                            <?php echo $item['author']; ?>
                        </em></p>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
</body>

</html>