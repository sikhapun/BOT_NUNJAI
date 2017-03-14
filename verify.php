<?php
$access_token = 'WW/3kU+cZiZWrcn8nkH0tdoR7b5CXpWhYvEsaM9M+FAcfJMoij5ExOQCUjuqbDK4zYG1YJo90n/YPvfkzxdvJocdL0IqjkqCvlO2pFMnXCg3X6NrfcUqjmXnfGa14gf8QoBtsTqskBTCgWr2l+1kSQdB04t89/1O/w1cDnyilFU=';

$url = 'https://github.com/sikhapun/BOT_NUNJAI/blob/master/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
