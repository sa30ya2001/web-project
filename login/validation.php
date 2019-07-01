<?php
//session_start();   

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logindb');
$username=mysqli_real_escape_string($con, $_POST['username']);
$password= mysqli_real_escape_string($con,$_POST['password']);

$q= "select * from user where username= '$username' && password= '$password' ";
$result= mysqli_query($con,$q);
//$num = mysqli_num_rows($result);
if(mysqli_num_rows($result)==1)
{
	session_start();
	$_SESSION['user']=$username;
	header('location:http://localhost/login/home.php');

}
/*if($num==1)
{
	echo "satish";
	$_SESSION['username']= $username;
	//header('location:http://localhost/login/home.php');
}*/

else
{
	echo "entered wrong password";
	//header('location:http://localhost/login/transparent_form.html');

}
?>