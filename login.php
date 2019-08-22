<?php
session_start();


 ?>


<html>
<head>
<title> Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="validation.php" method="post">


    <div id="login-box">
      <div class="left-box">
        <h1> Sign In</h1>

          <input type="text" name="username" placeholder="Username" required/>
          <input type="password" name="password" placeholder="Password" required/>
          <input type="submit" name="login-button" value="Login In" required/>
          <input type="button" onclick="location.href='http://localhost/webproject/signup.php';" value="Register" />

    </div>
</form>


</body

</html>
