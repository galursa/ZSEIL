<!DOCTYPE html>
<html> 
    <head> 
        <title>Nasza strona</title> 
		<meta charset='UTF-8'>
   </head> 
  <body> 
  
  Witamy na naszej stronie. <br>
  Zażółć gęślą jaźń.<br>
  
  
  
<?php
	if(!isset($_COOKIE['wizyta']))
	{
		$miesiac =2592000 +time();
		setcookie('wizyta',date("m.d.y"),$miesiac);
		echo "Witamy na naszej stronie";
	}
	else
	{   
		$kiedys=$_COOKIE['wizyta'];
		$miesiac =2592000 +time();
		setcookie('wizyta',date("m.d.y"),$miesiac);
		echo "Witamy. Ostatni raz byłeś u nas".$kiedys."<br>";
	}
?>
 
   </body> 
</html>