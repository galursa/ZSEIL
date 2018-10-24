<?php
class Gry
{
  public 
	$nazwa,
	$ile_graczy,
	$rodzaj,
	$platforma;

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
$dla_mlodziezy= clone $dla_dzieci;

$dla_mlodziezy->nazwa="Chińczyk";

$dla_mlodziezy->wypisz();
echo "<br>";
$dla_dzieci->wypisz();
?>	






