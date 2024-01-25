<?php
session_start();
require_once(__DIR__ . '/includes/isConnect.php');
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');

$getData = $_GET;

if (!isset($getData['id']) || !is_numeric($getData['id'])) {
    echo ('Recipe id missing.');
    return;
}

$retrieveRecipeStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE recipe_id = :id');
$retrieveRecipeStatement->execute([
    'id' => (int)$getData['id'],
]);
$recipe = $retrieveRecipeStatement->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pizza ! Edit your recipe !</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once(__DIR__ . '/includes/header.php'); ?>

    <section id="section-create-recipe">
        <div class="container">
            <h2>Edit your recipe</h2>
            <form action="recipes_post_update.php" method="post">
                <div class="mb-3 visually-hidden">
                    <label for="id" class="form-label">Recipe id</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo ($getData['id']); ?>">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Recipe name</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="" value="<?php echo ($recipe['title']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Your recipe</label>
                    <textarea class="form-control" placeholder="Write about your recipe !" id="content" name="content" required><?php echo $recipe['content']; ?></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit the recipe</button>
                </div>
            </form>
    </section>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>