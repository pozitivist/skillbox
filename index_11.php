<!DOCTYPE html>
<html>
<head>
  <title>Lesson 11</title>
  <?php
  	function MyFunc(&$txt){
  		$txt=$txt.$txt.$txt;
  		echo "txt=".$txt."<br>"; 
		return $txt;
  	}
  ?>
</head>
<body>

<form action="" method=get>
	Username: <input type=text name="name"><br>
	Password: <input type=password name="pass"><br>
	<select name="sel1">
		<option value="1">Opt 1</option>
		<option value="2">Opt 2</option>
		<option value="3">Opt 3</option>
	</select><br>
	<input type=submit><br>
</form>

<?php

 $a="Some";

//skovtun / Qwerty123

if (($_GET['name']=="skovtun")&&($_GET['pass']=="Qwerty123")){
	echo "Hello Sergei Kovtun!<br>";
}
else{
	echo "I don't know you.<br>";
	echo "\n\n</body>\n</html>";
	exit(0);
}

 echo MyFunc($a)."<br>";
 echo "a=".$a."<br><br><br>";

foreach ($_SERVER as $kk => $vv) {
	echo "SERVER[".$kk."]=".$vv."<br>";
}

echo "<hr>";
echo "GET:<br>";
foreach ($_GET as $kk => $vv) {
	echo "GET[".$kk."]=".$vv."<br>";
}

?>

</body>
</html>