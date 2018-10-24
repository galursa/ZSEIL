<!DOCTYPE html>
<html> 
    <head> 
        <title>Ankieta</title> 
		<meta charset='UTF-8'>
   </head> 
  <body> 
  
  Czy chcesz usunąć zmianę czasu w Polsce?
  <form action="" method="GET">
	<input type="radio" name="taknie" value="Tak">Tak <br>
	<input type="radio" name="taknie" value="Nie">Nie <br>
	<input type="radio" name="taknie" value="NieWiem">Nie wiem <br>
	<input type="submit" value="Głosuj" name="glosuj">
  </form>
  
  
<?php
	if(isset($_GET['glosuj']))
	{
		$zmienna=@$_GET['taknie'];
		switch($zmienna)
		{
		case 'Tak':
			
			if(!isset($_COOKIE['tak']))
			{
				$tak=1;
				setcookie('tak',$tak);
				echo "Glosow na tak jest: 1 <br>";
			}else{		
			$tak=++$_COOKIE['tak'];
			setcookie('tak',$tak);
			
			}
			break;
		case 'Nie':
			if(!isset($_COOKIE['nie']))
			{
				$nie=1;
				setcookie('nie',$nie);
			echo "Glosow na nie jest 1 <br>";	
			}else{		
			
			$nie=++$_COOKIE['nie'];
			setcookie('nie',$nie);
			
			}
			break;
		case 'NieWiem':
			if(!isset($_COOKIE['niewiem']))
			{
				$niewiem=1;
				setcookie('niewiem',$niewiem);
				echo "Glosow na niewiem jest: 1 <br>";
			}else{		
			$niewiem=++$_COOKIE['niewiem'];
			setcookie('niewiem',$niewiem);
			
			}
			break;
		}
		if (isset($_COOKIE['tak']))
			echo "Glosow na tak jest: ".$_COOKIE['tak']."<br>";
		if (isset($_COOKIE['nie']))
			echo "Glosow na nie jest: ".$_COOKIE['nie']."<br>";
		if (isset($_COOKIE['niewiem']))
			echo "Glosow na niewiem jest: ".$_COOKIE['niewiem']."<br>";
	}
	else
	{
		echo "Nie oddano glosu";
	}
?>
 
   </body> 
</html>