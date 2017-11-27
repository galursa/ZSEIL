<?php
	for($i=1;$i<=10;$i+=0.5)
	{
		echo $i." ";
	}
	echo "<br>";
	for($i=1;$i<=10;$i++)
	{
		$tablica[$i]=$i;
		echo $tablica[$i]." ";
	}
	echo "<br>";
	$tablica[20]=4;
	echo $tablica[20];
	echo "<br>";
	print_r($tablica);
	echo "<br>";
	foreach($tablica as $wartosc)
	{
		echo $wartosc." ";
		
	}
		echo "<br>";
	$nowa = array(
	 $tablica,
	 array("slowa","slowo","slowem")
	);
	print_r($nowa);
	echo "<br>";
	echo $nowa[0][1];
	echo "<br>";
	echo $nowa[1][1];

?>