<!DOCTYPE html>
<title>Wyświetla wszystkie dane z tabeli w bazie danych</title>
<meta charset='UTF-8'>

<?php
		// var_dump($_POST);
		// var_dump(  empty($_POST['dlogin'])  );
				$baza = mysql_connect('localhost', 'ziutek', 'qwerty'); 
				if ($baza === false) 
					die('Nie można było nawiązać połączenia z bazą '
					.'z powodu błędu: ' . mysql_error());
				$ok = mysql_select_db('moja_baza');
				if ($ok===false) 
					die('Nie udało się wybrać bazy danych'
					.'z powodu błędu: '.mysql_error());
				// --- tutaj instrukcje korzystające z bazy danych --
				
				$zapytanie = 'SELECT * FROM osoby';
				$odpowiedz = mysql_query($zapytanie);
				if($odpowiedz===false) die ('Nie udało się ponieważ '
					.mysql_error());
				//--- teraz realizujemy zapytania w pętli - linijka po linijce
				$i=0;
				while ($rekord=mysql_fetch_assoc($odpowiedz)){
					$i=	$i+1;
					$imie=$rekord['imie'];
					$nazwisko=$rekord['nazwisko'];
					$nrtelefonu=$rekord['nr_telefonu'];
					echo "\r\n";
					echo $i.' '.$imie.' '.$nazwisko.' '.$nrtelefonu."<br>";
				}

				//A to na koniec
				mysql_close($baza);
?>		
		
	



