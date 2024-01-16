<?php

// Déclaration du tableau des recettes : nom , contenu, afficher.
$recipes = [
    ['Pizza Classic', 'Ingredients', 'classic.andy@jaymeyl.com', true,],
    ['Pizza Yolo', 'Ingredients', 'four.furieu@jaymeyl.com', false,],
    ['Pizza Spicy', 'Ingredients', 'four.furieu@jaymeyl.com', true,],
    ['Pizza Reptilien', 'Ingredients', 'Anna.Conda@jaymeyl.com', true,],
];

$totalrecipes = 4;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
</head>

<body>
    <ul>
        <?php for ($lines = 0; $lines < $totalrecipes; $lines++) : ?>
            <?php if ($recipes[$lines][3]) : ?>
                <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>
</body>

</html>