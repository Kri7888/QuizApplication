<?php
include "connection.php";
session_start();
include "function.php";
sarita();
?>
<html lang="en">
<head>
   <title>Quiz Home</title>
   <link rel="stylesheet" href="bootstrap3.css" type="text/css">
   <style>
   body{
      background-image:url("images.jfif");
      background-repeat: no-repeat;
      background-size:100% 100% ;
   }
   marquee{
      background-image: url("images (1).jfif");
      background-repeat: no-repeat;
      background-size: 100% 100%;
   }
   </style>
</head>
<body>
     <header>
      <div class="row-1"style="border:white 4px solid;background:white;margin-top:0px;height:8%;margin-right:0;margin-left:-5px;margin-bottom:-30px;">
         <center><img  style="border-radius:30px;background:white;margin-top:2px;" src="Untitled.jpg" width=""height="60" required></center>
        </div>
        <div class="Box">
         <ul>
       <h1 style="border:#180374 8px solid; margin-bottom:0;padding-left:20px;margin-left:0px;margin-right:0px;margin-top:0px; height:7%; background:#180374; color:rgb(35, 146, 165); text-align:center;">
         
         <a href="home.php"  style="color:white; padding:120px; font-size:20px; color:silver;"><b>HOME</b></a>      
         <a href="profile.php"  style="color:silver; padding:120px; font-size:18px; color:silver;"><b>Profile</b></a>
       <b  style="color:black; padding:120px; font-size:18px; color:silver;">Welcome::&nbsp;&nbsp;<font color="red"><?php echo $_SESSION['cc']; ?></font></b></a>
         
         <a href="logout.php" style="color:black; padding:120px; font-size:18px; color:silver;"><b>Logout</b></a>


      </h1></div>
     </div>
      <div class="hero">
         <div class="banner">
           
             <nav>
                <ul>
                  <li><a  style="color:black">Quiz types</a>
                     <select style="color:black;background:lightgrey">
                       
                        <option></option>
                        <option value="1">DSA</option>
                        <option value="2">Programming</option>
                        <option value="3">Aptitude</option>
                        <option value="4">Database Management System</option>
                        <option value="5">Operating System</option>
                        <option value="6">Grammer</option>
                       
                      </select></li>
                      
                  
            </div>
            <div class="Conti">
               <h1>Welcome on QuizWebsite.Thank you for REGISTER.</h1>
               <h1>This page containing Quiz objective questions for multiple Subjects.</h1>
               <marquee direction="right" behavior="alternate" onmouseover="stop()" onmouseout="start()"><p style="margin-top:5%; border:2px solid white;"><b class="con"style=" box-shadow:3px 3px 3px white;border:2px solid red;background:red;font-size:40px;height:10px;padding:40px 40px 40px 40px;">DSA</b> <b class="con"style="border:2px solid black;background:black;font-size:40px;padding:40px 40px 40px 40px;">Programming</b>  <b class="con"style="border:2px solid blue;background:blue;font-size:40px;padding:40px 40px 40px 40px;">Aptitude</b>  <b class="con"style="border:2px solid rgb(196, 57, 177);background:rgb(212, 87, 206);font-size:40px;padding:40px 40px 40px 40px;">Database Management System</b> <b class="con"style="border:2px solid rgb(43, 121, 185);background:rgb(65, 116, 211);font-size:40px;padding:40px 40px 40px 40px;">Operating System</b> <b class="con"style="border:2px solid silver;background:silver;font-size:40px;padding:40px 40px 40px 40px;">Grammer</b></p>
                 </marquee>
                  <h2 style="color:white; text-shadow:grey 6px 6px 6px;font-style:italic;">Below the given tab! You can start your prefer Subject Quiz.</h2>
              <button class="btn"><a href="start_home.php">Get start to choose course</a></button>
            </div>
            
          </div>
          
          <div>
            
            </div>
      </header>
      
</body>
</html>