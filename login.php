<?php
include "dbcon.php";

$email = $_POST['email'];
$password = $_POST['password'];

$checkapplicant = $conn->prepare("select * from applicants where mobile_no = '$email' AND password = '$password' ")or die(mysql_error());
$checkapplicant->execute();
$num_row = $checkapplicant->rowcount();
$row = $checkapplicant ->fetch();
if($num_row > 0)
{
	session_start();
	$_SESSION['id']=$row['app_id'];
	//echo "<script>alert('Applicant login Succesfully')</script>";
	$datetime = date('Y-m-d H:i:s');
	$user_zanid = $row['zan_id'];
	$role = $row['role'];
	$fname = $row['username'];
	$status = 'logged In';
	$query = "INSERT into 
				userlog(userId,roles,username,datetimes,statuss)
							VALUES('$user_zanid','$role','$fname','$datetime','$status')"or 
							die(mysql_error());$conn->exec($query);
	echo "<script>window.open('../indeex.php','_self')</script>";
}else{
	echo "<script>alert('Username and password do not exists')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}

?>






