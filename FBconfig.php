<?php
require_once "Facebook/autoload.php";
$FB = new \Facebook\Facebook([
'app_id'=> '2377873179136180',
'app_secret' => '2952ca7fd2712c25243a7f2ea614dedf',
'default_graph_version' => 'v2.10'

]);

$helper = $FB->getRedirectLoginHelper();



 ?>
