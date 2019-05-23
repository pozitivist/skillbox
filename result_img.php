<?php

header("Content-Type: image/jpg");

$im=imagecreate(800,800);
$bg_color=imagecolorallocate($im,0,0,0);
$txt_color=imagecolorallocate($im,255,255,255);
function result(){
echo "Text11";
/*
<table>

foreach ($_POST as $key => $value) {
	switch($key){
		case "name":$key="Имя";break;
		case "sname":$key="Фамилия";break;
		case "date":$key="Дата рождения";break;
		case "address":$key="Адрес";break;
		case "tel":$key="Тел.";break;
		case "mail":$key="Email";break;
	}

	if ($value=="") {$value='<span style="color:#f00;">Нет данных.</span>';}
	echo "<tr><td>".$key.":</td><td>".$value."</td></tr>";

</table>
*/
}

$conten=result();

imagestring($im,5,50,50,$conten,$txt_color);


imagejpeg($im,NULL,100);
imagedestroy($im);
?>