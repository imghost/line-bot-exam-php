<?php
require "vendor/autoload.php";

$msg = $_GET['message'];

$access_token = '8nis6lEXuKvtP7FnZJKre8iC9vb4buXXzIBLFoT6cs1dwfbdB50LQxJt8O/eOmZVKBAn07+ZeRdXEtl2v7qoq7qVQjuIHi/xSIbpW966/M1aWghIN6GKGqfev4lLwzWvhQJHOiOQVXorYm/IvosIWAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '2c688536ae6b1558d0819c07c0e18c9c';

$pushID = 'U53d3d3fe5d01396e48a0a814842e4812';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($msg);
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
