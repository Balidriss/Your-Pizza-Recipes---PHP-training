<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=your_pizza;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE is_enabled = TRUE');
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');

$recipesStatement->execute();
$usersStatement->execute();
$recipes = $recipesStatement->fetchAll();
$users = $usersStatement->fetchAll();
