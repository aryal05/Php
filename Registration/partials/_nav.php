



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
   session_start();
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']== true){
    $loggedin = true;
};



 echo'   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Registration">iSecure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PHP/Registration/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PHP/Registration/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PHP/Registration/signup.php">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PHP/Registration/logout.php">LogOut</a>
        </li>
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>' ?>
</body>
</html>