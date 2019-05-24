<?php

//echo '<h1>Данные пользователя:</h1>';

//header("Content-Type: image/png");

/* для отладки получил ли ты и нужные ли данные получил через POST - лучше не отправлять первоначально заголовок картинки в строке 5, 
иначе браузер будет пытаться картинку отправить, а тебе нужен просто текст увидеть для отладки.
*/

$name = $_POST['name']; // name - это имя твоего инпута/селекта в форме
$sname = $_POST['sname'];

echo "name: ".$name."<br />";
echo "sname: ".$sname."<br />";


/* Тут не понятно что за name? это не переменная и не константа, у тебя ошибка вылетит */

/*
$name=name;
$sname=sname;
$date=date;
$address=address;
$tel=tel;
$mail=mail;

$im=imagecreate(200,200);
$bg_color=imagecolorallocate($im, 0, 0, 0);
$txt_color=imagecolorallocate($im, 255, 255, 255);
imagestring($im, 5, 50, 50, $name, $txt_color);
imagestring($im, 5, 50, 70, $sname, $txt_color);
imagestring($im, 5, 50, 90, $date, $txt_color);
imagestring($im, 5, 50, 110, $address, $txt_color);
imagestring($im, 5, 50, 130, $tel, $txt_color);
imagestring($im, 5, 50, 150, $mail, $txt_color);

imagepng($im);
imagedestroy($im);
*/
?>
