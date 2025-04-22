<?php
       require("dbcon.php");
       session_start();
       if(isset($_SESSION["name"]))
       {
              echo"<script>open('savepages/adminloginsave.php','_self')</script>";
       } 
?>
<!DOCTYPE html>
<html lang="">

<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Hotel Anvita</title>
       <link rel="icon" href="image/logo1.png" type="png/x-icon" />

       <!-- Bootstrap CSS -->
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
       <!--[if lt IE 9]>
                     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
                     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
       <style>
              * {
                     margin: 0px 0px;
                     padding: 0px 0px;
              }
              div{
                     margin: 0px 0px;
                     padding: 0px 0px;
                   
              }
              .col1{
                     width: 100%;
                     height: 613px;
                     margin: 0px 0px;
                     padding: 0px 0px;
                     background-image: url("image/loginbackimg1.jpg");  
                     background-size: 100% 100%;
                     background-repeat: no-repeat; 
              }
              .col12{
                     width: 100%;
                     height: 610px;
                     background-color: rgba(26, 25, 25, 0.68);
              }
              .col13{
                     position: relative;
                     background-color: white;
                     margin: 0px 0px;
                     padding: 20px 20px;
                     width: 30%;
                     border-radius: 10px;
                     top: 20%;
                     left: 35%;
              }
              .col14{
                     position: relative;
                     width: 25%;
                     height: 25%;
                     margin: 10px 0px;
                     left: 35%;
                     top: -10px;
              }
              .col14 img{
                     width: 100%;
                     height: 100%;
                     
              }
              input {
                     border: none !important; 
                     outline: none !important; 
                     background: transparent; 
                     box-shadow: none !important;
                     padding: 10px; 
                     font-size: 16px;
              }
              input:hover, 
              input:focus {
                     border: none !important;
                     outline: none !important;
                     box-shadow: none !important;
              }
              .form1{
                     margin: 5px 0px;
                     border-bottom: 1px solid black;
              }
              .btn1{
                     margin: 25px 0px 0px 0px;
              }
           

       </style>
</head>
<body>

       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col1">
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col11" >
                     
              </div>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col12">

                 <div class="col13">

                     <div class="col14">
                            <img src="../image/logo1.png" alt="">
                     </div>

                    <form action="savepages/adminloginsave.php" method="POST" role="form">


                     <div class="form1">
                            <input type="text" class="" id="txtusername" name="txtusername" placeholder="Username" required>
                     </div>

                     <div class="form1">
                            <input type="text" class=""  name="txtpassword" id="txtpassword" placeholder="Password" required >
                     </div>

                     <button type="submit" name="btnloginsave" class="btn btn-success btn-block btn1"><b>Login</b></button>

                    </form>

                  </div>

              </div>
       </div>       

       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>