<?php
function silnia($liczba){
	$iloczyn=1;
	for($i=1;$i<=$liczba;$i++)
		$iloczyn*=$i;
	return $iloczyn;
}
function pobierz(){
	$flaga=1;
try{
	$uzytkownik = $_GET['lu'];
	if($uzytkownik==5){
		throw new Exception("Liczba blisko dozwolonego zakresu");
	}
	if($uzytkownik>5){
				$flaga=0;
		throw new Exception("Liczba przekroczyła zakres");
	}
}catch(Exception $e){
	echo "Wyjątek: ".$e->getMessage()." Jego kod:".$e->getCode()."<br>";
}finally{
if($flaga==1)
	echo silnia($uzytkownik);
}
}
//http://localhost/test.php?lu=3
pobierz();
/*
Silnia
Silnia
3;!=1*2*3
2!=1*2
1!=1
0!=1
*/





?>
