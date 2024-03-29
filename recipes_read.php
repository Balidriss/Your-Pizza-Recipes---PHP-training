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
$recipeWithCommentsStatement = $mysqlClient->prepare('SELECT r.*, c.comment_id, c.comment, c.user_id, DATE_FORMAT(c.created_at, "%d/%m/%Y") AS comment_date, u.full_name FROM recipes r LEFT JOIN comments c on c.recipe_id = r.recipe_id LEFT JOIN users u ON u.user_id = c.user_id WHERE r.recipe_id = :id ORDER BY c.created_at DESC');
$recipeWithCommentsStatement->execute([
    'id' => (int)$getData['id'],
]);
$recipeWithComments = $recipeWithCommentsStatement->fetchAll(PDO::FETCH_ASSOC);
if (!$recipeWithComments) {
    echo ('Recipe does not existe');
    return;
}

$reviewAvgRatingStatement = $mysqlClient->prepare('SELECT ROUND(AVG(c.review),1) AS rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = :id');
$reviewAvgRatingStatement->execute(
    ['id' => (int)$getData['id']]
);
$avgRating = $reviewAvgRatingStatement->fetch();


$recipe = [
    'recipe_id' => $recipeWithComments[0]['recipe_id'],
    'title' => $recipeWithComments[0]['title'],
    'content' => $recipeWithComments[0]['content'],
    'author' => $recipeWithComments[0]['author'],
    'comments' => [],
    'rating' => $avgRating['rating']
];

foreach ($recipeWithComments as $comment) {
    if (!is_null($comment['comment_id'])) {
        $recipe['comments'][] = [
            'comment_id' => $comment['comment_id'],
            'comment' => $comment['comment'],
            'comment_date' => $comment['comment_date'],
            'user_id' => (int) $comment['user_id'],
            'full_name' => $comment['full_name']
        ];
    }
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
                <h2><?php echo $recipe['rating']; ?> / 5</h2>
                <p>
                    <?php echo $recipe['content']; ?>
                </p>

                <p>from :
                    <em> <?php echo authorInfo($recipe['author'], $users)['full_name']; ?> </em>
                </p>
            </div>
            <div class="comments-container container">
                <?php if ($recipe['comments'] !== []) : ?>
                    <?php foreach ($recipe['comments'] as $comment) : ?>
                        <div class="comment container">
                            <p><?php echo $comment['comment']; ?></p>
                            <p><em> - <?php echo $comment['full_name']; ?></em> - written : <?php echo $comment['comment_date']; ?> </p>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="comment container">
                        <p><em>No comment.</em> </p>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                <?php require_once(__DIR__ . '/comment_create.php'); ?>
            <?php endif; ?>
    </section>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>