<?php

$loginData = $_POST;


if (isset($loginData['email']) &&  isset($loginData['password'])) {
    if (!filter_var($loginData['email'], FILTER_VALIDATE_EMAIL)) {
        $error = 'Email not valid.';
    } else {
        foreach ($users as $item) {
            if ($item['email'] === $loginData['email'] && $item['password'] === $loginData['password']) {
                $currentUser = ['email' => $item['email']];
            }
        }
        if (!isset($currentdUser)) {
            $error = 'You have entered an invalid username or password';
        }
    }
}



if (!isset($currentUser)) : ?>


    <section id="section-login">
        <div class="container">
            <?php if (isset($error)) : ?>
                <div class="oups">
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>
            <h2>Login</h2>
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" aria-describedby="password-help" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
    </section>
<?php else : ?>
    <div class="container">
        <div class="welcome-message">
            <p> You are logged in as <?php echo authorInfo($currentUser['email'], $users)['full_name']; ?> !</p>
        </div>
    </div>


<?php endif; ?>