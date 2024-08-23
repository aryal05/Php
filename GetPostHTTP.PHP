<?php 

// Get And Post Method

print_r($_GET);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get,Post Method</title>
</head>
<body>
    <form action="GetPostHTTP.php" method="get">
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
            <button type="submit">Login</button>


        </div>
    </form>
    <br> <br>


    <a href="./GetPostHTTP.PHP">Home</a>
    
</body>
</html>