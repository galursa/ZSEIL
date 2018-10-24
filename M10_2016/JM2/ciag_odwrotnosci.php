<?php
/*Napisz skrypt, który liczy sumę odwrotności liczb naturalnych podzielnych przez 3 nie większych od podanej liczby naturalnej n.*/
$i=1;
$n=30;
$Sn=0;
while($i<$n){
	if(($i%3)==0){
	$Sn+=1/$i;
	}
	$i++;
}
echo "Suma sn=".$Sn;
?>