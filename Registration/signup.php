<?php
include("./partials/dbconnect.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$showAlert = false;
$showError = false;
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$exists = false;

if(($password == $cpassword) && $exists == false){
 $sql = "INSERT INTO users (username, password, dt) VALUES ('$username', '$password', CURRENT_TIMESTAMP)";
  $result = mysqli_query($conn, $sql);
  if($result){
    $showAlert = true;

  }
}else{
  $showError = true;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include('partials/_nav.php'); ?>

<?php
if($showAlert){
echo
'<div class="alert alert-success" role="alert">
 Your Account is Created!
</div>';
};
?>
<?php
if($showError){
echo
'<div class="alert alert-warning" role="alert">
 Password did not match!
</div>';
};
?>

<div class="container">
    <h1 class="text-center">Sign Up To Our Websites</h1>
    <form action="/PHP/Registration/signup.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Usernames</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure you enter the same passsword.</div>
   
  </div>
 
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>