<?php               
include("config/database.php");

if(isset($_POST['submit'])){
    echo "<pre>";
    print_r($_POST);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>
    <div class="container">
        <form id="form" class="form" action="crudOperation.php" method="post">
            <h2>Hey Register!</h2>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter email" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password2">Confirm password</label>
                <input type="password" id="password2" name="password2" placeholder="Re-enter your password" />
                <small>Error message</small>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <div>
        <button style="background-color: green; color: aliceblue; width: 70px;">All User</button>
    </div>
</body>
</html>
