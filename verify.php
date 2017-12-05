<?php
$access_token = '11YiJGeK5sb53ok5XSkcnpTVnGqAmo4JWj6stLwcqw58T6rUnoRumWuTA8nWYf9qppTEn9HOaUT8zCzxYYK2nneZe9hlh0lfpzJp1ALneSEeBJGlFp20tBvAH5dO9rIucDodhRQMiqVGeFpWwl3ZvwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>