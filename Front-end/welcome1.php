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
      <title>Welcome to Cookruku</title>
      
      <style>
        *{
          box-sizing: border-box;
          margin:0;
          padding: 0;
        }
        
        body
        {
          background-image: url('img/background.png');;
          height: 100vh;
          width: 100vw; 
          background-position:center;
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
        }
        
        #logo
        {
          max-height: 180px;
          float: left;
          margin-right: 430px;
        }
        h1 
        {
          font-size: 90px;
          font-family: "lucida handwriting",cursive;
          
        }
        .pt-5 {
            padding-top: 1rem!important;
            padding-bottom: 2rem!important;
        }
        .px-5 {
            padding-right: 0rem!important;
            padding-left: 7rem!important;
        }
        .a
        {
          font-family: "Segoe Print",Segoe Print;
          font-size: 15px;
          margin-top: none;
          text-align: left;
         
        }
      
        .img1 {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 480px;
          height: 280px;
          border-radius: 28px;
          
        }
        #loginbutton
        {
          width: 85px;
          height: 95px;
          padding-top: 20px;
        }
        .dropbtn
          {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
            /* margin-top: 10px; */

          }
          .dropdown 
          {
             
              display: inline-block;
              
          }
          .dropdown-content
          {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
          }
          .dropdown-content a
          {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
          }
          .dropdown-content a:hover 
          {
            background-color: #f1f1f1
          }
          .dropdown:hover .dropdown-content
          {
            display: block;
          }
          .dropdown:hover .dropbtn 
          {
            background-color: #0e0501;
          }
          .adjust
          {
            height: 100px;
            width: 100px;
            float: left;

          }
        </style>
        
      </head>
  <body>
    <section class="From">
      <div class="row no-gutters">
        <div class="col-lg-5" style=" width: 50%;"><!--left main column start-->
                  
                  <div class="form-row"><!--cookruku logo start-->
                      <div class="col-lg-5 my-5 mx-5 text-center">
                        <img src="img/logo1.png" id="logo" alt="logo"><br><br>
                      </div>
                  </div><!--cookruku logo end-->
                
                  <div class="form-row"><!--welcome logo start-->
                      <div class="col-lg-5  my-5 mx-5 text-center">
                        <h1><strong>Welcome!</strong></h1>
                        </div>
                  </div><!--welcome logo end-->

                <div class="form-row"><!--paragraph start-->
                    <div class="col-lg-5 mx-5  a ">
                      <p ></p><b>Get fresh chicken from your local butchers. Why sign up? We use your data to
                        provide a catalogue of local butchers and farmers, and an array of options for you to choose from.
                        Cookruku delivers your order before you can figure out what came first – the chicken or the egg? 
                        By ordering from us, not only do you get fresh protein options (no more frozen meats with added 
                        preservatives!), but you also get to support small businesses and boost your local economy.
                          So login and start exploring.</b></p>
                      </div>
                </div><!--paragraph end-->


        </div><!--left main column end-->

        <div class="col-lg-7 px-5 pt-5 text-center" style=" width: 50%;"><!--right main column start-->
              
          <div class="form-row"> <!--1st big Picture start-->
                <div class="col-lg-5 my-5 mx-5 mt-4">
                  <img src="img/chicken.png" class="img1" alt="rosted chicken">
                </div>
              </div> <!--1st big Picture end-->
          
              <!-- for sign up -->
              <div class="form-row">  <!--row start -->
                  <div class="col-lg-5 my-5 mx-5 mt-4 text-center"> <!--column start -->
                      <div class="adjust" style="background-color: darkblue; box-shadow: 12px 12px 22px rgb(60, 59, 59);
                      border-radius: 18px;"><!--sticker start -->
                        <img src="img/chickenlike.png" id="loginbutton" alt="login_button">
                      </div>

                      <div class="adjust" style=" margin-top: 25px;width:50%">  <!--dropdown start-->
                        <div class="dropdown">
                          <button class="dropbtn">SignUp</button>
                          <div class="dropdown-content">
                            <a href="/Register_User/user_signup.php">Register User</a>
                            <a href="/Supplier/supplier_signup.php">Supplier</a>
                          </div>
                        </div>
                      </div><!--dropdown end-->
                    </div>  <!--column end -->


              </div><!--row end -->
<!-- for login  -->
               <div class="form-row"> <!--row start -->
                <div class="col-lg-5 my-5 mx-5 mt-4 text-center"><!--column start -->
                    <div class="adjust" style="background-color: darkblue; box-shadow: 12px 12px 22px rgb(60, 59, 59);
                    border-radius: 18px;"><!--sticker start -->
                      <img src="img/chickenlike.png" id="loginbutton" alt="login_button">
                    </div><!--sticker end -->

                    <div class="adjust" style=" margin-top: 25px;width:50%"><!--dropdown start-->
                      <div class="dropdown">
                        <button class="dropbtn">LogIn</button>
                        <div class="dropdown-content">
                          <a href="/Register_User/user_login.php">Register User</a>
                          <a href="/Supplier/supplier_login.php">Supplier</a>
                        </div>
                      </div>
                    </div>

                  </div><!--column end-->
              </div><!--row end-->


        </div><!--right main column end-->

      </div>
    </section>


    </body>
    </html>

