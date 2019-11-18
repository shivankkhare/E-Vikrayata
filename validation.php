<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'user');

$name = $_POST['username'];
$email= $_POST['pass'];

$s = "select * from user_data where name = '$name' && email ='$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
   {
    $_SESSION['username'] = $name;
   	header('location:go.php');

   }
   else
     {
     	
     	header('location:login.php');

     }


?>