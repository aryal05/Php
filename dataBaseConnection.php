<?php 
 // Insert Operation

 include ('config/database.php'); // also you can write require

// Insert Query
// $date = date("Y-m-d H:i:s");
// $sql = "insert into users (username, password, created_at) values('heris','passwordsasdsdas', '$date')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

//SELECT QUERY

// $sql = 'select username, id, created_at from users';
// $result = $conn->query($sql);
// if($result -> num_rows >0){
//     while($row = $result->fetch_assoc()){
//         echo '<pre>';
//         print_r($row);
//     }
// }




// UPDATE QUERY

$sql = "update users set username = 'aryal', password = 'Updaryallrd' where id = 1";
$result = $conn->query($sql);

if($result){
    echo 'Updation done'. '<br>';
}




// Delete Query

$sql = "delete from users where id = 2";
$result = $conn->query($sql);

if($result){
echo 'Deleted';
}


?>
