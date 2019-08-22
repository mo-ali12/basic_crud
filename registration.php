<?php
include("connection.php");
session_start();
header('location:login2.php');
$name = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s="SELECT * FROM usertable WHERE username = '$name'";

$result = mysqli_query($conn,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{

echo "Please try different Username, it's already taken. :(";
}
else {
  $reg = "INSERT INTO usertable (username, password,email) values('$name','$pass','$email')";
  mysqli_query($conn,$reg);
  echo "Registration Successful :) ";
}



 ?>
