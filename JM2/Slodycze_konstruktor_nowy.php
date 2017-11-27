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
}
$czekolada = new Slodycze("Gorzka",100,200);

print_r($czekolada);

?>







