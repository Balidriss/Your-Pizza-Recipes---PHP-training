<?php
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE is_enabled = TRUE');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
