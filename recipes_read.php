<?php
session_start();
require_once(__DIR__ . '/includes/isConnect.php');
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/includes/variable.php');
require_once(__DIR__ . '/includes/function.php');

$getData = $_GET;

if (!isset($getData['id']) || !is_numeric($getData['id'])) {
    echo 'Recipe id missing';
    return;
}
$readRecipeStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE recipe_id = :id');
$readRecipeStatement->execute([
    'id' => (int)$getData['id'],
]);

$recipe = $readRecipeStatement->fetch();
if (!$recipe) {
    echo ('Recipe does not existe');
    return;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Your Pizza ! - <?php echo $recipe['title'] ?></title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    require_once(__DIR__ . '/includes/header.php'); ?>
    <div class="container">
        <h1>Your Pizza !</h1>
        <p><em>Share your pizza recipes !</em></p>
    </div>
    <?php require_once(__DIR__ . '/includes/login.php'); ?>
    <section id="section-recipe-read">
        <div class="container">
            <h2>Pizza Recipes</h2>
            <div class="container">
                <h3>
                    <?php echo $recipe['title']; ?>
                </h3>

                <p>
                    <?php echo $recipe['content']; ?>
                </p>

                <p>from :
                    <em> <?php echo authorInfo($recipe['author'], $users)['full_name']; ?> </em>
                </p>
                <!-- only the logged user can edit his own article -->
            </div>
    </section>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>