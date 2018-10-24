<?php
class figury
{
	public
	 $bok,
	 $ilosc_bokow;
	function wyswietl()
	{
		echo "Długość boku: ".$this->bok."<br>";
		echo "Ilość boków: ".$this->ilosc_bokow."<br>";
	}
	//dopisać funkcję która wyświetla rodzaj wielokąta
	//w zależności od ilości boków
}
class fig_foremne extends figury
{
	public
		$bok;
	function obwod()
	{
		return $this->bok*$this->ilosc_bokow;
	}
	function wyswietl()
	{
		echo "To jest klasa figury foremne";
	}
	function wyswietl_foremne()
	{   
	    echo "To jest klasa figury foremne <br>";
		parent::wyswietl();
	}
}
$kwadrat = new fig_foremne;
$kwadrat->bok=2;
$kwadrat->ilosc_bokow=4;
$kwadrat->wyswietl_foremne();
echo $kwadrat->obwod();

?>

