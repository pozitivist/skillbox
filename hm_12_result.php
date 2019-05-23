<!DOCTYPE html>
<html>
<head>
  <title>Home Work #12</title>
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

	if ($value=="") {$value='<span style="color:#f00;">Нет данных.</span>';}
	echo "<tr><td>".$key.":</td><td>".$value."</td></tr>";
}
?>
</table>

<?php
function result(){

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
	}
?>
<table><?php result();?></table>
<br>

<img src="result_img.php">

</body>
</html>