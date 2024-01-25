<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/includes/variable.php');


$recipeData = $_POST;


if (isset($recipeData['title']) &&  isset($recipeData['content'])) {

    $insertRecipe->execute([
        'title' => $recipeData['title'],
        'content' => $recipeData['content'],
        'author' => $_SESSION['LOGGED_USER']['email'],
        'is_enabled' => 1,
    ]);
    redirectToUrl('index.php');
} else {
    echo 'No recipes name or content submited';
    return;
}
