<?php
/*
Sn=1-1/2+1/3-1/4+1/5-1/6+...+(-1)n+1/n.
*/
$Sn=1;
$i=2;
$j=3;
$x=1;
$koniec=1;
if($koniec==1){
	$Sn=1;
} else{
while($x<4){
	$z=1/$i+1/$j;
	
	$Sn-=$z;
	
	$i++;	
	$j++;
	$x++;
}
}
/*
x=0 1*2 sn=2
x=1 2*3 sn=2+6=8
x=2 3*4 sn=8+12 =20
*/
echo "Wartość wyrażenia Sn=".$Sn." .";
?>