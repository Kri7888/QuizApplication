<html>
<head>
   <title>profile</title>
   <link rel="stylesheet" href="bootstrap4.css" type="text/css">
   <style>
     body{
        background-image:url("Image1.jpeg");
        background-repeat: no-repeat;
        background-size:100% 100%;
          }
      </style>
</head>
<body>
  <?php
include "connection.php";
session_start();
error_reporting(0);
$sql="select * from information where email='".$_SESSION['aa']."'";
$res=mysqli_query($con,$sql);
$arr=mysqli_fetch_array($res);

?>
  <div class="container">
   <h1 class="text-primary" style="text-align:center;border-radius:10px 10px;">Edit Profile</h1>
   <div class="row">
    <div class ="col-md-3">
    <div class="text-center">
   <img src="kanika/<?php echo $arr['img']; ?>" class="profile img-circle img-thumbnail" alt="profile">
     </div>
   </div>
  <div class="col-md-9 personal-info">
   <div class="alert alert-info alert-dismissable">
    <a class="panel-close close" data-dismiss="alert"></a>
     <i class ="fa fa-coffee"></i>
     This is an<span style="color:red">.alert</span>
      important message to the user.
     </div>
      <h3 style="color:navy;font-style:italic;"><u>Personal information</u></h3>
      <form class="form-horizoontal" role="form">
       <div class="form-group">
       <label class="col-lg-3 control-label" style="margin-left:100px;">First name:</label>
       <div class="col-lg-8">
       <?php echo $arr['fname']; ?> 
        </div>
       <div class="form-group">
      <label class="col-lg-3 control-label" style="margin-left:-200px;">Last name:</label>
    <div class="col-lg-8">
    <?php echo $arr['lname']; ?>       
</div>
     </div>
    <div class="form-group">
    <label class="col-lg-3 control-label">Email:</label>
    <div class="col-lg-8">
    <?php echo $arr['email']; ?> </div>
    </div>
    <div class="form-group">
    <label class="col-lg-3 control-label">Gender:</label>
    <div class="col-lg-8">
    <?php echo $arr['gen']; ?>   </div>
   </div>
   <div class="form-group">
  <label class="col-lg-3 control-label">Biography:</label>
  <div class="col-lg-8">
  <?php echo $arr['boi']; ?> </div>
   </div>
   
  </form>
 
 <hr>
 
 </div>
 </body>
</html>