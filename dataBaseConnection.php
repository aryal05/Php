<?php 
 // Insert Operation

 include ('config/database.php'); // also you can write require

// Insert Query
$date = date("Y-m-d H:i:s");
$sql = "insert into users (username, password, created_at) values('heris','passwordsasdsdas', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
