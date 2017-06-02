<?php
if(!isset($_GET['rate'])) exit(0);

$rate = $_GET['rate'];

//  1
$img = imagecreate( 400 , 80);

//  2

$yellow = imagecolorallocate($img, 255, 255, 0);

$red = imagecolorallocate($img, 255, 0, 0);

imagefilledrectangle($img, 0, 0, 400, 80, $yellow);

imagefilledrectangle($img, 0, 0, (int)($rate*400/100), 80, $red);

//  3

header('Content-Type: image/jpeg');
imagejpeg($img);


//  4

imagedestroy($img);