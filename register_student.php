<?php
include 'Connect.php';

// Read
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<html lang="en">
<head> 
    <title>Student Details</title>
    <style>
    h1{color: green;}
     form{color: blue;}
    </style>
</head>
<body >
    <body>
    <center>
        <img src="students.jpg" style="height:320px; width:100%;">
    </body>
    <h1>Student Registraion Form </h1>
    </center>
<tr>
    <td>
    <form method="post" action="create.php">
    <b>Student Name:</b> <input type="text" name="name"><br><br>
    <b>Email Address:</b> <input type="email" name="email"><br><br>
    <b>Gender:</b> <input type="text" name="gender"><br><br>
    <b>Address:</b> <input type="text" name="address"><br><br>
    <input type="submit" value="Register student">
    <input type="reset" value="Reset">
    <a href="view_all.php"><botton>view</botton></a> 
    </td>
</tr>       
</form>
         <br><br><br><center><h5>Designed By Web Development Course Student. @ 2024</h5></center>
</body>
</html>