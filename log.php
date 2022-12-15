<?php
$mail=$_POST['logemail'];
$pass=$_POST['logpass'];

$con=mysqli_connect("localhost","root","","scholargyani");
$q="select * from `users` where Email='$mail' && Password='$pass'";
$re=mysqli_query($con,$q);
$n=mysqli_num_rows($re);
$ult=mysqli_fetch_array($re);
if($n==1)
{
	session_start();
	$_SESSION["name"]=$ult['FullName'];
header('location:home.php');
}

else{
	header('Location:loginpage.php?error=*Incorect Email or Password');  
}
?>