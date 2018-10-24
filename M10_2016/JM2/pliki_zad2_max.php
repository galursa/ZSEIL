<?php
$zmienna=fopen("d:\\los.txt","w+");
for ($i=0;$i<15;$i++)
{	
	$los=rand(1,10);
	fputs($zmienna, $los);
	fputs($zmienna, " ");
}
fclose($zmienna);
$zmienna=fopen("d:\\los.txt","r+");
//odczytujemy dane z pliku
while(!feof($zmienna)){
   $liczby = fgets($zmienna);  
}
//rozdzielamy dane liczbowe i zapisujemy w tablicy.
$tablica=explode(' ',$liczby);
//znajdujemy największy element
$max=$tablica[0];
for($i=1;$i<15;$i++)
{
	if($tablica[$i]>$max)
		$max=$tablica[$i];
}	
print_r($tablica);
echo "<br>".$max."<br>";
fclose($zmienna);

?>


