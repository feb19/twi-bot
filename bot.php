<?php

require_once('twitteroauth/twitteroauth.php');
require_once('conf.php');

$conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

// API test
// $result = $conn->get('account/verify_credentials');
// echo "<pre>";
// print_r($result);
// echo "</pre>";


// status update
$date = date("Y-m-d H:i:s");
$param = array(
	"status" => "{$date} Twitter Bot を cron で走らせるテスト中なり..."
);
$result = $conn->post('statuses/update', $param);

echo "<pre>";
print_r($result);
echo "</pre>";
