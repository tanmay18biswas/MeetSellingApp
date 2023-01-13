<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: admin_login.php");
  exit;
}
?>




<!DOCTYPE html>
<html>
<head>
<?php require 'partials/_nav.php' ?>
        <title>Admin Welcome <?php $_SESSION['username']?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-12"><br><br>
            <h1 class="text-warning text-center"> Welcome - <?php echo $_SESSION['username']?> </h1>
            <br>

            <table class="table table-striped table-hover table-border">


                <tr class="bg-dark text-white text-center">
                    <th> ID </th>
                    <th> User Name </th>
                    <th> User Email </th>
                    <th> User Phnno </th>
                    <th> User Address </th>
                    <th> User Pincode </th>
                    <th> Date Time </th>
                    <th> Delete </th>
                    <th> Update </th>

                </tr>
                

                <?php
                    include 'partials/_dbconnect.php';
 
                    $q = "select * from register_user ";
                    $query = mysqli_query($conn,$q);
                    while($res = mysqli_fetch_array($query)){

                ?>

                <tr>
                    <td> <?php echo $res['User_ID']; ?></td>
                    <td> <?php echo $res['User_Name']; ?></td>
                    <td> <?php echo $res['User_Email']; ?></td>
                    <td> <?php echo $res['User_phnno']; ?></td>
                    <td> <?php echo $res['User_Add']; ?></td>
                    <td> <?php echo $res['User_pincode']; ?></td>
                    <td> <?php echo $res['date']; ?></td>
                    <td class="text-center"> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['User_ID']; ?>" class="text-white"> Delete</a></button></td>
                    <td class="text-center"> <button class="btn-success btn"><a href="update.php?id=<?php echo $res['User_ID'] ?>" class="text-white"> Update</a></button></td>
                </tr>
            
            <?php
                    }
            ?>

                
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script
</body>
</html>