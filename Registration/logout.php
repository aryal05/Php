<?php 

session_start();


if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin'] != true){
    header(
        "location: login.php"
        );
    exit;
}else{
    echo 'error occured and cannot reodirect to the welcome page';
}


?>