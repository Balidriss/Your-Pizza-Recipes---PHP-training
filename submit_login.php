<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/includes/variable.php');
require_once(__DIR__ . '/includes/function.php');

$loginData = $_POST;


if (isset($loginData['email']) &&  isset($loginData['password'])) {
    if (!filter_var($loginData['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['LOGIN_ERROR_MESSAGE'] = 'Email not valid.';
    } else {
        foreach ($users as $item) {
            if ($item['email'] === $loginData['email'] && $item['password'] === $loginData['password']) {
                $_SESSION['LOGGED_USER'] = [
                    'email' => $item['email'],
                    'user_id' => $item['user_id']
                ];
            }
        }
        if (!isset($_SESSION['LOGGED_USER'])) {
            $_SESSION['LOGIN_ERROR_MESSAGE'] = 'You have entered an invalid username or password';
        }
    }
    redirectToUrl('index.php');
}
