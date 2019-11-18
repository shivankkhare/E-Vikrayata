<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'user');

$first_name = $_POST['first_name'];
$last_name= $_POST['last_name'];

$s = "select * from user_data where name='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
   {
   	echo "username taken ";

   }
   else
     {
     	$reg = " insert into user_data(name,email) values ('$name','$email')";
     	mysqli_query($con, $reg);
     	header('location:login.php');
     	//echo "registration successfully";
     }


?>