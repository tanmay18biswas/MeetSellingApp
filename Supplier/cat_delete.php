<?php
include 'partials/_dbconnect.php';

$id = $_GET['id'];
 
$q = "DELETE FROM `category` WHERE Cat_ID = $id";
mysqli_query($conn,$q);

header('location:manage_cat.php');
?>