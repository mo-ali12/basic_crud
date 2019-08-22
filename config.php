<?php
session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("36813942802-7bgo83p68n1fmutbp5ad1un9reb3cjuo.apps.googleusercontent.com");
$gClient->setClientSecret("R9Yn7HRmBApzXmo9fB5eV1rX");
$gClient->setApplicationName("CPI Login");
$gClient->setRedirectUri("http://localhost/webproject/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

 ?>
