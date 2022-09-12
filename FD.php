<?php
  include "conn.php";
  $fn=$_REQUEST["fullname"];
  $cn=$_REQUEST["contactno"];
  $em=$_REQUEST["email"];
  $sb=$_REQUEST["subject"];
  $bio=$_REQUEST["bio"];
  $sql="INSERT INTO `info`(`id`,`fullname`, `contactno`, `email`, `subject`, `bio`) VALUES ('$fn','$cn','$em','$sb','$bio')";
  mysqli_query($con,$sql);
  header("location:Feedback.php");
  ?>