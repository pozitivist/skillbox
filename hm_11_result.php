<!DOCTYPE html>
<html>
<head>
  <title>Home Work #11</title>
</head>
<body>
<h1>Данные нового пользователя</h1>

<table>
<?php

foreach ($_POST as $key => $value) {
	switch($key){
		case "name":$key="Имя";break;
		case "sname":$key="Фамилия";break;
		case "date":$key="Дата рождения";break;
		case "address":$key="Адрес";break;
		case "tel":$key="Тел.";break;
		case "mail":$key="Email";break;
	}

	/*
	if ($key=="name"){$key="Имя";}
	else if ($key=="sname") {$key="Фамилия";}
	else if ($key=="date") {$key="Дата рождения";}
	else if ($key=="address") {$key="Адрес";}
	else if ($key=="tel") {$key="Тел.";}
	else if ($key=="mail") {$key="Email";}
	*/

	if ($value=="") {$value='<span style="color:#f00;">Нет данных.</span>';}
	echo "<tr><td>".$key.":</td><td>".$value."</td></tr>";
}

?>
</table>

</body>
</html>