<?php



require "vendor/autoload.php";

$access_token = '5Pp80shmV5zajHig0oC3X5U0M5y5oeiAfg60kxytzBNia1Tfgk2vQksYgEIFzTbb/0Ed8YuZvR1zQaTjJxw7IQaZq8BxOmQWCK9oEalwxQlA8vqWhQDW74F5cHN7lrbyPE53N0PyrUd5TtWc//GxJwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0be7e54d488bd421130d2cdd701c7b0c';

$pushID = 'Uf0d8c5977366ef8bdb525eda7e2ccb5e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







