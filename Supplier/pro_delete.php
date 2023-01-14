<?php
include 'partials/_dbconnect.php';

$id = $_GET['id'];
 
$q = "DELETE FROM `product` WHERE Product_ID = $id";
mysqli_query($conn,$q);

header('location:manage_pro.php');
?>