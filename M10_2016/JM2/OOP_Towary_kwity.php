<?php
class Towary{
	public
		$nazwa,
		$wartosc,
		$vat;	
	function __construct($a,$b,$c)
	{
		$this->nazwa=$a;
		$this->wartosc=$b;
		$this->vat=$c;
	}
	function licze_vat(){
		return $this->wartosc*$this->vat;
	}	
	function kwitek(){
		echo "Nazwa towaru: ".$this->nazwa."<br>";
		echo "Wartość: ".$this->wartosc." zł.<br>";
		$z=$this->licze_vat();
		echo "Wartość Vatu: ".$z."zł <br>";
		$x=$z+$this->wartosc;
		echo "Do zapłaty: ".$x."zł. <br>";
	}
}
$ksiazka = new Towary('Dla żółtodziobów',5,0.07);
$mleko = new Towary("Łaciate",3,0.08);
print_r($ksiazka);
echo "<br>";
echo $ksiazka->licze_vat();
echo "<br>";
print_r($mleko);
echo $mleko->licze_vat();
$mleko->kwitek();





?>
