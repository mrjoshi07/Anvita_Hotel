<?php
       session_start();
       require("dbcon.php");
       if(isset($_POST["btncreateusersave"]))
       {
              
                 $id=trim($_POST["txtid"]);
                 $usertype=trim($_POST["txtuser"]);   
                 $name=trim($_POST["txtname"]);
                 $mobile=trim($_POST["txtmobile"]);
                 $email=trim($_POST["txtemail"]);
                 $password=trim($_POST["txtpassword"]);

                 $sql="select *from tblcreateuser where id='$id'";
                 $res=mysqli_query($link,$sql);
                 if(mysqli_num_rows($res)>0)
                 {
           
                    $sql="delete from tblcreateuser where id='$id'";
                     if(mysqli_query($link,$sql)){
                       echo "<script>alert('Record updated....')</script>";
                       echo"<script>open('../master/createuser.php','_self')</script>";       
                     }
           
                 } 
            
                 $sql="insert into tblcreateuser values('$id','$usertype','$name','$mobile','$email','$password')";
                 if(mysqli_query($link,$sql))
                 {
                    echo "<script>alert('Record inserted....')</script>";
                    echo"<script>open('../master/createuser.php','_self')</script>";       
                 }
                 mysqli_close($link);    
             
              }
              else if(isset($_GET["btndelete"]))
              {
                   $id=$_GET["id"];
                  $sql="delete from tblcreateuser where id='$id'";
                  if(mysqli_query($link,$sql))
                  {
                      echo "<script>alert('Recrod is Deleted')</script>";
                      echo "<script>open('../master/createuser.php','_self')</script>";          
                  }
              }
      
?>