<?php
class Slodycze{
	public
		$nazwa,
		$waga,
		$kalorie;
	function __construct($a, $b, $c)
	{
		$this->nazwa = $a;
		$this->waga= $b;
		$this->kalorie=$c;
	}
	function __destruct(){
		echo $this->nazwa." to ohyda więc usuwam<br>";
	}
}
$czekolada = new Slodycze("Gorzka",100,200);

print_r($czekolada);

unset($czekolada);

?>







