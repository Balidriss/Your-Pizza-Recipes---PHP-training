<?php

$postData = $_POST;

// FILE Transfert //
$allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
//               //

if (
    !isset($postData['email'])
    || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
    || empty($postData['message'])
    || trim($postData['message']) === ''
) {
    echo ('Email or message is wrong. Please make sure you completed the form correctly.');

    return;
}


if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
    if ($_FILES['screenshot']['size'] > 1000000) {
        echo "File too large.";
        return;
    }
}

$fileInfo = pathinfo($_FILES['screenshot']['name']);
$extension = $fileInfo['extension'];



if (!in_array($extension, $allowedExtensions)) {
    echo "Upload wasn't successfull, the extention {$extention} was not allowed.";
    return;
}

//test upload folder path
$path = __DIR__ . '/uploads/';
if (!is_dir($path)) {
    echo "Upload wasn't successfull, the upload folder was missing.";
    return;
}

move_uploaded_file($_FILES['screenshot']['tmp_name'], $path . basename($_FILES['screenshot']['name']))


?>
<!DOCTYPE html>
<html>

<head>
    <title>Your Pizza ! - Contact received</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php require_once(__DIR__ . '/includes/header.php'); ?>
    <div class="container">
        <h1>Message received !</h1>

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Review your information</h5>
                <p class="card-text"><b>Email</b> : <?php echo $postData['email']; ?></p>
                <p class="card-text"><b>Message</b> : <?php echo strip_tags($postData['message']); ?></p>
            </div>
        </div>
    </div>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>