<?php 
include "dbcon.php";
//$zan_id = $_POST['zan_id'];
//$email = $_POST['email'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$sql = $conn->prepare("SELECT * FROM `applicants` ORDER BY `app_id` DESC LIMIT 1")or die(mysql_error());
$sql->execute();
while ($row = $sql->fetch()) {
	$zan_id = $row['zan_id'];
}
$zan_id = $zan_id + 1;
//echo $zan_id ;

if ($password1!=$password2){
	echo "<script>alert('Passwords do not match')</script>";
	echo "<script>window.open('register.php','_self')</script>";
}else{
$checkapplicant = $conn->prepare("select * from applicants where zan_id = '$zan_id' ")or die(mysql_error());
$checkapplicant->execute();
$num_row = $checkapplicant->rowcount();
	if ($num_row>0){
		echo "<script>alert('Applicant already exists')</script>";
		echo "<script>window.open('register.php','_self')</script>";	
	}else{

	

	$conn ->query("INSERT into applicants(zan_id,mobile_no,password,username)VALUES('$zan_id','$mobile','$password1','$username')")or die(mysql_error());
	
		echo "<script>alert('Applicant registered Succesfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	
}
?>