<?php
include 'partials/_dbconnect.php';

$id = $_GET['id'];
 
$q = "DELETE FROM `register_user` WHERE User_ID = $id";
mysqli_query($conn,$q);

header('location:admin_panel.php');
?>
