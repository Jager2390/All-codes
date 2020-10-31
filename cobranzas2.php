<html>
<head>
	<title>cobranzas</title>
</head>
<body bgcolor="pink">
	<h2>Facturas</h2>
	<?php
	$cz=rand(1,4);
	$met=rand(1,1200);
	$co_met=0.20;
	echo "Codigo de zona: $cz<br>";
	echo "Total de metros: $met<br>";
	echo "Costo por metro: $$co_met<br>";
	if($cz==1)
	{
		$p1=5;
		echo  "Zona 1: $$p1<br>";
		$cal1=($met*$co_met)+$p1;
		echo "precio total zona 1: $$cal1<br>";
	}
	if($cz==2)
	{
		$p2=5.50;
		echo "Zona 2: $$p2<br>";
		$cal2=($met*$co_met)+$p2;
		echo "Precio total Zona 2: $$cal2<br>";
	}
	if($cz==3)
	{
		$p3=6.20;
		echo "Zona 3: $$p3<br>";
		$cal3=($met*$co_met)+$p3;
		echo "Precio total Zona 3: $$cal3<br>";
	}
	if($cz==4)
	{
		$p4=7;
		echo "Zona 4: $$p4<br>";
		$cal4=($met*$co_met)+$p4;
		echo "Precio total Zona 4: $$cal4<br>";
	}
	echo "Fin del programa";
	?>
</body>
</html>