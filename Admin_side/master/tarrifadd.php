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
              .col14{
                     position: relative;
                     width: 25%;
                     height: 25%;
                     left: 35%;
                     top: -10px;
              }
              .col14 img{
                     width: 100%;
                     height: 100%;
                     
              }
              .col16{
                     position: relative;
                     width: 10%;
                     height: 10%;
                     left: 45%;
                     top: -10px;
              }
              .col16 img{
                     width: 100%;
                     height: 100%;
                     
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
                            $("#txtroom").val(values[2]);
                            $("#txtsingle").val(values[3]);
                            $("#txtdouble").val(values[4]);
                            $("#txtextrap").val(values[5]);
                           
                           
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

                                   <form action="../savepages/tarrifsave.php" method="POST" role="form">

                                           <h3 style="text-align: center">Create User-Type</h3>

                                           <?php
                                                 $sql="select max(id) from tblroomtarrif";
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
                                                 <input type="text" class=""id="txtid" name="txtid"
                                                 placeholder="" value="<?php echo $rowcount;  ?>" required>
                                          </div>

                                          <div class="form1">
                                                  <input type="text" class="1" id="txtroom" name="txtroom" placeholder="Room-Name" list="dlist" autocomplete="off" require>

                                                  <datalist id="dlist">
                                                        <?php
                                                               $sql= "select room from tblrooms";
                                                               $res=mysqli_query($link,$sql);
                                                               if(mysqli_num_rows($res)> 0)
                                                               {
                                                                      while( $row=mysqli_fetch_array($res))
                                                                      {
                                                                             ?>
                                                                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
                                                                             <?php
                                                                      }
                                                               }
                                                        ?>
                                                  </datalist>
                                          </div>

                                          <div class="form1" >
                                                 <input type="text" class="" id="txtsingle" name="txtsingle" placeholder="Single"  >
                                          </div>

                                          <div class="form1" >
                                                 <input type="text" class="" id="txtdouble" name="txtdouble" placeholder="Double"  >
                                          </div>

                                          <div class="form1">
                                                 <input type="text" class="" id="txtextrap" name="txtextrap" placeholder="Extra-Person" >
                                          </div>

                                          <button type="submit" name="btntarrifsave"
                                                 class="btn btn-success btn-block btn1"><b>Add</b></button>

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
                                                        <th style="display: none">Id</th>
                                                        <th>Rooms-Name</th>
                                                        <th>Single</th>
                                                        <th>Double</th>
                                                        <th>Extra-Person</th>
                                                        <th>Option</th>
                                                 </tr>
                                          </thead>
                                          <tbody id="tbldata">
                                                <?php
                                                $i=1;
                                                 $sql="select *from tblroomtarrif";
                                                 $res=mysqli_query($link,$sql);
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                               echo"<tr>";
                                                               echo"<td>".$i; "</td>";
                                                               echo "<td style='display: none'>".$row["id"]."</td>";
                                                               echo"<td>".$row["room"]; "</td>";
                                                               echo"<td>".$row["singlerate"]; "</td>";
                                                               echo"<td>".$row["doublerate"]; "</td>";
                                                               echo"<td>".$row["extraperson"]; "</td>";
                                                               ?>
                                                               <td id="btntd">
                                                        <a href="../savepages/tarrifsave.php?btndelete=delete&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-danger">
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