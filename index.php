<?php

require 'config.php';

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://github.com/FoxLyz/chat/blob/master/fb-profile.php', $permissions);
//echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
header("location:" . $loginUrl);
//echo $loginUrl;
?>
