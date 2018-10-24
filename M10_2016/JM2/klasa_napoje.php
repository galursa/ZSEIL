<?php
class Napoje
{
	public
	 $rodzaj,
	 $pojemnosc,
	 $naczynie,
	 $cena;
	function wypisz()
	{
		echo "Rodzaj napoju: ".$this->rodzaj." <br>";
		echo "Pojemność: ".$this->pojemnosc." ml <br>";
		echo "Pojemnik: ".$this->naczynie." <br>";
		echo "Cena za sztukę: ".$this->cena." <br>";
	}
}
$sprite = new Napoje;
$sprite->rodzaj="Sprite";
$sprite->pojemnosc=500;
$sprite->naczynie="butelka plastikowa";
$sprite->cena=4;
$sprite->wypisz();

$tab[]=1;
$tab[]=2;
echo $tab[];
?>
