<?php
class Gry
{
  public 
	$nazwa,
	$ile_graczy,
	$rodzaj,
	$platforma;
	function wypisz_gre()
	{
	  echo "Nazwa: ".$this->nazwa."<br>";
	  echo "Ilość graczy:".$this->ile_graczy."<br>";
	  echo "Platforma:".$this->platforma."<br>";
	  echo "Rodzaj:".$this->rodzaj."<br>";
	  
	}
	function wypisz()
	{
		print_r($this);
	}
}

$dla_dzieci= new Gry;
//Nadanie wartości
$dla_dzieci->nazwa='Na grzyby';
$dla_dzieci->ile_graczy=4;
$dla_dzieci->platforma='losowa';
$dla_dzieci->rodzaj='planszowa';
print_r($dla_dzieci);
$dla_dzieci->wypisz_gre();
$dla_dzieci->wypisz();	
?>	






