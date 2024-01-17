<?php
require_once(__DIR__ . '/includes/variable.php');
$loginData = $_POST;
if (
    !isset($loginData['email'])
    || !filter_var($loginData['email'], FILTER_VALIDATE_EMAIL)
    || empty($loginData['password'])
    || trim($loginData['password']) === ''
) {
    echo ('Email or password is wrong. Please make sure you completed your login credential correctly.');

    return;
}

function checkUserPassword(string $email, string $password, array $users): bool
{
    foreach ($users as $item) {
        if ($email === $item['email']) {

            return ($item['password'] === $password);
        }
    }
    return false;
}







if (checkUserPassword($loginData['email'], $loginData['password'], $users)) {
    $currentUser = ['email' => $loginData['email']];
} else {
    echo "no";
}
