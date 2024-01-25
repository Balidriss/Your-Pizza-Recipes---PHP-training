<?php

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE is_enabled = TRUE');
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');

$recipesStatement->execute();
$usersStatement->execute();
$recipes = $recipesStatement->fetchAll();
$users = $usersStatement->fetchAll();
