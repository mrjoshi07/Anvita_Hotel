
<?php
       require("../dbcon.php");
       session_start();
       if (!isset($_SESSION["name"])) 
       {
              echo"<script>open('../adminlogin.php','_self'); </script>";
       }
?>
<!DOCTYPE html>
<html lang="">

<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Hotel Anvita</title>
       <link rel="icon" href="../image/logo1.png" type="png/x-icon" />

       <!-- Bootstrap CSS -->
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
       <!--[if lt IE 9]>
                     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
                     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
       <link rel="stylesheet" href="style.css">

       <style>
                .col15{
                     position: relative;
                     background-color: rgba(255, 255, 255, 0.745);
                     display: inline-block;
                     margin: 0px 0px;
                     padding: 20px 20px;
                     width: 40%;
                     border-radius: 10px;
                     top: -100px;
                     left: %;
              }
            
              .col16{
                     position: relative;
                     width: 15%;
                     height: 15%;
                     left: 40%;
                     top: -10px;
                     background: transparent; 
              }
              .col16 img{
                     width: 100%;
                     height: 100%;
                     background: transparent; 
                     
              }
            
       </style>
</head>

<body>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col1">
      
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col2">

                     <?php
                       include("../header/header.php");
                       include("../header/menubar.php");
                     ?>

                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col3">
                   
                            <div class="col13">

                                   <div class="col14">
                                           <img src="../image/logo1.png" alt="">
                                   </div>

                                   <form action="../savepages/usersave.php" method="POST" role="form">

                                           <h3 style="text-align: center"> Create User-Type</h3>

                                           <?php
                                                 require("../dbcon.php");
                                                 $sql="select max(id) from tbluser";
                                                 $res=mysqli_query($link,$sql);
                                                 $rowcount=0;
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        if($row=mysqli_fetch_array($res))
                                                        {
                                                               $rowcount=$row[0]+1;
                                                        }
                                                 }
                                                 else
                                                 {
                                                        $rowcount=1;
                                                 }    
                                           ?>

                                          <div class="form1" style="display: none;">
                                                 <input type="text" class="" id="txtid" name="txtid"
                                                 placeholder="" value="<?php echo $rowcount;  ?>" required>
                                          </div>

                                          <div class="form1" >
                                                 <input type="text" class="" id="txtuser" name="txtuser" placeholder="User" required>
                                          </div>


                                          <button type="submit" name="btnusersave"
                                                 class="btn btn-success btn-block btn1"><b>Save</b></button>

                                   </form>

                            </div>

                            <div class="col15">
                                   <div class="col16">
                                           <img src="../image/logo1.png" alt="">
                                   </div>

                                   
                                   <table class="table table-bordered table-hover table-responsive">
                                   <thead>
                                                 <tr>
                                                        <th style="display: none;">Id</th>
                                                        <th>No</th>
                                                        <th>User-Type</th>
                                                        <th>Option</th>
                                                 </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                                 $sql="select *from tbluser";
                                                 $i=1;
                                                 $res=mysqli_query($link,$sql);
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                        echo "<tr>";

                                                        echo "<td style='display: none;'>".$row[0]; "</td>";
                                                        echo "<td>" .$i; "</td>";
                                                        echo "<td>".$row[1]; "</td>";
                                                        ?>
                                                        <td id="btntd">
                                                        <a href="../savepages/usersave.php?btndelete=delete&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-danger">
                                                               <span class="glyphicon glyphicon-trash glyphicon1" aria-hidden="true"></span>
                                                        </a>
              
                                                        </td>
                                                        </tr>
                                                        <?php
                                                         $i++;
                                                        }
                                                        
                                                 }
                                          ?>
                                          </tbody>
                                   </table>
                                   
                            </div>
                     </div>

              </div>

       </div>

       
    
       


       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>