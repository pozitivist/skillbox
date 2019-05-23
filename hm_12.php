<!DOCTYPE html>
<html>
<head>
  <title>Home Work #12</title>
</head>
<body>
<h1>Регистрация нового пользователя</h1>
<form action="hm_12_result.php" method=post>
	<table>
		<tr>
			<td>Имя:</td>
			<td><input type=text name="name"></td>
		</tr>
		<tr>
			<td>Фамилия:</td>
			<td><input type=text name="sname"></td>
		</tr>
		<tr>
			<td>Дата рождения:</td>
			<td><input type=date name="date"></td>
		</tr>
		<tr>
			<td>Адрес:</td>
			<td><input type=text name="address"></td>
		</tr>
		<tr>
			<td>Телефон:</td>
			<td><input type=tel name="tel"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type=email name="mail"></td>
		</tr>
	</table>
	<input type=submit value="Отправить"><br>
</form>

</body>
</html>