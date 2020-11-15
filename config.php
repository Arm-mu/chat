<?php
session_start();
 
require_once __DIR__ . '/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1513458998840910',
  'app_secret' => '20c5684ffb4358ad7436279464a691fd', 
  'default_graph_version' => 'v2.4',
  ]);

?>