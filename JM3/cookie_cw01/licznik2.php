<!DOCTYPE html>
<html> 
    <head> 
        <title>Licznik odwiedzin</title> 
		<meta charset='UTF-8'>
   </head> 
  <body> 
<?php 

    if (!isset($_COOKIE['licz']))
    {
        ?> 
Witaj! Jesteś na stronie po raz pierwszy
<?php 
        $cookie = 1;
        setcookie("licz", $cookie);
    }
    else
    {
        $cookie = ++$_COOKIE['licz'];
        setcookie("licz", $cookie);
        ?> 
Oglądałeś tę stronę aż  <?= $_COOKIE['licz'] ?> razy. 
<?php  }// end else  ?> 
   </body> 
</html>