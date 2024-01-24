<?php

function isValidRecipe(array $recipe): bool
{
    if (array_key_exists('isDisplayed', $recipe)) {
        $value = $recipe['isDisplayed'];
    } else {
        $value = false;
    }
    return $value;
}

function displayableRecipes(array $recipes): array
{
    $value = [];
    foreach ($recipes as $item) {
        if (isValidRecipe($item))
            $value[] = $item;
    }
    return $value;
}


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

function isUserLoggedIn(array $user): bool
{
    $value = false;
    if (isset($user)) {
        if (isset($user['isLoggedIn'])) {
            $value = $user['isLoggedIn'];
        }
    }
    return $value;
}
function redirectToUrl(string $url): never
{
    header("Location: {$url}");
    exit();
}
