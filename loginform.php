<?php


$username=$_POST['username'];//username
$password=$_POST['password'];//password
session_start();



$con=mysqli_connect("localhost", "root","","loginform");//mysqli("localhost","username","password","database name")
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `username`='$username' && `password`='$password' ");
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `username`='$username' && `password`='$password'");
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `username`='$username' && `password`='$password'");
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `username`='$username' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	
	header("location:game.php");

}
else
{
	echo " The password you’ve entered is incorrect";
	header("url=login.php"); 
}

?>
