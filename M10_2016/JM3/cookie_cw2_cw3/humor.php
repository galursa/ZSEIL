<!DOCTYPE html>
<html> 
    <head> 
        <title>Ankieta</title> 
		<meta charset='UTF-8'>
   </head> 
  <body> 
  
  Witaj jaki masz dzisiaj humor?
  <form action="" method="GET">
	<input type="radio" name="taknie" value="Dobry">Dobry <br>
	<input type="radio" name="taknie" value="TakiSobie">Taki sobie <br>
	<input type="radio" name="taknie" value="Zły">Zły <br>
	<input type="submit" value="Głosuj" name="glosuj">
  </form>
  
  
<?php
	if(!isset($_COOKIE['humor']))
	{
		$dzis= $_GET['taknie'];
		setcookie('humor',$dzis);
		echo "Dzisiaj masz humor".$dzis;
	}
	else
	{   
		$wczoraj=$_COOKIE['humor'];
		$dzis= $_GET['taknie'];
		setcookie('humor',$dzis);
		echo "Wczoraj miałeś humor:".$wczoraj." a dzisiaj masz ".$dzis."<br>";
	}
?>
 
   </body> 
</html>