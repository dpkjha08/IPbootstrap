<?php
$email=$_POST['username'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","internet_program");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `signupdata` WHERE `email`='$email' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['log']=1;
	$row=mysqli_fetch_row($result);
	$_SESSION["first_name"] =$row[0];
	$_SESSION['last_name']=$row[1];
	$_SESSION['email']=$row[2];
	$_SESSION['password']=$row[3];
	$_SESSION['python_attempt']=$row[4];
	$_SESSION['python_percent']=$row[5];
	$_SESSION['java_attempt']=$row[6];
	$_SESSION['java_percent']=$row[7];
	$_SESSION['html_attempt']=$row[8];
	$_SESSION['html_percent']=$row[9];
	$_SESSION['ruby_attempt']=$row[10];
	$_SESSION['ruby_percent']=$row[11];
	echo "<script>location.href='qwerty.html'</script>";

	

}
else
{
	echo "<script>alert('please fill proper details')</script>";
	echo "<script>location.href='login.html'</script>";
	
}


?>