<?php
include("connection.php");
if (isset($_POST['save'])) {
  $roll = $_POST['roll'];
  $course = $_POST['course'];

  $s="SELECT * FROM data WHERE roll = '$roll'";

  $result = mysqli_query($conn,$s);

  $num = mysqli_num_rows($result);

  if($num == 1)
  {

  echo "This course is already registered against your Roll No! ";
  }
  else {
    $reg = "INSERT INTO data (roll, course) values('$roll','$course')";
    mysqli_query($conn,$reg);
    echo "Registration Successful :) ";
  }
}
?>
