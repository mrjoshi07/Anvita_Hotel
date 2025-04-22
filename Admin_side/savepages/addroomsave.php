<?php
       session_start();
       require("dbcon.php");
       if(isset($_POST["btnroomsave"]))
       {
              $id=trim($_POST["txtid"]);
              $rooms=trim($_POST["txtroom"]);

              $sql="select *from tblrooms where id='$id'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
        
                 $sql="delete from tblrooms where id='$id'";
                  if(mysqli_query($link,$sql))
                  {
                    echo "<script>alert('Record updated....')</script>";
                    echo"<script>open('../master/addrooms.php','_self')</script>";       
                  }
        
              } 
         
              $sql="insert into tblrooms values('$id','$rooms')";
              if(mysqli_query($link,$sql))
              {
                 echo "<script>alert('Record inserted....')</script>";
                 echo"<script>open('../master/addrooms.php','_self')</script>";       
              }
              mysqli_close($link);    
          
           }
           else if(isset($_GET["btndelete"]))
           {
                $id=$_GET["id"];
               $sql="delete from tblrooms where id='$id'";
               if(mysqli_query($link,$sql))
               {
                   echo "<script>alert('Recrod is Deleted')</script>";
                   echo "<script>open('../master/addrooms.php','_self')</script>";          
               }
           }
       
?>

