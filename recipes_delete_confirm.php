<?php
session_start();

require_once(__DIR__ . '/includes/isConnect.php');
$getData = $_GET;

if (!isset($getData['id']) || !is_numeric($getData['id'])) {
    echo ('recipe id missing.');
    return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pizza ! - Delete recipe</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php require_once(__DIR__ . '/includes/header.php'); ?>
    <h1>Are you sure you want to delete your recipe ?</h1>
    <form action="recipes_post_delete.php" method="POST">
        <div class="mb-3 visually-hidden">
            <label for="id" class="form-label">Recipe's id</label>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $getData['id']; ?>">
        </div>
        <button type="submit" class="btn btn-danger">There is no going back !</button>
    </form>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>

</html>