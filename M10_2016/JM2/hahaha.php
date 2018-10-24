<?php
$rozmiar=7;
$rozmiari=3;
for($i=1;$i<=$rozmiar;$i++){
	for($j=1;$j<=$rozmiar;$j++){
		  if($i!=4){
		 	if(($j==1)||($j==$rozmiar))
			 echo "H";
			else
			 echo "&nbsp;&nbsp;&nbsp;";
		  }else
			  echo "H";
	}
	echo "<br>";
}
