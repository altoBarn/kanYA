<?php
$access_token = 'Uq0GyrlGC+ZpIGXv9qTM1hazPQGX/UY112JbODoDWg2zx2qsGc4hL1Adcd3Rc4Aj/gycHAyrUv4FHfaAQGFwxEttga3sPxdkFVzxmsBtrpp0spUsIGtpdCJfqVsR5fvSiq9gc2lBL+TwdLJXl4FSngdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
