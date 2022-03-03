<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="styles.css">
	<script src="registerScript.js"></script>
</head>
<body>
<button id="Home"><a href="index.html">Home</a></button>
<div class="wrapper">
  <h2>Register</h2>
  <div id="error_message"></div>
  <form id="myform" action="php/register.php" method="POST" onsubmit="return validate();">
    <div class="input_field">
        <input type="text" placeholder="First Name" id="fname" name="fname">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Last Name" id="lname" name="lname">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone" name="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email" name="email">
    </div>
    <div class="input_field">
        <input type="password" placeholder="Password" id="Password1" name="password">
    </div>
    <div class="input_field">
        <input type="password" placeholder="Confirm Password" id="Password2" name="cpassword">
    </div>
    <div class="btn">
        <input name="submit" type="submit">
    </div>
    <p class="login-register-text">Already have an account? <a href="login.php">Login Now</a></p>
  </form>
</div>

</body>
</html>