<?php
$access_token = 'nUQzz2YmauYVUVAJrcJC1J4HKrwiDRBEkQDoKlnzSSUpriRKW4E97k9SbNEDkiCZmY7TXt4eDAN3OoQEy3gccV6Yt2aBW0ufCAIMALJULA1ibkGkNslc76Eqk0lNOLP15Jdoav7efMMNbExhuviZ8AdB04t89/1O/w1cDnyilFU=';

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
