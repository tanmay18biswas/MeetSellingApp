<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <title>Supplier Update Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="col-lg-12"><br><br>
            <h1 class="text-warning text-center"> Update Table Data </h1>
            <br>
            <table class="table table-striped table-hover table-border">


                <tr class="bg-dark text-white">
                    <th> Field Name </th>
                    <th> Old Data </th>
                    <th class="text-center"> Click to Update </th>

                </tr>
                
                <?php
                include 'partials/_dbconnect.php';
                
                    $id = $_GET['id'];
 
                    $q = "select * from supplier where Supplier_ID=$id ";
                    $query = mysqli_query($conn,$q);
                    while($res = mysqli_fetch_array($query)){

                ?>

                <tr>
                    <td>  User Name</td>
                    <td> <?php echo $res['Supplier_Name']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit"><a href="update_name1.php?id=<?php echo $res['Supplier_ID']; ?>" class="text-white"> Update Name</a></button></td>
                </tr>


                <tr>
                    <td>  User Email</td>
                    <td> <?php echo $res['Supplier_Email']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit"><a href="update_email1.php?id=<?php echo $res['Supplier_ID']; ?>" class="text-white"> Update Email</a></button></td>
                </tr>


                <tr>
                    <td>  User Phnno</td>
                    <td> <?php echo $res['Supplier_phnno']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit"><a href="update_phnno1.php?id=<?php echo $res['Supplier_ID']; ?>" class="text-white"> Update Phnno</a></button></td>
                </tr>



                <tr>
                    <td>  User Address</td>
                    <td> <?php echo $res['Supplier_Add']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit"><a href="update_address1.php?id=<?php echo $res['Supplier_ID']; ?>" class="text-white"> Update Address</a></button></td>
                </tr>

                <tr>
                    <td>  User Pincode</td>
                    <td> <?php echo $res['Supplier_pincode']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit"><a href="update_pincode1.php?id=<?php echo $res['Supplier_ID']; ?>" class="text-white"> Update Pincode</a></button></td>
                </tr>
                
            </table>
            <?php
            }
            ?>
          
        </div>
    </div>
</body>
</html>