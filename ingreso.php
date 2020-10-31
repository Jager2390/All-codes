<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso de datos</title>
</head>

<body>
<h2>INGRESO DE NUEVO CONTACTO</h2>
<form action="ingreso.php" method="post">
  <label>Nombre:
  <input type="text" name="nombre" id="nombre" />
  </label>
  <p>
    <label>Dirección:
    <input type="text" name="direccion" id="direccion" />
    </label>
  </p>
  <p>
    <label>Tel.:
    <input type="text" name="tel" id="tel" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="aceptar" id="aceptar" value="Aceptar" />
    </label>
  </p>
  <p>&nbsp;</p>
</form>
<?php include('libreria.php');
      $a=ingreso();
	  
?> 
<p><a href="index.php">Lista de Amigos</a></p>
</body>
</html>
