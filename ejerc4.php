<html>
<head>
    <title>Ejercicio 4</title>
</head>
<body bgcolor="green">
    <h1>Factura de luz</h1>
    <?php
    $cod_zon=rand(1,5);
    $med_ant=rand(10,2000);
    $med_act=rand(10,2000);
    $ser=100;
    $iva=21;
    echo "Codigo de zona: $cod_zon<br>";
    echo "Medidor Anterior: $med_ant<br>";
    echo "Medidor Actual: $med_act<br>";
    echo "Servicio: $$ser";
    echo "Iva: $iva%";
    


