<?php
include 'Connect.php';

$id = $_POST['id'];

// Delete
$sql = "DELETE FROM students WHERE id=$id";
$conn->query($sql);

// index.php
header("Location: view_all.php");
exit();
?>
