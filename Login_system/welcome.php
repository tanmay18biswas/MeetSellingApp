<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>
 <DOCTYPE html>
<html lang=-"en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport
    content="width=device-width, initial-scale=1.0">
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
      <?php require 'partials/_nav.php' ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
  
    <div class="container my-4">
          <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
              <p>hey how are you doing? Welcome to iSecure. You are logged in as <?php echo $_SESSION['username']?>. 
                Aww yeah, you successfully read this important alert message. 
                This example text is going to run a bit longer so that you can see how spacing within
                 an alert works with this kind of content.</p>
              <hr>
              <p class="mb-0">Whenever you need to, be sure to logout <a href="/Login_system/logout.php"> using this link.</a></p>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
</body>
</html> 

 
