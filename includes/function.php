<?php

function authorInfo(string $email, array $users): array
{
    foreach ($users as $item) {
        if ($email === $item['email']) {
            $value = ['full_name' => $item['full_name'], 'age' => $item['age']];
            return $value;
        } else {
            $value = ['full_name' => 'Anonym', 'age' => -1];
        }
    }
    return $value;
}


function redirectToUrl(string $url): never
{
    header("Location: {$url}");
    exit();
}
