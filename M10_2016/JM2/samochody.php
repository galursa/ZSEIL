<?php
class Samochody
{
  public 
	$nazwa,
	$kolor,
	$pojemnosc_silnika,
	$rodzaj_paliwa,
	$moc,
	$nadwozie,
	$rocznik,
	$czy_nowy;
	
	function wypisz()
	{
		echo "Samochód: ".$this->nazwa."<br>";
		echo "Kolor: ".$this->kolor."<br>";
		echo "Pojemność silnika: ".$this->pojemnosc_silnika."moc".$this->moc."<br>";
		echo "Rodzaj paliwa: ".$this->rodzaj_paliwa."<br>";
		echo "Nadwozie: ".$this->nadwozie."<br>";
		echo "Rocznik:".$this->rocznik."<br>";
		if (($this->czy_nowy)=="true")
			echo "Nowy <br>";
		else
			echo "Stary <br>";
	}
	function policz_cene($cena_pierwotna)
	{
		if (($this->czy_nowy)=="true")
			return $cena_pierwotna;
		else
			return $cena_pierwotna*0.5;		
	}
}
$polonez= new Samochody;
$polonez->nazwa="Polonez";
$polonez->kolor="Czerwony";
$polonez->wypisz();



?>
