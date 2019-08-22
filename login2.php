<?php
session_start();
$conn = new mysqli("localhost", "root", "", "userregistration");
$msg = "";

if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $userType = $_POST['userType'];

  $sql = "SELECT * FROM usertable WHERE username =? AND password = ? AND user_type = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss",$username, $password,$userType);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  session_regenerate_id();
  $_SESSION['username'] = $row['username'];
  $_SESSION['role'] = $row['user_type'];
  session_write_close();

  if($result->num_rows==1 && $_SESSION['role']=='student')
  {

    header("location:student.php");
  }
  else if($result->num_rows==1 && $_SESSION['role']=='admin') {

      header("location:admin.php");

  }
  else {
    $msg = "Username or Password is incorrect! ";
  }


}

 ?>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body class="bg-dark">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5 bg-light mt-5 px-0">
      <h3 class="text-center text-light bg-danger p-3">Login</h3>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
  <div class="form-group">
    <input type = "text" name = "username" class="form-control form control-lg" placeholder="Username" required>
    </div>

    <div class="form-group">
      <input type = "password" name = "password" class="form-control form control-lg" placeholder="Password" required>
      </div>
      <div class="form-group lead">
        <label for="userType">I'm a :</label>
        <input type="radio" name="userType" value="student" class="custom-radio" required>&nbsp;Student |
        <input type="radio" name="userType" value="admin" class="custom-radio" required>&nbsp;Admin
     </div>
     <div class="form-group">
       <input type="submit" name="login" value="login" class="btn btn-danger btn-block">
       <input type="button" onclick="location.href='http://localhost/webproject/signup.php';" value="Register" class="btn btn-danger btn-block" />


     </div>



     <h5 class="text-danger text-center"><?= $msg; ?></h5>
</form>

    </div>
      </div>
    </div>
</body>


</head>
