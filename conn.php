<?php
$con=mysqli_connect("localhost","root","","Back");
$nm=$_REQUEST['fullname'];
$cn=$_REQUEST['contactno'];
$em=$_REQUEST['email'];
$sb=$_REQUEST['subject'];
$boi=$_REQUEST['bio'];
$sql="insert into info (name,contact,mail,subjectt,feedback) values ('$nm','$cn','$em','$sb','$boi')";
mysqli_query($con,$sql);
header("location:Feedback.php");

?>