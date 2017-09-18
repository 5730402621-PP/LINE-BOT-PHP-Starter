<?php
$access_token = '77/rUD66AxteA86L+M7a1f8KtwtcXXt98K9X9uPHNpVB6xftyxYXTOVJihjNFeOzQyOfPY6KO1BVUO974Jkjlm5FkO3JKRZkv9O/BLJLpFpCrdhkjGHLq6QFh0MaEBbM5ZZz3wb6eJtmQM8cCkz/EgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$header = array('Authorization: Bearer'.$access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURL_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>