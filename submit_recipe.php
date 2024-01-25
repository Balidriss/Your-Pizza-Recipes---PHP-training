<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/includes/variable.php');
require_once(__DIR__ . '/includes/function.php');
require_once(__DIR__ . '/includes/isConnect.php');



if (isset($_POST['title']) &&  isset($_POST['content'])) {

    $insertRecipe->execute([
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'author' => $_SESSION['LOGGED_USER']['email'],
        'is_enabled' => 1,
    ]);
} else {
    echo 'No recipes name or content submited';
    return;
}

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
        <h2>Your submitted recipe !</h2>
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