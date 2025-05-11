<?php


session_start();

include 'connect.php';

//Login form
if (isset($_POST['singnIn'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    //$password = md5($password);

    $sql = "SELECT * FROM register WHERE email = '$email' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        $message = "User Not found, Incorrect Email or Password, Please try again";
    }
}

?>

<?php include 'template/header.php'; ?>

<div class="login-container" role="main">
    <div class="login-wrapper">
        <h1 class="login-title">Login</h1>



        <form class="login-form" action="" method="POST">
            <div class="input-group">
                <label for="email" class="input-label">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="text-input"
                    placeholder="username@gmail.com"
                    required
                    autocomplete="email"
                    aria-required="true" />
            </div>
            <div class="input-group">
                <label for="password" class="input-label">Password</label>
                <div class="password-input-wrapper">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="password-text"
                        placeholder="Password"
                        required
                        autocomplete="current-password"
                        aria-required="true" />
                    <button
                        type="button"
                        class="password-toggle"
                        aria-label="Toggle password visibility">
                        <img
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/d522e2976b5e1fa53d4bfcc9d74ad70afacfa7a19091ec6d09a966bfd17fdecf?placeholderIfAbsent=true&apiKey=a5fc1ccd64e54a31816e3f02696da736"
                            alt=""
                            width="11"
                            height="11" />
                    </button>


                </div>
            </div>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <button type="submit" class="signin-button" name="singnIn">Sign in</button>
        </form>

        <div class="error-message">
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>

        <p class="divider-text" role="separator">or continue with</p>
        <div class="social-login">
            <button
                type="button"
                class="social-button"
                aria-label="Sign in with Google">
                <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/1b17f4e13e0e5f5702e6be45475a7280feebd7b554c29515ebb23674a3cbb7d0?placeholderIfAbsent=true&apiKey=a5fc1ccd64e54a31816e3f02696da736"
                    class="social-icon"
                    alt="Google"
                    width="18"
                    height="18" />
            </button>
            <button
                type="button"
                class="social-button"
                aria-label="Sign in with Apple">
                <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/7a5553bfc38eb629d62f77d96e053d12a70d4f057a4851a75490a019729c1ccc?placeholderIfAbsent=true&apiKey=a5fc1ccd64e54a31816e3f02696da736"
                    class="social-icon"
                    alt="Apple"
                    width="18"
                    height="18" />
            </button>
            <button
                type="button"
                class="social-button"
                aria-label="Sign in with Facebook">
                <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/2b44b433804d6d84aa3c9b0dc172eb9b9d3ea4a98e1c92dfe39f87727ea23c4d?placeholderIfAbsent=true&apiKey=a5fc1ccd64e54a31816e3f02696da736"
                    class="social-icon"
                    alt="Facebook"
                    width="18"
                    height="18" />
            </button>
        </div>

        <p class="register-text">
            Don't have an account yet?
            <a href="regpage.php" class="register-link">Register for free</a>
        </p>

    </div>
</div>

<?php include 'template/footer.php'; ?>