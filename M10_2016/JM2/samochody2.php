<?php
class Samochody
{
  public 
		$marka,
		$model,
		$przebieg,
		$pojemnosc_silnika,
		$kolor,
		$rocznik;

	function wypisz()
	{
		echo "Marka: ".$this->marka."<br>";
		echo "Model: ".$this->model."<br>";
		echo "Przebieg: ".$this->przebieg."<br>";
		echo "Pojemność silnika: ".$this->pojemnosc_silnika."<br>";
		echo "Kolor: ".$this->kolor."<br>";
		echo "Rocznik: ".$this->rocznik."<br>";		
	}
	function poziom_spalania(){
		if (($this->pojemnosc_silnika)<=2000)
			echo "Spalanie jest w zakresie "
			//7-10 litrow
	}
}
$samochod1 = new Samochody;
$samochod1-> marka="Ford";
$samochod1->model = "Fiesta MK7";
$samochod1-> przebieg=31000;
$samochod1->pojemnosc_silnika=1500;
$samochod1->kolor = "Pistacjowy";
$samochod1->rocznik =2010;
$samochod1->wypisz();
?>
