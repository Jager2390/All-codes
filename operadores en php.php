<html>
<head>
    <title>Operadores</title>
</head>
<body bgcolor="navyblue">
    <h1>Operadores en PHP</h1>
    <?php
    $dis_km=rand(5,70);
    $hermanos=rand(1,6);
    $sal_fal=rand(5000,75000);
    echo "Pagina de Becas Estudiantiles.<br>";
    echo "Se tiene en cuenta el numero de hermanos, distancia del colegio y el salario familiar<br>";
    echo "Distancia: $dis_km km<br>";
    echo "Hermanos: $hermanos<br>";
    echo "Salario familiar: $$sal_fal<br>";
    if($dis_km>10 or $hermanos>2 or $sal_fal<20000)
    {
        echo "Tienes derecho a una beca.<br>";
    }
    else
    {
        echo "No tienes derecho a una beca<br>";
    }
    ?>
</body>
</html>

        