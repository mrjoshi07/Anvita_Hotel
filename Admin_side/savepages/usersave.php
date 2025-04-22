<?php
       session_start();
       require("dbcon.php");
       if(isset($_POST["btnusersave"]))
       {
              
                 $id=trim($_POST["txtid"]);
                 $usertype=trim($_POST["txtuser"]);   
                 $sql="select *from tbluser where id='$id'";
                 $res=mysqli_query($link,$sql);
                 if(mysqli_num_rows($res)>0)
                 {
           
                    $sql="delete from tbluser where id='$id'";
                     if(mysqli_query($link,$sql)){
                       echo "<script>alert('Record updated....')</script>";
                       echo"<script>open('../master/user.php','_self')</script>";       
                     }
           
                 } 
            
                 $sql="insert into tbluser values('$id','$usertype')";
                 if(mysqli_query($link,$sql))
                 {
                    echo "<script>alert('Record inserted....')</script>";
                    echo"<script>open('../master/user.php','_self')</script>";       
                 }
                 mysqli_close($link);    
             
              }
              else if(isset($_GET["btndelete"]))
              {
                   $id=$_GET["id"];
                  $sql="delete from tbluser where id='$id'";
                  if(mysqli_query($link,$sql))
                  {
                      echo "<script>alert('Recrod is Deleted')</script>";
                      echo "<script>open('../master/user.php','_self')</script>";          
                  }
              }
      
?>