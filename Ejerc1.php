<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body bgcolor="red">
    <h1>Parque de Diversiones</h1>
    <?php
    $ent_menores=100;
    $ent_mayores=200;
    $edad=rand(1,150);
    echo "Edad: $edad años<br>";
    if($edad<=17)
    {
        echo "Valor de la entrada del menor: $$ent_menores<br>";
    }
    elseif($edad>18 and $edad<110)
    {
        echo "Valor de la entrada mayores: $$ent_mayores<br>";
    }
    else
    {
        echo "Edad incorrecta";
    }
    ?>
</body>
</html>

    