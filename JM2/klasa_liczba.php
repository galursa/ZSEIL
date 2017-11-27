<?php
class Licze{
	public
		$wartosc;
	function __construct($a){
		$this->wartosc=$a;
	}
	function dodaj($z){
		return $this->wartosc+$z;
	}
	function odejmij($z){
		return $this->wartosc-$z;
	}	
	function wyswietl($x,$zm){
		switch($zm){
		case "+":
		   echo $this->wartosc.$zm.$x."=".$this->dodaj($x)."<br>";
		   break;
		case "-":
			echo $this->wartosc.$zm.$x."=".$this->odejmij($x)."<br>";
		   break;
		}
	}
}
$liczba = new Licze(5);
$x=2;
$liczba->wyswietl(2,"+");
$liczba->wyswietl(2,"-");

?>

