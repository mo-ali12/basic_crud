<?php
require_once "config.php";

if(isset($_SESSION['access_token']))
$gclient->setAccessToken($_SESSION['access_token']);
else if(isset($_GET['code']))
{

$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
$_SESSION['acess_token'] = $token;
}
else {
  header('location:signup.php');
  exit();

}
$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();
$_SESSION['email'] = $userData['email'];
$_SESSION['gender'] = $userData['gender'];
$_SESSION['picture'] = $userData['picture'];
$_SESSION['familyname'] = $userData['familyname'];
$_SESSION['givenName'] = $userData['givenName'];

header('location:student.php');
exit();

 ?>
