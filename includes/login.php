<?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
    <section id="section-login">
        <div class="container">
            <?php if (isset($_SESSION['LOGIN_ERROR_MESSAGE'])) : ?>
                <div class="oups">
                    <p><?php echo $_SESSION['LOGIN_ERROR_MESSAGE'];
                        unset($_SESSION['LOGIN_ERROR_MESSAGE']); ?>
                    </p>
                </div>
            <?php endif; ?>
            <h2>Login</h2>
            <form action="submit_login.php" method="post">
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
            <p> You are logged in as <?php echo $_SESSION['LOGGED_USER']['email']; ?> !</p>
        </div>
    </div>


<?php endif; ?>