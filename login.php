

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="cover">
            <div class="front">
                <div class="text">
                    <img src="./images/lawHands.jpg" alt="law">
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="./php/loginCheck.php" method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="mail" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="psw" placeholder="Enter your password" required>
                            </div>
                            <div class="text"><a href="signup.php">Forget password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Login">
                            </div>
                            <div class="text sign-up-text">Dont have account? <label> <a href="signup.php">Signup now.</a> </label></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
