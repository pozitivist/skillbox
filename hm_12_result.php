<?php

//echo '<h1>Данные пользователя:</h1>';

header("Content-Type: image/png");
$name = $_POST['name'];
$sname = $_POST['sname'];
$date = $_POST['date'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];

$im = imagecreate(200,200);
$bg_color = imagecolorallocate($im, 0, 0, 0);
$txt_color = imagecolorallocate($im, 255, 255, 255);
imagestring($im, 5, 50, 50, $name, $txt_color);
imagestring($im, 5, 50, 70, $sname, $txt_color);
imagestring($im, 5, 50, 90, $date, $txt_color);
imagestring($im, 5, 50, 110, $address, $txt_color);
imagestring($im, 5, 50, 130, $tel, $txt_color);
imagestring($im, 5, 50, 150, $mail, $txt_color);

imagepng($im);
imagedestroy($im);
?>