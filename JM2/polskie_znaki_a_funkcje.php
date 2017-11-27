<?php
zamien("żaNeta","brzĘczyŚkoĆwieŃski");

function zamien($imie, $nazwisko)
{
	$imie =ucfirst(mb_strtolower($imie,'UTF-8'));
	$nazwisko = ucfirst(mb_strtolower($nazwisko,'UTF-8'));
	echo $imie." ".$nazwisko;
}

?>







