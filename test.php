<?php
require_once __DIR__ . '/Facebook/autoload.php';
$facebook = new Facebook(array(
    'appId' => $fb_config['1513458998840910'],  // Your Facebook app id
    'secret' => $fb_config['20c5684ffb4358ad7436279464a691fd'], // Your Facebook app secret
    'cookie' => true
));

$fb_user_id = $facebook->getUser();
if ($fb_user_id) {
    try {
        $fb_user_profile = $facebook->api($fb_user_id);
        var_dump($fb_user_profile);
    } catch (FacebookApiException $e) {
        error_log($e);
    }
} else {
    $params = array(
        'scope' => 'email, read_stream, user_interests, user_likes, user_location, user_status',
        'redirect_uri' => 'http://myurl/facebook_connect', // Replace with your app url
    );
    $facebook_login_url = $facebook->getLoginUrl($params);
    echo '<script>top.location="' . $facebook_login_url . '";</script>';
    exit();
}
?>
