<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Recommendation System</title>
    <link rel="stylesheet" href="style.css">
    <script src="login.js"></script>
</head>
<body>
    <div class="cover">
        <button id="Home"><a href="index.html">Home</a></button>
        <div class="wrapper">
            <h3>Login Here</h3>
            <div id="error_message"></div>
            <form action="php/login.php" id="login_form" onsubmit="return validate_login();" method="POST">
                <div class="form-control">
                    <input type="text" id="login_email" name="login_email" placeholder="Email">
                </div>
                <div class="form-control">
                    <input type="password" id="login_password" name="login_password" placeholder="Password">
                </div>
                <div class="form-control">
                    <input type="submit" id="login_btn" name="login_btn" placeholder="Login">
                </div>
            </form>
            <p>Don't have an account? <a href="register.php">Register Now</a></p>
        </div>
    </div>
</body>
</html>