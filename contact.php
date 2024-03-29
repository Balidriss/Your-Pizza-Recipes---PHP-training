<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pizza ! - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="d-flex flex-column min-vh-100">

    <?php require_once(__DIR__ . '/includes/header.php'); ?>
    <div class="container">
        <h1>Contact us</h1>
        <form action="submit_contact.php" method="post" enctype="multipart/form-data">
            <div class=" mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">We won't sell your email (for real).</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>

                <textarea class="form-control" placeholder="Your message" id="message" name="message"></textarea>
            </div>
            <div class="mb-3">
                <label for="screenshot" class="form-label">Your screenshot</label>
                <input type="file" class="form-control" id="screenshot" name="screenshot" />
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    <br />

    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
</body>


</html>