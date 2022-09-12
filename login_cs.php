<?php
include "connection.php";
session_start();
$em=$_REQUEST['email'];
$ps=$_REQUEST['Password'];
$sql="select * from information where email='$em' and pass='$ps'";
$res=mysqli_query($con,$sql);
$arr=mysqli_fetch_array($res);
$nums=mysqli_num_rows($res);
if($nums>0)
{
$_SESSION['aa']=$arr['email'];
$_SESSION['bb']=$arr['pass'];
$_SESSION['cc']=$arr['fname'];
header("location:home.php");
}
else
{
    header("location:LOGIN.php");

}

?>