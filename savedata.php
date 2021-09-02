<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

//establishing Connection
$conn = mysqli_connect('localhost','root','','php-crud') or die("Form Submission Connection Failed");

//generate query
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

//fire query
$result = mysqli_query($conn,$sql) or die("Query Failed...");

//redirecting page to the location
header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>