<?php
$db=mysqli_connect("localhost","root","","courserecommend");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['register_email'];
$course = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_STRING);
$payment_method = filter_input(INPUT_POST, 'payment_method', FILTER_SANITIZE_STRING);

$query = "SELECT id FROM course WHERE Course_Name='$course'";
$result = mysqli_query($db,$query);

$row = mysqli_fetch_array($result);
$CourseID = $row[0];

$query = "SELECT id FROM payment WHERE PaymentMethod='$payment_method'";
$result = mysqli_query($db,$query);

$row2 = mysqli_fetch_array($result);
$paymentID = $row2[0];

$query = "SELECT id FROM register_user WHERE Email='$email'";
$result = mysqli_query($db,$query);

$row2 = mysqli_fetch_array($result);
$userID = $row2[0];
$query="INSERT INTO register_course(First_Name, Last_Name, Email, Course_Id, PaymentMethodID, PaymentDateTime, user) VALUES('$fname','$lname','$email','$CourseID','$paymentID', NOW(), '$userID')";

mysqli_query($db,$query);
?>
