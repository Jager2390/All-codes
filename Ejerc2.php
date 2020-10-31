<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body bgcolor="navyblue">
    <h1>Negocio</h1>
    <?php
    $pre=70;
    $cant_pro=rand(100);
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
    else
    {
        echo "No hay descuento<br>";
    }
    ?>
</body>
</html>
    
