<?php
include("connection.php");
session_start();
$name = $_POST['username'];
$pass = $_POST['password'];

$s="SELECT * FROM usertable WHERE username = '$name' && password = '$pass'";

$result = mysqli_query($conn,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
  $_SESSION['username'] = $name;
header('location:index.php');
}
else
{
  ///echo "Invalid Username or Password, Try again.";
  header('location:login.php');
}

 ?>
