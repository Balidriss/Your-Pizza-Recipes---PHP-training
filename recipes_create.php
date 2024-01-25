<?php
session_start();
require_once(__DIR__ . '/includes/isConnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pizza ! Your recipe !</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once(__DIR__ . '/includes/header.php'); ?>

    <section id="section-create-recipe">
        <div class="container">
            <h2>What is your recipe ?</h2>
            <form action="submit_recipe.php" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Recipe name</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Your recipe</label>
                    <textarea class="form-control" placeholder="Write about your recipe !" id="content" name="content" required></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit the recipe</button>
                </div>
            </form>
    </section>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>