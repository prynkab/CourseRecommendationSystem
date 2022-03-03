<?php
$db=mysqli_connect("localhost","root","","courserecommend");
session_start();
error_reporting(0);
if(isset($_POST['submit'])){
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

if ($password == $cpassword) {
    $sql = "SELECT * FROM register_user WHERE Email='$email'";
    $result = mysqli_query($db, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO register_user (First_Name, Last_Name, Email, ContactNo, password)
                VALUES ('$Fname','$Lname','$email', '$phone', '$password')";
        $result = mysqli_query($db, $sql);
        if ($result) {
            echo "<script>alert('Wow! User Registration Completed.')</script>";
            $Fname="";
            $Lname = "";
            $phone="";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
        } 
        else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email Already Exists.')</script>";
    }    
} else {
    echo "<script>alert('Password Not Matched.')</script>";
}
}
?>