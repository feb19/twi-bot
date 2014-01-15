<?php

require_once('twitteroauth/twitteroauth.php');
require_once('conf.php');

$conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
$conn->host = "https://api.twitter.com/1.1/";
$conn->ssl_verifypeer = TRUE;

// API test
// $result = $conn->get('account/verify_credentials');
// echo "<pre>";
// print_r($result);
// echo "</pre>";


// status update
$date = date("Y/m/d H:i:s");
$w = date("w", $date);
$strings = array(
        1 => "空き缶・ペットボトル・空きびん・使用済み乾電池・粗大ごみ・小物金属",
        2 => "プラスチック製容器包装",
        3 => "普通ゴミ",
        5 => "ミックスペーパー",
        6 => "普通ゴミ"
);
$user = "";

echo "<pre>";
print_r($date);
echo "</pre>";

echo "<pre>";
print_r($strings[$w]);
echo "</pre>";

if (isset($strings[$w])) {
        $param = array(
                "status" => "{$user} {$date} {$strings[$w]}"
        );
        echo "<pre>";
        print_r($param);
        echo "</pre>";

        $result = $conn->post('statuses/update', $param);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
}




