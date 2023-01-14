<?php
session_start();
include 'partials/_dbconnect.php' ;

if(isset($_GET['token'])){
    $token = $_GET['token'];

    $updatequery = " update registration set status='active' where token='$token' ";

    $query = mysqli_query($conn, $updatequery);
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account activated";
            header('location:login.php');
        }
        else{
            $_SESSION['msg'] = "You are logged out";
            header('location:login.php');
        }
    }
    else{
        $_SESSION['msg'] = "Account didn't activated, please check your register mail";
        header('location:signup.php');
    }
}


?>