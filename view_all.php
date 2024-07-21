<h1>All Students</h1>

<table border="5">
    <tr>
        <th>Student Id</th>
        <th>Student Name</th>
        <th>Email Address</th>
        <th>Gender</th>
        <th>Address</th>            
        <th>Action</th>
    </tr>
    <?php

    include 'Connect.php';

    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["address"]."</td><td>".
                "<form method='post' action='update.php'>" .
                "<input type='hidden' name='id' value='".$row["id"]."'>" .
                "<input type='text' name='name' value='".$row["name"]."'>" .
                "<input type='text' name='email' value='".$row["email"]."'>" .
                "<input type='text' name='gender' value='".$row["gender"]."'>" .
                "<input type='text' name='address' value='".$row["address"]."'>" .
                "<input type='submit' value='Update'>" .
                "</form>" .
                "<form method='post' action='delete.php'>" .
                "<input type='hidden' name='id' value='".$row["id"]."'>" .
                "<input type='submit' value='Delete'>" .
                "</form>" .
            "</td></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
        
</table>
