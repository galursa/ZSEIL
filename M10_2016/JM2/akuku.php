<?php
	function niespodzianka($liczba){
		for($i=1;$i<=100;$i++)
		{
			if(($i%$liczba)==0)
				echo "a kuku";
			else
				echo $i." ";
		}
		echo "<br>";
	}
	niespodzianka(3);	
?>






