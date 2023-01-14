<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <title>Product Update</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="col-lg-12"><br><br>
            <h1 class="text-warning text-center"> Update Product </h1>
            <br>
            <table class="table table-striped table-hover table-border">


                <tr class="bg-dark text-white">
                    <th> Field Name </th>
                    <th> Old data </th>
                    <th class="text-center"> Click to Update </th>

                </tr>
                
                <?php
                include 'partials/_dbconnect.php';
                
                    $id = $_GET['id'];
 
                    $q = "select * from product where Product_ID=$id ";
                    $query = mysqli_query($conn,$q);
                    while($res = mysqli_fetch_array($query)){
                        

                ?>

                <tr>
                    <td>  Product Name</td>
                    <td> <?php echo $res['Product_Name']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit">
                        <a href="update_proname.php?id=<?php echo $res['Product_ID']; ?>" class="text-white">
                        Update </a></button></td>
                </tr>


                <tr>
                    <td>  Description</td>
                    <td> <?php echo $res['Description']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit">
                        <a href="update_des.php?id=<?php echo $res['Product_ID']; ?>" class="text-white">
                        Update </a></button></td>
                </tr>


                <tr>
                    <td>  Price</td>
                    <td> <?php echo $res['Price']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit">
                        <a href="update_price.php?id=<?php echo $res['Product_ID']; ?>" class="text-white"> 
                        Update </a></button></td>
                </tr>



                <tr>
                    <td>  Status</td>
                    <td> <?php echo $res['Status']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit">
                        <a href="update_status.php?id=<?php echo $res['Product_ID']; ?>" class="text-white"> 
                        Update </a></button></td>
                </tr>

                <tr>
                    <td>  Image</td>
                    <td> <?php echo $res['image']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit">
                        <a href="update_image.php?id=<?php echo $res['Product_ID']; ?>" class="text-white"> 
                        Update </a></button></td>
                </tr>

                <tr>
                    <td>  Discount</td>
                    <td> <?php echo $res['discount']; ?></td>
                    <td class="text-center"> <button class="btn-primary btn" type="submit">
                        <a href="update_dis.php?id=<?php echo $res['Product_ID']; ?>" class="text-white"> 
                        Update </a></button></td>
                </tr>
                
            </table>
            <?php
            }
            ?>
          
        </div>
    </div>
</body>
</html>