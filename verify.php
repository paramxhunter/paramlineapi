<?php
$access_token = 'rHB/F5hC2BkzpZB+vhH99A7xulLq9CgmoX92yJEiLBvfA0llHlD4XqUTVU4JOB2Xo3tNnFuKr93Bbzdd91Y1G34tSedTTn2rVLK+VdR4HX53qoaJlbqPtlXbWdaSH1NHTyeJZqkMYTlKN2xDef0eKQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
