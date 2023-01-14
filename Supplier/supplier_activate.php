<?php
session_start();
include 'partials/_dbconnect.php' ;

if(isset($_GET['token'])){
    $token = $_GET['token'];

    $updatequery = " update supplier set Status='active' where Token='$token' ";

    $query = mysqli_query($conn, $updatequery);
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account activated";
            header('location:supplier_login.php');
        }
        else{
            $_SESSION['msg'] = "You are logged out";
            header('location:supplier_login.php');
        }
    }
    else{
        $_SESSION['msg'] = "Account didn't activated, please check your register mail";
        header('location:supplier_signup.php');
    }
}


?>