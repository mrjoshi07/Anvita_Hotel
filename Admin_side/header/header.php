


    <style>
       *{
              margin: 0px 0px;
              padding: 0px 0px;
       }
       .header1{
              padding: 15px 0px;
              color: white;
              background-color: rgba(69, 66, 66, 0.68);
             
       }
       .header1 h2{
              margin: 0px 0px 0px 50px;
              padding: 0px 0px;
       }
       .header3{
              padding: 5px 0px;
       }
       .header3 a{
              margin: 0px 10px;
              padding: 5px 10px;
              color: white;
              text-decoration: none;
              transition: 5;
       }
       .header3 a:hover{
              border-bottom: 1px solid wheat;
       }
    </style>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header1" >
       
       <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 header2">
              <h2>Hotel Anvita</h2>
       </div>

       
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 header3">
              <a href="../master/user.php">User</a>
             <a href="../master/createuser.php">Create</a>
             <a href="../master/addrooms.php">Add-Rooms</a>
             <a href="../master/tarrifadd.php">Tarrif</a>

             <a onclick="logout()">
                     <span class="glyphicon glyphicon-off" aria-hidden="true"></span>  
              </a>
       </div>
       
    
       <script>
                function logout(){
                     ans=confirm("Do you want logout...")
                     if(ans)
                     {
                            open("../savepages/logout.php","_self"); 
                     }
                     else
                     {
                            alert("You click cancel...");
                     }
              }
       </script>
</div>
