<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $existSql = "SELECT *FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows > 0){
    $showError = "Username Already Exists";
  }
  else{
    if(($password == $cpassword)){
      $sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
      //$sql = "CREATE DATABASE dbtanmay3";
      $result = mysqli_query($conn, $sql);
      if($result){
        $showAlert = true;
      }
    }
    else{
      $showError = "Passwords do not match";
    }
  }

}
?>


 
<DOCTYPE html>
<html lang=-"en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport
    content" width=device-width, initial-scale=1.0">
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
      <?php require 'partials/_nav.php' ?>
      <?php
      if($showAlert){
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&time;</span>
        </button>
      </div>';
      }

      if($showError){
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '.$showError.'
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&time;</span>
          </button>
        </div>';
        }
      ?>
      <div class="contianer my-4">
          <h1 class="text-center">Sign up to our website</h1>
          <form class="ps-5" action="/Login_system/signup.php" method="post">
                <div class="form-group col-md-6 my-4">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-md-6 my-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group col-md-6 my-4">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                    <div id="emailHelp" class="form-text">Make sure to type the same password</div>
                </div>
                <div class="mb-3 form-check col-md-6 my-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary col-md-6 my-4">SignUp</button>
          </form>
     </div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
</body>
</html>
