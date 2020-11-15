<?php

require 'config.php';

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/Facebookuserprofile/fb-profile.php', $permissions);
//echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
header("location:" . $loginUrl);
//echo $loginUrl;
?>
