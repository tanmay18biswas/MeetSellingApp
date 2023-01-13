<?php
if(isset($_SESSION['loggedin']) && $_SESSION==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Front-end/welcome1.php">iSecure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Admin/admin_welcome.php">Home</a>
        </li>';


        if(!$loggedin){
        echo'<li class="nav-item">
          <a class="nav-link" href="/Admin/admin_login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Admin/admin_signup.php">Signup</a>
        </li>';
        }

        if($loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/Admin/logout.php">Logout</a>
        </li>';
        }
      
      echo '</ul>
    </div>
  </div>
</nav>';
?>
