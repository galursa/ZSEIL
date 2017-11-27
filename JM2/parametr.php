<!DOCTYPE html>
<html>
	<head>
		<title>Oblicz pole powierzchni koła</title>
		<meta charset='UTF-8'>
		
	</head>
	<body>
<form name="obliczenia" method="get"> 

   <input type="text" name="promien" />
   <input type="submit" value="Oblicz pole" />
</form>

<?php
  function pole($promien){
    $z=pi()*$promien*$promien;
	return $z;
  }
  
  if (isset($_GET['promien'])){
	 $pr=$_GET['promien'];
    echo pole($pr);
  }
?>
</body>
</html>





