<?php
// fonts.php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/font-truetype');
echo @file_get_contents('FSEX300.ttf');
?>