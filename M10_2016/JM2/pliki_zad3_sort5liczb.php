<?php
$zmienna=fopen("d:\\los1.txt","w+");
for ($i=0;$i<5;$i++)
{	
	$los=rand(1,10);
	fputs($zmienna, $los);
	fputs($zmienna, "\r\n");
}
fclose($zmienna);

//readfile("d:\\los1.txt");

$zmienna=fopen("d:\\los1.txt","r+");
//odczytujemy dane z pliku
while(!feof($zmienna)){
   $liczby[] = (int)fgets($zmienna);  
}
print_r($liczby);
echo "<br>";

$n=6;
for($i=0;$i<$n-1;$i++)
{
	for($j=0;$j<$n-1;$j++)
	{
		if($liczby[$j] >$liczby[$j+1])
		{//zamiana miejscami
			$temp=$liczby[$j];
			$liczby[$j]=$liczby[$j+1];
			$liczby[$j+1]=$temp;			
		}
	}
}	
print_r($liczby);


/*//rozdzielamy dane liczbowe i zapisujemy w tablicy.
$tablica=explode(' ',$liczby);
//znajdujemy największy element
*/

?>


