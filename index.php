<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/includes/variable.php');
require_once(__DIR__ . '/includes/function.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your Pizza ! - Home</title>
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
    <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
        <section id="section-recipes">
            <div class="container">
                <h2>Pizza Recipes</h2>
                <div class="container pizza-recipes-container">
                    <?php
                    foreach ($recipes as $item) : ?>


                        <article class='<?php echo strtolower(preg_replace('/\s+/', '-', $item['title'])); ?>'>
                            <h3>
                                <?php echo $item['title']; ?>
                            </h3>

                            <p>
                                <?php echo $item['content']; ?>
                            </p>

                            <p>from :
                                <em> <?php echo authorInfo($item['author'], $users)['full_name']; ?> </em>
                                <?php if (authorInfo($item['author'], $users)['age'] >= 0) : ?>
                                    - Age : <em> <?php echo authorInfo($item['author'], $users)['age'] ?> years old.</em>
                                <?php endif; ?>
                            </p>
                        </article>

                    <?php endforeach; ?>
                </div>
            </div>
        </section>


    <?php endif; ?>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>