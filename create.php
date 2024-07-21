<?php
include 'Connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];

// Create
$sql = "INSERT INTO students (name, email, gender, address) VALUES ('$name', '$email', '$gender', '$address')";
$conn->query($sql);

//index.php
header("Location: register_student.php");
exit();
?>
