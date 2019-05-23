<?php
/*
header("Content-Type: image/jpg");

$im=imagecreate(200,100);
$bg_color=imagecolorallocate($im,0,0,0);
$txt_color=imagecolorallocate($im,255,255,255);
imagestring($im,5,50,50,"Text...",$txt_color);

imagejpeg($im,NULL,9);
imagedestroy($im);
*/

header("Content-Type: image/png");

$im=imagecreatefromjpeg("1.jpg");
$txt_color=imagecolorallocate($im,255,0,0);
$font="./arial.ttf";
imagettftext($im, 24, 0, 50, 50, $txt_color, $font, "Text...");

imagepng($im);
imagedestroy($im);

?>