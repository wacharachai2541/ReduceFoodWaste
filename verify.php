<?php
$access_token = '5Pp80shmV5zajHig0oC3X5U0M5y5oeiAfg60kxytzBNia1Tfgk2vQksYgEIFzTbb/0Ed8YuZvR1zQaTjJxw7IQaZq8BxOmQWCK9oEalwxQlA8vqWhQDW74F5cHN7lrbyPE53N0PyrUd5TtWc//GxJwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v16/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;