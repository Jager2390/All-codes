<html>
<head>
<title>Ejercicio</title>
</head>
<body bgcolor="navyblue">
<h1>Fichas</h1>
<?php
$fic=rand(10,300);
$porc=rand(1,50);
$cal=$fic*$porc/100;
echo "El porcentaje de fichas es: $cal<br>";
?>
</body>
</html>