<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">

  <!--font Awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
  integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
  crossorigin="anonymous" />

  <!--google font-->
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

  <title>homepage</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap');
      * { 
          margin: 0; 
          padding: 0; 
          box-sizing: border-box; 
          font-family: 'Mulish', sans-serif; 
      }
    .logodiv
    {
      background-color: none;
      width: 25%;
      height: 80px;
      float: left;
    }
    #secdivlogo
    {
      width: 65%;
      height: 100%;
      
    }
    .searchdiv
    {
      background-color: none;
      width: 70%;
      height: 80px;
      float: left;
    }
    .searchdiv1
    {
      background-color: none;
      width: 30%;
      height: 43px;
      float: left;
      margin-top: 7px;
    }
    input
    {
      border: 6px solid rgb(160, 28, 28);
      width: 98%;
      height: 43px;
      border-radius: 50px;
      padding: 0px 10px;
      margin-top: 12px;
      margin-left: 0px;
      font-size: 16px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .button
    {
      background-color: rgb(193, 78, 78);
      border: 5px rgb(168, 41, 41);
      color: white;
      padding: 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 3px 2px;
      cursor: pointer;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }
    .button1
     {
      border-radius: 20px;
     }
     .anotherdiv
     {
      background-color: none;
      height: 80px;
      float: right;
    }

    .locationdiv
    {
      /* background-color: pink; */
      width: 14%;
      height: 80px;
      float: right;
    }
    .locationlogo1
      {
        /* background-color: rgb(160, 90, 160); */
        width: 87%;
        height: 50px;
        margin-left: 3px;
        margin-top: 9px;
      }
    .locationname
    {
      float: left;
      height: 101%;
      width: 62%;
    }
    .locationlogo2
    {
      float: left;
      width: 50px;
      height: 100%;
    }
    .location
    {
      background-color:yellowgreen;
      float: right;
      max-width: 50px;
      height: 20px;
    }
    .thirddiv
        {
          background-color: aqua;
          width: 100%;
          height: 20vw;
        }
        .forthdiv
        {
          /* background-color: rgb(219, 176, 81); */
          width: 100%;
          height: 3vw;
        
        }
        h2{
          /* font-family: 'Abril Fatface', cursive; */
          font-size: 18px;
        }
        .product_name {
        color: black;
        font-size: 1.4rem;
        text-transform: capitalize;
        font-weight: 500;
        }
        .left1
        {
          width: 23vw;
          height: 50vh;
          /* background-color: teal; */
          box-shadow: 12px 12px 22px rgb(162, 159, 159);
          /* float: left; */
          border-radius: 25px;
          
        }
        .left1 img{
          width: 100%;
          display: block;
          border-radius: 5px;
        }
        .card-body:hover{
          transform:scale(1.3);
          z-index:2;
        }
        .card-body{
            position: relative;
            width: 100%;
            height: 100%;
            transition: 1s;                                      
        }
        .fifthdiv{
          background-color: #80b3ff;
          width: 100%;
          height: 20vw;
          margin-top: 30px;

        }
        

  </style>
 </head>
  <body class="bg-light">
      <?php require 'partials/_nav.php'?>
      <!--container start-->
      <div class="container-fluid">
        <!--main row start-->
        <div class="row">
          <!-- logo start-->
          <div class="col-sm-3 col-11  logodiv ">
            <img src="img/logo1.png" id="secdivlogo" alt="LOGO">
          </div>
          <!-- searchbar start-->
            <div class="col-md-7 col-11 mx-3 anotherdiv ">
                <form action="" method="POST">
                    <div class="from-group searchdiv">
                        <input class="from-control" type="text" size="30" name="valueToSearch" placeholder="Search products here by name...">
                    </div>
                    <div class="searchdiv1">
                        <button class="button button1" type="submit" name="search">Search</button>
                    </div>
                </form>
            </div><!-- searchbar end-->
          <!-- locationbar start-->
          <div class="col-sm-3 col-11  locationdiv ">
            <div class="locationlogo1">
                    <img src="img/locationlogo.png" class="locationlogo2" alt="location icon">
                  
                    <div class="locationname">
                      <p>Parnasree,<br>Behala,<br>Kolkata-60</p>
                    </div>
                  </div>
            </div><!-- locationbar end-->
          
          </div>
          <!--2nd div start -->
          <div class="row">
            <div class="col-md-10 col-11 mx-auto thirddiv">
              <!-- <img src="img/1.webp" class="" alt="offerflex"> -->

            </div>
          </div><!--2nd div end -->
          <!--3rd div start -->
          <div class="row ">
            <div class="col-md-7 col-11 mx-auto px-4 mt-2 forthdiv text-center ">
              <h2 class="product_name mb-5">Our regular Deal</h2>
            </div>
          </div><!--3rd div end -->
          
          <!--4th div start-->
          <div class="row">
            <!--chicken-->
                <div class=" col-lg-3 col-md-3 col-sm-12  mx-auto px-3 py-3  left1 ">
                      <div class="card-body text-center"> 
                            <a href="/Front-end/checkout.php"><img src="img/3.png" class="image-responsive mb-2 " alt="Chicken"></a>
                            <h6 class="product_name mb-5">CHICKEN</h6>
                      </div>
                      
                </div>

              <!--fish-->
                <div class=" col-lg-3 col-md-3 col-sm-12  mx-auto px-3 py-3  left1 ">
                      <div class="card-body text-center"> 
                            <img src="img/2.jpg" class="image-responsive mb-2 " alt="Chicken">
                            <h6 class="product_name mb-5">FISH</h6>
                      </div>
                      
                </div>

              <!--Meat-->
                <div class=" col-lg-3 col-md-3 col-sm-12  mx-auto px-3 py-3  left1 ">
                      <div class="card-body text-center"> 
                            <img src="img/4.jpg" class="image-responsive mb-2 " alt="Chicken">
                            <h6 class="product_name mb-5">MEAT</h6>
                      </div>
                      
                </div>

              <!--Egg-->
                <div class=" col-lg-3 col-md-3 col-sm-12  mx-auto px-3 py-3  left1 ">
                      <div class="card-body text-center"> 
                            <a href=""><img src="img/5.png" class="image-responsive mb-2 " alt="Chicken"></a>
                            <h6 class="product_name mb-5">EGG</h6>
                      </div>
                </div>
          </div><!--4th div end -->
          
          <!--5th div start-->
          <div class="row">
            <div class="col-md-10 col-11 mx-auto fifthdiv">
              

            </div>
          </div><!--5h div end -->
              



        </div>
    </div>
</body>
</html>