<html>
  <head>
  <title>Problema</title>
  </head>
  <body>
  <?php
  if ($_REQUEST['radio1']=="suma")
  {
    $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:".$suma;
  }
  else
  {
    if ($_REQUEST['radio1']=="resta")
    {
      $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:".$resta;
    }
	else
		if ($_REQUEST['radio1']=="producto")
    {
      $producto=$_REQUEST['valor1'] * $_REQUEST['valor2'];
      echo "El producto es:".$producto;
    }
	else
		if ($_REQUEST['radio1']=="cosiente")
    {
      $cosiente=$_REQUEST['valor1'] / $_REQUEST['valor2'];
      echo "El cosiente es:".$cosiente;
    }
  }
  ?>
  </body>
  </html>