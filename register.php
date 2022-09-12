<?php
include "connection.php";
$fn=$_REQUEST['firstname'];
$ln=$_REQUEST['lastname'];
$em=$_REQUEST['email'];
$ps=$_REQUEST['password'];
$cps=$_REQUEST['confirmpassword'];
$gen=$_REQUEST['gender'];
$sorc=$_REQUEST['source'];
$im=$_FILES['f1']['name'];
$age=$_REQUEST['age'];
$bi=$_REQUEST['boi'];
move_uploaded_file($_FILES['f1']['tmp_name'],"kanika/".$im);
$sql="INSERT INTO information (fname,lname,email,pass,gen,source,age,img,boi) values ('$fn','$ln','$em','$ps','$gen','$sorc','$age','$im','$bi')";
mysqli_query($con,$sql);
header("location:Login.php");
?>