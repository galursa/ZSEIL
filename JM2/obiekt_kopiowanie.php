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
$dla_mlodziezy=$dla_dzieci;
//wywołanie metody
$dla_dzieci->wypisz();	
//zmieniamy wartość pola nazwa
$dla_mlodziezy->nazwa="Chińczyk";
//wywołujemy metodę dla obiektu $dla_mlodziezy
$dla_mlodziezy->wypisz();
//wywołujemy metodę dla obiektu $dla_dzieci
$dla_dzieci->wypisz();
?>	






