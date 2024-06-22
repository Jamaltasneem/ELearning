<?php 

session_start();


$con=mysqli_connect('localhost','root');

if ($con) 
  {
		echo "connection successful";
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'uniquedeveloper');
 $name=$_POST['name'];
 $pass=$_POST['password'];
 $email=$_POST['email'];

 $q="select * from login where username='$name' && password='$pass'";

 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {
 	"duplicate data";
 	header('location:signup.html');
 }
 else
 {
 	$qy="insert into login(username,password,email) values('$name','$pass','$email')";
 	mysqli_query($con,$qy);
 	echo "inserted";
	$message="Sign up success";
	echo "<script type='text/javascript'>alert('$message');</script>";
 	header('location:login.php');
 }
$q1="select * from login where email='$email' && password='$pass'";
$result1=mysqli_query($con,$q1);
 $num1=mysqli_num_rows($result1);
 if ($num1==1)
  {
 	"duplicate data";
	 echo '<script type ="text/JavaScript">';  
	 echo 'alert("Already Exist")';  
	 echo '</script>'; 
 	header('location:signup.html');
	 
 }


	 

 
 





 ?>
