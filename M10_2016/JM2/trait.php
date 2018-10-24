<?php
trait Powitanie{
	function Czesc(){
		echo "Dzień dobry. Cześć. Czołem";
	}
}

class Dzien{
	
	
	
	use Powitanie;
	public
	$ala,
	$kot;
}

$wtorek = new Dzien;
$wtorek->Czesc();
$wtorek->ala="ALa";
$wtorek->kot="Jarek";
foreach ($wtorek as $nazwa=>$value)
	echo $nazwa." ".$value."<br>";
?>


