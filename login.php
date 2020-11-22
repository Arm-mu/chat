<?php

require 'config.php';

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://github.com/FoxLyz/chat/blob/master/fb-profile.php', $permissions);
header("location:" . $loginUrl);
?>
