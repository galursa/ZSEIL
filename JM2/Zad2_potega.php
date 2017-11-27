<?php
function potega($a,$b){
	if(!is_numeric($a))
		throw new Exception("Pierwsza wartość nie jest liczbą. Proszę podać liczbę");
	if(!is_numeric($b))
		throw new Exception("Druga wartość nie jest liczbą. Proszę podać liczbę");
	
	$iloczyn=1;
	for($i=1;$i<=$b;$i++)
	{
		$iloczyn*=$a;
	}
	return $iloczyn;
}

try{
  echo potega(2.5,3)."<br>";	
  echo potega(2,"b");
}catch(Exception $e)
{
	echo "Wyjątek: ".$e->getMessage()."<br>";
}
?>
