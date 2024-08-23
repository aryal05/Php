<?php 

// Get And Post Method

// if(isset($_GET['submit'])){
//    if(empty($_GET['username'])){
//     echo 'Usename is required';
//    }
//    else if(empty($_GET['password'])){
//     echo 'Password is required';
//    }
//    else{
//     echo 'Username and Password is Filled';
//    }
// }

// post method\
if(isset($_POST['submit'])){
    if(empty($_POST['username'])){
     echo 'Usename is required';
    }
    else if(empty($_POST['password'])){
     echo 'Password is required';
    }
    else{
     echo 'Username and Password is Filled';
    }
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get,Post Method</title>
</head>
<body>
    <form action="GetPostHTTP.php" method="post">
        <div>
        <label>UserName:</label>
        <input type="text" name="username"> 
        </div>
        <br>
        <div>
        <label>Password:</label>
        <input type="password" name="password"> 
        </div>
        <br>
        
        <div>
            <button type="submit" name="submit">Login</button>


        </div>
    </form>
    <br> <br>


    <a href="./GetPostHTTP.PHP">Home</a>
    
</body>
</html>