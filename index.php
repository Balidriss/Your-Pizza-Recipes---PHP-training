<?php
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

    <?php if (isUserLoggedIn($currentUser)) : ?>
        <section id="section-recipes">

            <div class="container">
                <h1>Pizza Recipes</h1>

                <?php
                foreach (displayableRecipes($recipes) as $item) : ?>


                    <article class='<?php echo strtolower(preg_replace('/\s+/', '-', $item['title'])); ?>'>
                        <h2>
                            <?php echo $item['title']; ?>
                        </h2>

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
        </section>
    <?php else : ?>
        <section id="section-login">
            <h2>Login to see the recipes</h2>
            <form action="page_login.php" method="post">

            </form>
        </section>

    <?php endif; ?>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>