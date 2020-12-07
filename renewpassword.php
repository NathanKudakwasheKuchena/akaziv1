<?php
include "dbcon.php";

$previous_password = $_POST['previous_password'];
$new_password = $_POST['new_password'];

$checkapplicant = $conn->prepare("select * from applicants where previous_password = '$previous_password' AND new_password = $ new_password ")or die(mysql_error());
$checkapplicant->execute();
$num_row = $checkapplicant->rowcount();
$row = $checkapplicant ->fetch();
if($num_row > 0)
{

	session_start();
	$_SESSION['id']=$row['app_id'];
	echo "<script>alert('Change password Succesfully')</script>";
	echo "<script>window.open('home.php','_self')</script>";
}else{
	echo "<script>alert('password do not exists')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}

?>







