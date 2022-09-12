<?php
include "connection.php";
session_start();
include "function.php";
sarita();
?>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Quick Quiz</title>
  <link rel="stylesheet" href="bootstrap5.css" type="text/css"/>
  <style>
  body{
      background-image:url("images (3).jfif");
      background-repeat: no-repeat;
      background-size: 100% 100%;
  }
  </style>
</head>
<body>

      <div class="row-1"style="border:white 4px solid;background:white;margin-top:0px;height:8%;margin-right:0;margin-left:-5px;margin-bottom:-30px;">
         <center><img  style="border-radius:30px;background:white;margin-top:2px;" src="Untitled.jpg" width=""height="60" required></center>
        </div>
        <div class="Box">
         <ul>
       <h1 style="border:#180374 8px solid; margin-bottom:0;padding-left:20px;margin-left:-60px;margin-right:0px;margin-top:10px; height:7%; background:#180374; color:rgb(35, 146, 165); text-align:center;">
         
         <a href="home.php"  style="color:white; padding:120px; font-size:20px; color:silver;"><b>HOME</b></a>      
         <a href="profile.php"  style="color:silver; padding:120px; font-size:18px; color:silver;"><b>Profile</b></a>
         <b style="color:black; padding:120px; font-size:18px; color:silver;">Welcome::&nbsp;&nbsp;<font color="red"><?php echo $_SESSION['cc']; ?></font></b></a>
         
         <a href="logout.php" style="color:black; padding:120px; font-size:18px; color:silver;"><b>Logout</b></a>


      </h1>
  </div>
  
  <div class="container"> 
    <div id="home" class="flex-center flex-column">
       <p style="font-size:20px;color:rgb(115, 170, 233);font-size:30px;font-style: italic;border:2px solid white;background:lightgrey;"><b>HTML:</b><br>
      <a class="btn" href="Mcq.php">Play</a>
        
     </div>
     </div>
 </body>
</html>