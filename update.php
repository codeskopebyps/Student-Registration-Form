<h1>Update Students</h1>
<?php
include 'Connect.php';

// Check th form data 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];


    // Update
    $sql = "UPDATE students SET name='$name', email='$email', gender='$gender', address='$address' WHERE id=$id";

    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    //  index.php
    header("Location: view_all.php");
    exit();
}

// Close connection
$conn->close();
?>

