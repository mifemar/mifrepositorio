<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST');
header('Access-Control-Allow-Headers: X-Requested-With');
$json = file_get_contents('https://eimtcms.eimt.uoc.edu/~mfernandezmarti/db.json?posts');
echo $json;
?>
