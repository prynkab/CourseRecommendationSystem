<?php
    session_start();
    $db=mysqli_connect("localhost","root","","courserecommend");
    $mail = $_POST['login_email'];
    $password = md5($_POST['login_password']);
    $query= "SELECT id FROM register_user WHERE Email ='$mail' AND password= '$password'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result) == 1){
        $_SESSION['register_user'] = mysqli_fetch_array($result)[0];
        header("Location: http://localhost/CRS/admin/php/course.html");
    }
    else{
        header("Location: http://localhost/CRS/login.php");
    }
?>