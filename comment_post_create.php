<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/includes/isConnect.php');


$postData = $_POST;

if (
    !isset($postData['comment']) ||
    !isset($postData['recipe_id']) ||
    !is_numeric($postData['recipe_id'])
) {
    echo ('Your comment was not submmitted correctly.');
    return;
}


$comment = trim(strip_tags($postData['comment']));
$recipeId = (int)$postData['recipe_id'];

if ($comment === '') {
    echo 'Your comment is empty, please try again with more characters';
    return;
}

$insertRecipe = $mysqlClient->prepare('INSERT INTO comments(comment, recipe_id, user_id) VALUES (:comment, :recipe_id, :user_id)');
$insertRecipe->execute([
    'comment' => $comment,
    'recipe_id' => $recipeId,
    'user_id' => $_SESSION['LOGGED_USER']['user_id'],
]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pizza ! Submitted comment</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once(__DIR__ . '/includes/header.php'); ?>

    <section id="section-create-recipe">
        <h2>Your submitted comment !</h2>
        <article>
            <p>
            <p class="comment-submit"><b>Votre commentaire</b> : <?php echo strip_tags($comment); ?></p>
            </p>
        </article>
    </section>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>