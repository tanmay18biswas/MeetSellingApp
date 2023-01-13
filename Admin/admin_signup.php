<?php
session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

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
        .a1{
            width: 94%;
            height: 65%;
            margin-top: 100px;
            align-content: center;
        }
        .pt-4 {
            padding-top: 1rem!important;
            padding-bottom: 2rem!important;
        }
        .px-5 {
            padding-right: 0rem!important;
            padding-left: 4rem!important;
        }
    </style>
  </head>
  <body>

  <?php
    $showAlert = false;
    $showError = false;
    $sender_email = '';
    include'partials/_dbconnect.php';

    if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($password, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery = " select * from `admin` where Admin_Email='$email' ";
    $query = mysqli_query($conn,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        // echo "email already exists";
        $showError = "Email Id Already Exists";
    }
    else{
        if($password === $cpassword){
            $insertquery = "insert into `admin` (Admin_Name, Admin_Email, Admin_phnno, Password, Token, Status, Date) 
            values('$username', '$email','$mobile','$pass','$token','inactive', current_timestamp())";

            $iquery = mysqli_query($conn, $insertquery);

            if($iquery){
                $showAlert = true;

            
                $subject = "Email Activation";
                $body = "Hi, $username. Click here to activate your account
                $sender_email = 'From: cookruku2022@gmail.com';
                http://localhost:8080/Admin/activate.php?token=$token";
                

                if (mail($email, $subject, $body, $sender_email)) {
                    $_SESSION['msg'] = "Check your mail to activate your account $email";
                     header('location:admin_login.php');
                } 
                else {
                    $showError = "Email sending failed...";
                    // echo "Email sending failed...";
                    }
            }
            else{
                $showError = "No inserted";
            }
            
                
        }
        else{
            $showError = "Passwords do not match";
        } 
        
        
        
    }
}


?>






  <?php require 'partials/_nav.php' ?>
       <?php
      if($showAlert){
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
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
        <div class="container-xl">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="a1"><img src="./A1.jpg" class="img-fluid my-4 px-5" alt="Cookruku">
                    </div>
                    <div class="social-media-links">
                        <div  class="links">
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 px-5 pt-4">
                    <h1 class="font-weight-bold my-3">Admin Sign Up</h1>
                    <form action="/Admin/admin_signup.php" method="post">
                        <div class="form-row col-lg-7 mt-4">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" placeholder="Enter your name" class="form-control mb-3" id="username" name="username" aria-describedby="emailHelp">
                        </div>

                        <div class="form-row col-lg-7 mt-4">
                            <label for="email" class="form-label">Email Id</label>
                            <input type="email" placeholder="Email" class="form-control mb-3" id="email" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="form-row col-lg-7 mt-4">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="number" maxlength="10" placeholder="Enter Phone no." class="form-control mb-3" id="phone" name="mobile">
                        </div>

                        <div class="form-row col-lg-7">
                            <label for="password" class="form-label mt-4">Password</label>
                            <input type="password" placeholder="*********" class="form-control mb-3" id="password" name="password">
                        </div>
                        
                        <div class="form-row col-lg-7">
                            <label for="cpassword" class="form-label mt-3">Confrom Password</label>
                            <input type="password" placeholder="Confrom password" class="form-control mb-3" id="cpassword" name="cpassword">
                            <div id="emailHelp" class="form-text">Make sure to type the same password</div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="submit" class="btn1 my-3">Sign Up</button>
                            </div>
                        </div>
                         <a href="admin_login.php">Log In here</a>
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