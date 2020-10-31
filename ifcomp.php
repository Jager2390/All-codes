<html>
<head>
	<title>Ventas</title>
</head>
<body bgcolor="#rgb(250,0,0);">
	<h1>Pagina para calcular ventas</h1>
	<?php
	$precio_costo=rand(200,5000);
	$porc_gan=rand(1,100);
	$cant_comp=rand(1,50);
	$ganan=($precio_costo*$porc_gan/100);
	$pc_ganan=($precio_costo+$ganan)*$cant_comp;
	echo "El precio de costo es: $$precio_costo<br>";
	echo "El porcentaje de ganancia es: $porc_gan%<br>";
	echo "Usted ha comprado $cant_comp productos.<br>";
	echo "El total a pagar es: $$ganan<br>";
	if($cant_comp>3)
	{
		$desc=$ganan*15/100;
		$total_pagar=$ganan-$desc;
		echo "Tu compra es mayor a 3 productos.<br>";
		echo "Asi seria el descuento: $$desc<br>";
		echo "Al ser mayor te queda 15% de descuento: $$total_pagar<br>";
	}
	else
		{
			echo "Muchas gracias por su compra, disfrutela.<br>";
		}
	?>
</body>
</html>