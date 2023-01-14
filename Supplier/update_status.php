
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>New Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        *{
            padding: 0;
            margin-top: 0;
            box-sizing: border-box;
        }
        body{
            background: rgb(219,226,226);
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;

        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background: blue;
            border: 1px solid;
            color: white;
        }
        .a1{
            width: 94%;
            height: 65%;
            margin-top: 100px;
            align-content: center;
        }
        .pt-4 {
            padding-top: 1rem!important;
            padding-bottom: 2rem!important;
        }
        .px-5 {
            padding-right: 0rem!important;
            padding-left: 4rem!important;
        }
    </style>
  </head>
  <body>


                <?php
                $showAlert = false;
                $showError = false;
                
                include'partials/_dbconnect.php';

                if(isset($_POST['submit'])){

                        if(isset($_GET['id'])){

                                $id = $_GET['id'];

                                $newname = mysqli_real_escape_string($conn, $_POST['newname']);

                                $updatequery = " update `product` set Status='$newname' where Product_ID='$id' ";

                                $iquery = mysqli_query($conn, $updatequery);
                                        if($iquery){
                                                session_start();
                                                header('location:manage_pro.php');
                                        }
                                        else{
                                        $showError = "Status isn't updated";
                                        header('location:update_status.php');
                                        }

                                } 
                                else{
                                        $showError = "No id found";
                                        }
                        }

                        

                ?>


        <?php require 'partials/_nav1.php' ?>
        <?php
        if($showAlert){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your account is now created and you can login
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
                </button>
                </div>';
        }
        

        if($showError){
                echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> '.$showError.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
                </button>
                </div>';
        }
        ?> 








  <section class="From my-4 mx-5">
        <div class="container-xl">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="a1"><img src="./A2.jpg" class="img-fluid my-4 px-5" alt="Cookruku">
                    </div>
                    

                </div>
                <div class="col-lg-7 px-5 pt-4">
                    <h1 class="font-weight-bold my-3">Update Product Status</h1>
                    
                    <form action="" method="post">
                        
                        <div class="form-row col-lg-7">
                            <label for="password" class="form-label mt-4">Enter New status</label>
                            <input type="name" placeholder="New Status" class="form-control mb-3" id="name" name="newname">
                        </div>
                        
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="submit" class="btn1 my-3">Update</button>
                            </div>
                        </div>
                         
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
