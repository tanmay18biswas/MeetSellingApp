<?php
$login = false;
$showError = false;
//$email="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
   //if( isset($_POST['username']) || isset($_POST['email']) || isset($_POST['password']) ){
  $username = $_POST['username'];
   $email = $_POST['email'];
  $password = $_POST['password'];
   //}
    $sql = "Select * from `users1` where `email` ='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header("location: welcome.php");
    }
  else{
    $showError = "Invalid credentials";
  }

}
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Log In</title>
    <style>
        *{
            padding: 0;
            margin-top: 0;
            box-sizing: border-box;
        }
        body{
            background: rgb(219,226,226);
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;

        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background: blue;
            border: 1px solid;
            color: white;
        }
        .pt-5 {
            padding-top: 1rem!important;
            padding-bottom: 2rem!important;
        }
        .px-5 {
            padding-right: 0rem!important;
            padding-left: 7rem!important;
        }       
    </style>
  </head>
  <body>
     <?php require 'partials/_nav.php' ?>
    <?php
    if($login){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your are logged in
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&time;</span>
      </button>
    </div>';
    }

    if($showError){
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"></span>
        </button>
      </div>';
      }
    ?> 

    
    <section class="From my-4 mx-5">
        <div class="container-xl" style=" margin-top: 4rem;">
            <div class="row no-gutters">
                <div class="col-lg-5" style=" margin-top: 46px;">
                    <img src="./A2.jpg" class="img-fluid" alt="John_cena">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Log In</h1>
                <form action="/Login_system1/login.php" method="post">
                        <div class="form-row  mt-4">
                            <label for="username" class="form-label">Name</label>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text"name="username" placeholder="Enter your name" class="form-control p-4">
                            </div>
                        </div>

                         <div class="form-row  mt-4">
                            <label for="email" class="form-label">Email Id</label>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Enter your email" class="form-control p-4">
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="password" class="form-label mt-4">Password</label>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="*********" class="form-control p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5">LogIn</button>
                            </div>
                        </div>
                        <a href="recover_email.php">Frogot password</a>
                        <p>Don't have an account? <a href="signup.php">Register here</a></p>
                </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>