<?php
       session_start();
       require("dbcon.php");
       if(isset($_POST["btntarrifsave"]))
       {
              $extrap='0';
              $double='0';
              $single='0';

              $id=trim($_POST["txtid"]);
              $room=trim($_POST["txtroom"]);
              $single=trim($_POST["txtsingle"]);
              $double=trim($_POST["txtdouble"]);
              $extrap=trim($_POST["txtextrap"]);

              $sql="select *from tblroomtarrif where id='$id'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
        
                 $sql="delete from tblroomtarrif where id='$id'";
                  if(mysqli_query($link,$sql))
                  {
                    echo "<script>alert('Record updated....')</script>";
                    echo"<script>open('../master/tarrifadd.php','_self')</script>";       
                  }
        
              } 
         
              $sql="insert into tblroomtarrif values('$id','$room','$single','$double','$extrap')";
              if(mysqli_query($link,$sql))
              {
                 echo "<script>alert('Record inserted....')</script>";
                 echo"<script>open('../master/tarrifadd.php','_self')</script>";       
              }
              mysqli_close($link);    
          
           }
           else if(isset($_GET["btndelete"]))
           {
               $id=$_GET["id"];
               $sql="delete from tblroomtarrif where id='$id'";
               if(mysqli_query($link,$sql))
               {
                   echo "<script>alert('Recrod is Deleted')</script>";
                   echo "<script>open('../master/tarrifadd.php','_self')</script>";          
               }
           }
       
?>

