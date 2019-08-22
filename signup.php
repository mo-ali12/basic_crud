<?php
require_once "config.php";
require_once "FBconfig.php";
$loginURL = $gClient->createAuthUrl();
$redirectURL = "http://localhost/webproject/fb-callback.php";
$permissions = ['email'];
$loginURL2 = $helper->getLoginUrl($redirectURL, $permissions);


 ?>


<html>
<head>
<title> Login </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <form action="registration.php" method="post">


    <div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>

          <input type="text" name="username" placeholder="Username" required/>
          <input type="text" name="email" placeholder="Email"required/>
          <input type="password" name="password" placeholder="Password" required/>
          <input type="submit" name="signup-button" value="Sign Up"/>
          <input type="button" onclick="location.href='http://localhost/webproject/login2.php';" value="Login" class="btn btn-danger btn-bloc" />




        </div>
        <div class="right-box">
          <span class="signinwith">Sign in with<br/>Social Network     </span>

        <button type="button" onclick="window.location='<?php echo $loginURL2?>';" class="social facebook">Log in with Facebook</button>
        <button class="social twitter">Log in with Twitter</button>
        <button type="button" onclick="window.location='<?php echo $loginURL?>';" class="social google">Log in with Google+</button>


        </div>
        <div class="or">OR</div>
    </div>
</form>
</body>
</html>
