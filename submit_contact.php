<?php
$getData = $_GET;

if (
    !isset($getData['email'])
    || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL)
    || empty($getData['message'])
    || trim($getData['message']) === ''
) {
    echo ('Email or message are wrong. Please make sure you completed the form correctly.');

    return;
}
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
                <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
                <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
            </div>
        </div>
    </div>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>