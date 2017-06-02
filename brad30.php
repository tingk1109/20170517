<?php
$img = imagecreatefromjpeg("./upload/poke.jpg");

$blue = imagecolorallocate($img,'0','0','255');
imagefttext($img, 14, 0 , 0 , 140 , $blue , "./fonts/fireflysung.ttf" , "丘哥在走, 幹聲要有");

//  3

header('Content-Type: image/jpeg');
imagejpeg($img);

//  4

imagedestroy($img);