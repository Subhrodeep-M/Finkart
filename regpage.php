<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="regpage.css">
</head>

<body>
    <div class="login-container" role="main">
        <div class="login-wrapper">
            <h1 class="login-title">Register</h1>
            <form class="login-form" action="register.php" method="POST">
                <div class="input-group">
                    <label for="name" class="input-label">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="text-input"
                        placeholder="John Doe"
                        required
                        autocomplete="name"
                        aria-required="true" />
                </div>
                <div class="input-group">
                    <label for="numbers" class="input-label">Phone No.</label>
                    <input
                        type="tel"
                        id="number"
                        name="number"
                        class="text-input"
                        placeholder="12345 67890"
                        pattern="[0-9]{10}"
                        maxlength="10"
                        required
                        autocomplete="number"
                        aria-required="true" />
                </div>
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
                <button type="submit" class="signup-button" name="signUp">Sign Up</button>
            </form>
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
                    aria-label="Sign in with WhatsApp">
                    <img
                        src="Images/WhatsApp Logo.png"
                        class="social-icon"
                        alt="WhatsApp"
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
            <p class="login-text">
                Already have an account?
                <a href="login2.php" class="login-link">Login Now</a>
            </p>
        </div>
    </div>
</body>

</html>