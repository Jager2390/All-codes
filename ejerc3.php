<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body bgcolor="blue">
	<h1>Negocio</h1>
    <?php
    $pre=70;
    $cant_pro=rand(1,100);
    $pago=$cant_pro*$pre;
    echo "Precio por producto: $$pre<br>";
    echo "Cantidad comprada: $cant_pro<br>";
	echo "Pago Total: $$pago<br>";
    if($cant_pro>5)
    {
        $des=$pago*10/100;
        echo "Al superar los 5 productos hay un 10% de descuento.<br>";
        echo "Descuento: $$des<br>";
        $pag_des=$pago-$des;
        echo "Pago total con descuento: $$pag_des<br>";
	}
		if($pago>2000)
		{
			echo "Al superar los $2000 hay otro descuento del 10%.<br>";
			$des_dos=$pag_des*10/100;
			echo "Descuento dos: $$des_dos<br>";
			$des_tot=$pag_des-$des_dos;
			echo "Total con el segundo descuento: $$des_tot<br>";
		}
	else
    {
        echo "No hay descuento<br>";
    }
    ?>
</body>
</html>