<?php
/*
a)	Sn=1*2*3*...*n
*/
$Sn=0;
$i=1;
$j=2;
$x=1;
$koniec=3;
while($x<4){
	$z=$i*$j;
	
	$Sn+=$z;
	
	$i++;	
	$j++;
	$x++;
}
/*
x=0 1*2 sn=2
x=1 2*3 sn=2+6=8
x=2 3*4 sn=8+12 =20
*/
echo "Wartość wyrażenia Sn=".$Sn." .";
?>