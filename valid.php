<?php
$code="";
include 'name.php';
include 'email.php';
include 'num.php';
$msg="";
if($code=="1")
{
	
	$conn=mysqli_connect("localhost","root","") or die("not connected");
mysqli_select_db($conn,"prakhar");
$number=$_POST['emp_number'];
$name=$_POST['emp_name'];
$email=$_POST['emp_email'];
	mysqli_query($conn,"insert into form(name,email,number) values('$name','$email','$number')")or die(mysqli_error($conn));
	$msg="data has been inserted successfully";
}
else{
	
	$msg="data has not been inserted successfully";
}
?>
