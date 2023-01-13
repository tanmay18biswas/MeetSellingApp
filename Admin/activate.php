<?php
session_start();
include 'partials/_dbconnect.php' ;

if(isset($_GET['token'])){
    $token = $_GET['token'];

    $updatequery = " update admin set Status='active' where Token='$token' ";

    $query = mysqli_query($conn, $updatequery);
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account activated";
            header('location:admin_login.php');
        }
        else{
            $_SESSION['msg'] = "You are logged out";
            header('location:admin_login.php');
        }
    }
    else{
        $_SESSION['msg'] = "Account didn't activated, please check your register mail";
        header('location:admin_signup.php');
    }
}


?>