<?php
$username = 'nerdymuslim';
$url = "https://api.github.com/users/nerdymuslim";
$process = curl_init($url);
curl_setopt($process, CURLOPT_USERAGENT, $username);
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
$return = curl_exec($process);
$result = json_decode($return);
var_dump($result);
// echo '<img src="' . $result->avatar_url . '"/>' . '<br/>';
// echo '<h1>The name of the account is ' . $result->login . '</h1>';
curl_close($process);
