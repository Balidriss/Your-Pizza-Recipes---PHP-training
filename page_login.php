<?php
require_once(__DIR__ . '/includes/variable.php');

$logintData = $_POST;



if (
    !isset($loginData['email'])
    || !filter_var($loginData['email'], FILTER_VALIDATE_EMAIL)
    || empty($loginData['password'])
    || trim($loginData['password']) === ''
) {
    echo ('Email or password is wrong. Please make sure you completed your login credential correctly.');

    return;
}
