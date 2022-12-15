<?php
$fn=$_POST['signame'];
$mail=$_POST['sigmail'];
$pass=$_POST['sigpass'];


$con=mysqli_connect("localhost","root","","scholargyani");
$q="INSERT INTO `users`(`FullName`,`Email`,`Password`) VALUES('$fn','$mail','$pass')";
mysqli_query($con,$q);
header('Location:loginpage.php');

?>