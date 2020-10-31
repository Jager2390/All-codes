<?php 
//Conecta con el servidor y selecciona la base de datos
//$con=mysqli_connect('localhost', 'root', '','base');

//****************************************************************
function borrar($id)
{
	$con=mysqli_connect('localhost', 'root', '','base');
	$sql="delete from amigos where id=$id";
	mysqli_query($con,$sql);
	echo 'Registro eliminado con exito!';
}
//******************************************************
function ingreso()
{
	$con=mysqli_connect('localhost', 'root', '','base');
	//Escribo en mi base de datos
	if (isset($_POST['nombre']))
	{
		$nombre=$_POST['nombre'];
		$direccion=$_POST['direccion'];
		$tel=$_POST['tel'];
		$cad="insert into amigos (nombre,direccion,tel) values ('".$nombre."','".$direccion."','".$tel."')";
		mysqli_query($con, $cad);
		echo 'Amigo ingresado!';
    }
}

function verAmigos()
{
	$con=mysqli_connect('localhost', 'root', '','base');
    $consulta="select*from amigos"; 
	$resultado=mysqli_query($con, $consulta);
	@$num_resultados=mysqli_num_rows($resultado);
	echo '<br>Número de búsquedas encontradas: '.$num_resultados.'';
	echo '<div style="overflow: auto; width=400px; height: 235px;">';
	echo '<table width=362 border=1>';
	echo '<tr bgcolor="#0BCBAE">';
		echo '<td>ID</td>';
		echo '<td>NOMBRE</td>';
		echo '<td>DIRECCIÓN</td>';
		echo '<td>TELÉFONO</td>';
		echo '<td>BORRAR</td>';
		echo "</tr>";

    for ($i=0; $i<$num_resultados; $i++)
	{
		$fila=mysqli_fetch_array($resultado);
		echo "<tr>";
			echo '<td>'.$fila['id'].'</td>';
         	echo '<td>'.$fila['nombre'].'</td>';
         	echo '<td>'.$fila['direccion'].'</td>';
         	echo '<td>'.$fila['tel'].'</td>';
			echo '<td>'.'<a href="borrar.php?nro='.$fila['id'].'" title="'.$fila['id'].'">Borrar</a>'.'</td>';
			         
		echo "</tr>";
    }  
  	echo'</table>';
	echo '</div>';
}
?>

