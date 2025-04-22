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
     <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                     width: 55%;
                     border-radius: 10px;
                     top: 70px;
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

       <script> 
                     $(function(){
                            $("#tbldata").on("click","tr",function(event){
                            var values=[];
                            var count=0;
                            $(this).find("td").each(function(){
                                   values[count]=$(this).text();
                                   count++;
                            });
                            $("#txtid").val(values[1]);  
                            $("#txtuser").val(values[2]);
                            $("#txtname").val(values[3]);
                            $("#txtmobile").val(values[4]);  
                            $("#txtemail").val(values[5]);
                            $("#txtpassword").val(values[6]);
                           
                           
                         });
                     });

             </script>
</head>

<body>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col1">
      
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col2">

                     <?php
                       require("../dbcon.php");
                       include("../header/header.php");
                       include("../header/menubar.php");
                     ?>

                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col3">
                   
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col13">

                                   <div class="col14">
                                          <img src="../image/logo1.png" alt="">
                                   </div>

                                   <form action="../savepages/createusersave.php" method="POST" role="form">

                                           <h3 style="text-align: center"> Create User-Type</h3>

                                           <?php
                                               
                                                 $sql="select max(id) from tblcreateuser";
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

                                          <div class="form1">
                                                  <input type="text" class="" id="txtuser" name="txtuser" placeholder="User" list="clist" autocomplete="off" require>
                                                  <datalist id="clist">
                                                        <?php
                                                               $sql="select * from tbluser";
                                                               $res=mysqli_query($link,$sql);
                                                               if(mysqli_num_rows($res)> 0)
                                                               {
                                                                      while($row=mysqli_fetch_array($res))
                                                                      {
                                                                             ?>
                                                                                    <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                                                                             <?php
                                                                      }
                                                               }
                                                        ?>
                                                  </datalist>
                                          </div>

                                          <div class="form1" >
                                                 <input type="text" class="" id="txtname" name="txtname"
                                                 placeholder="Name" required>
                                          </div>

                                          <div class="form1" >
                                                 <input type="text" class="" id="txtmobile" name="txtmobile"
                                                 placeholder="Mobile"  required>
                                          </div>

                                          <div class="form1" >
                                                 <input type="text" class="" id="txtemail" name="txtemail"
                                                 placeholder="Email"  required>
                                          </div>

                                          <div class="form1" >
                                                 <input type="text" class="" id="txtpassword" name="txtpassword"
                                                 placeholder="Password"  required>
                                          </div>


                                          <button type="submit" name="btncreateusersave"
                                                 class="btn btn-success btn-block btn1"><b>Save</b></button>

                                   </form>

                            </div>

                            
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col15">
                                   
                                   <div class="col16">
                                          <img src="../image/logo1.png" alt="">
                                   </div>

                                   <table class="table table-bordered table-hover table-responsive">
                                   <thead>
                                                 <tr>
                                                        <th>No</th>
                                                        <th>Type</th>
                                                        <th>Staffname</th>
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Option</th>
                                                 </tr>
                                          </thead>
                                          <tbody id="tbldata">
                                                <?php
                                                $i=1;
                                                 $sql="select *from tblcreateuser";
                                                 $res=mysqli_query($link,$sql);
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                               echo"<tr>";
                                                               echo"<td>".$i; "</td>";
                                                               echo "<td style='display: none'>".$row["id"]."</td>";
                                                               echo"<td>".$row["usertype"]; "</td>";
                                                               echo"<td>".$row["name"]; "</td>";
                                                               echo"<td>".$row["mobile"]; "</td>";
                                                               echo"<td>".$row["email"]; "</td>";
                                                               echo"<td>".$row["password"]; "</td>";
                                                               ?>
                                                               <td id="btntd">
                                                        <a href="../savepages/createusersave.php?btndelete=delete&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-danger">
                                                               <span class="glyphicon glyphicon-trash glyphicon1" aria-hidden="true"></span>
                                                        </a>
              
                                                        </td>
                                                         <?php

                                                               echo"</tr>";
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