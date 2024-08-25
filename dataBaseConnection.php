<?php 

/* 
   //DataBase Connection
   MySQli extention - Works with only MySQL Dtabase
   PDO(PHP Data Object) - Work with 12 Different Databases 


*/

// Connectiong MySQL with  (oops)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'php';


//Create Connection
$conn = new mysqli($servername,$username, $password, $dbName);


// Check connection

if($conn->connect_error){
    echo 'Conection failed:' . $conn-> connect_error;
    exit;
}

echo 'Connection Sucessful';


?>