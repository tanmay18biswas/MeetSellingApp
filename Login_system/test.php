<!DOCTYPE html>
<html>
<head>
        <title>Admin_Panel</title>
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
            <from action="/Admin/update.php" method="post">

            <table class="table table-striped table-hover table-border">


                <tr class="bg-dark text-white text-center">
                    <th> Field Name </th>
                    <th> Old Data </th>
                    <th> New Data </th>
                    <th> Click to Update </th>

                </tr>
                
                
                <!-- <input type="email" placeholder="Email" class="form-control mb-3" id="email" name="email">
                <td> <?php echo $res['User_phnno']; ?></td>
                <td> <?php echo $res['User_Add']; ?></td>
                <td> <?php echo $res['User_pincode']; ?></td> -->

                <?php
                
                    $id = $_GET['id'];
 
                    $q = "select * from register_user where User_ID=$id ";
                    $query = mysqli_query($conn,$q);
                    while($res = mysqli_fetch_array($query)){

                ?>

                <tr class="text-center">
                    <td>  User Name</td>
                    <td> <?php echo $res['User_Name']; ?></td>
                    <td> <input type=text placeholder="New Name" name="username" class="form-control"></td>
                    <td class="text-center"> <button class="btn-primary btn" ><a href="update_name.php?id=<?php echo $res['User_ID']; ?>" class="text-white"> Update Name</a></button></td>
                </tr>
                
            
            <?php
                    }
            ?>

                
            </table>
          </form>
        </div>
    </div>
</body>
</html>