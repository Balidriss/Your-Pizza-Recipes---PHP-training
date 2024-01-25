<?php
session_start();
require_once(__DIR__ . '/includes/isConnect.php');
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');

$postData = $_POST;

if (
    !isset($postData['id'])
    || !is_numeric($postData['id'])
    || empty($postData['title'])
    || empty($postData['content'])
    || trim(strip_tags($postData['title'])) === ''
    || trim(strip_tags($postData['content'])) === ''
) {
    echo 'Il manque des informations pour permettre l\'édition du formulaire.';
    return;
}

$id = (int)$postData['id'];
$title = trim(strip_tags($postData['title']));
$recipe = trim(strip_tags($postData['content']));

$insertRecipeStatement = $mysqlClient->prepare('UPDATE recipes SET title = :title, content = :content WHERE recipe_id = :id');
$insertRecipeStatement->execute([
    'title' => $title,
    'content' => $recipe,
    'id' => $id,
]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pizza ! Your recipe is updated !</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once(__DIR__ . '/includes/header.php'); ?>

    <section id="section-create-recipe">
        <h2>Your recipe is updated !</h2>
        <article>
            <h3>
                <?php echo $_POST['title']; ?>
            </h3>

            <p>
                <?php echo $_POST['content']; ?>
            </p>
        </article>
    </section>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>