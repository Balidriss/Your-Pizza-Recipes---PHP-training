<?php

function isValidRecipe(array $recipe): bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $value = $recipe['is_enabled'];
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


function redirectToUrl(string $url): never
{
    header("Location: {$url}");
    exit();
}

function disconect()
{
    $_SESSION['LOGGED_USER'] = null;
}
