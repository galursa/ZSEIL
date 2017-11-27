<?php
	if(isset($_POST['submit']))
		setcookie("login",$_POST['uzytkownik'], time()+3600)
?>
<!DOCTYPE html>
<html>
<head>
<title>Obsługa logowania z ciasteczkami</title>
<meta charset='UTF-8'>
</head>
<body>
	<form action="" method="post">
			Podaj login: <input type"text" name="uzytkownik" />
	<input type="submit" name="zaloguj"/>
	</form>
    
  </body>
</html>