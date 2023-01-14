<!doctype html>
    <html>
        <head>
            <title></title>
            <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <style>
      /* .card {
          position: relative;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            height: 200px;
            margin: auto;
            border-radius: 10px;
            /* text-align: center; */
            font-family: arial;
            transition: 0.3s;
            padding: 30px 50px;
            back
        } */
        .card-body{
            position: relative;
            width: 100%;
            height: 100%;
        }
        img{
            width: 100%;
        }
        #firstdiv
        {
            margin-left: auto;
            margin-right: auto;
            width: 400px;
            height: 200px;
            background-color:none;
            
        }
      </style>

</head>
<body class="container">
    
    <div id="firstdiv" class="text-center">
        <img src="logo1.png" id="logo" alt="logo">
    </div>

    <div class="row">
    <?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'ytshoppingcart');
    // if($con){
    //     echo "connection successful";
    // }else{
    //     echo "no connection";
    // }
    $query = "SELECT * FROM `ytshoppingcart` order by id ASC  ";
    $queryfire = mysqli_query($con,$query);
    $num = mysqli_num_rows($queryfire);
    if($num > 0)
    {
        while($products = mysqli_fetch_array($queryfire)){
            ?>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <form>
                    <div class="card">
                        <h6 class="card-title bg-danger text-white p-2 text-uppercase"> <?php echo $products['name'];?></h6>
                        <div class="card-body">
                            <img src="<?php echo $products['image'];?>" alt="mobile" class="image-responsive mb-2">
                            <h6> &#8377; <?php echo $products['price'];?>per k.g.
                            <span>(<?php echo $products['discount'];?>% off)</span>
                        </h6>
                        <h6 class="badge badge-success">4.4<i class="fa fa-star"></i></h6>

                        

                        </div>

                        <div class="btn-group d-flex">
                            <button class="btn btn-info flex-fill">Add to Cart</button>
                            <button class="btn btn-warning flex-fill text-white">Buy Now</button>
                        </div>
                    </div>
                </form>

            </div>


            <?php
        }
    }
    ?>
    </div>

</body>
<html>

