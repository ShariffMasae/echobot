<?php
$access_token = 'HJTftNi8d7mAxaDc5xN6dlGOJAqNagAg56eqaRlftfD/qKONTLeB5yPq7Ec7nmCCTPm6jCpUDlVbdJaBISaQh3EdiSCwKm4fExqp0XfWYLgcS2mZoQoK2dYyBtYtIJvnraet2CaGSHhZBLSPWoJe3QdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);echo $result;
?>
