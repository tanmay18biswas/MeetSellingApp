<?php
include 'partials/_dbconnect.php';

$id = $_GET['id'];
 
$q = "DELETE FROM `supplier` WHERE Supplier_ID = $id";
mysqli_query($conn,$q);

header('location:supplier_panel.php');
?>
