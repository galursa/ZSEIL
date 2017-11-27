<?php
setcookie("sprawdz_ciastko", "test", time() + 3600, '/');
?>
<html>
    <head> 
        <title>Sprawdzamy czy ciasteczka są włączone</title> 
		<meta charset='UTF-8'>
   </head> 
  <body> 
<body>

<?php
if(count($_COOKIE) > 0) {
    echo "Ciasteczka są włączone";
} else {
    echo "Ciasteczka są wyłączone";
}
?>

</body>
</html>