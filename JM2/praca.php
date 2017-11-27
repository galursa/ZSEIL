<?php 
$liczba=6345;
$tak =0;
if(($liczba%4)==0){
	echo "Liczba ".$liczba."jest podzielna przez: 4, 2, ";
	$tak=1;
	if(($liczba%3)==0){
		echo "3, ";	
		$tak=1;
		if(($liczba%5)==0)
			echo "5, ";
		$tak=1;
	}
}

if ($tak==0) {
	echo  "Liczba nie jest podzielna ani przez 2 ani przez 3, 4 i 5";
}


?>