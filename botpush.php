<?php



require "vendor/autoload.php";

$access_token = '8nis6lEXuKvtP7FnZJKre8iC9vb4buXXzIBLFoT6cs1dwfbdB50LQxJt8O/eOmZVKBAn07+ZeRdXEtl2v7qoq7qVQjuIHi/xSIbpW966/M1aWghIN6GKGqfev4lLwzWvhQJHOiOQVXorYm/IvosIWAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '2c688536ae6b1558d0819c07c0e18c9c';

$pushID = 'U508e815ae172824229953483c75e10b5';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







