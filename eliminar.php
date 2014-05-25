<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8"/>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar</title>
<style type="text/css">
#header {
	background-color: #000;
	height: 150px;
	position: absolute;
	left: 0px;
	top: 0px;
	right: 0px;
}
#formulario {
	width: 600px;
	position: absolute;
	top: 151px;
	left: 50%;
	margin-left: -600px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #333;
}
#header #titulo {
	color: #FFF;
	text-align: center;
	top: 30px;
	position: relative;
}
</style>
</head>

<body>
<div id="header"><h1 id="titulo">Formulario</h1></div>

<div id="formulario">
  <? 
require ("conexion.php");

//Recibimos los parametros enviados mediante POST por el Formulario
$idcliente = $_POST["ide"];
 $sql="DELETE FROM cliente WHERE id_cliente='$idcliente'";
 mysql_query($sql);


// Se insertan los datos recibidos de la pagina del formulario con la funcion 'mysql_query'
// mysql_query("DELETE FROM cliente WHERE usuario=".$usuario);
// mysql_close() es el evivalente a mysqli_close() sirve para finalizar la conexión.
 $sql = "SELECT * FROM cliente";

$resultado = mysql_query($sql);
/*ahora creamos la tabla en html para mostrar los resultados
agregandole un par de botones de radio */
echo "<html>
		<h1>REGISTROS</h1>
		<body>
		
			<table>
				<tr><td>Id</td><td>Nombre</td><td>Direcci&oacute;n</td><td>Telefono</td><td>Email</td></tr>";
$i = 0 ; //iniciamos nuestro cont en cero
/*el siguiente bucle nos permite obtener la informacion obtenida
de la ejecución de la sentencia de sql */
while ($row = mysql_fetch_row($resultado)){
			echo "<tr><td><input type='hidden' name='id[$i]' value='".$row[0]."' />".$row[0]."</td>
			          <td><input type='text' name='nombre[$i]' value='".$row[1]."' /></td>
					  <td><input type='text' name='usuario[$i]' value='".$row[2]."'/></td>
					  <td><input type='text' name='correo[$i]' value='".$row[3]."'/></td>
					  <td><input type='text' name='telefono[$i]' value='".$row[4]."'/></td>
					  
					  </tr>";$i++; 
}
echo "</table></body></html>";

 echo "Registro con el id = $idcliente  se ha eliminado";
?>
<br/>
<form action="modificar.php" method="post">
<legend>Modificar</legend>
<input type="number" placeholder="id" name="idn"> <br />
<input type="text" placeholder="Nuevo Nombre" name="nomn" value="">		
<input type="text" placeholder="Nueva Dirección" name="dirn">
<input type="text" placeholder="Nuevo Teléfono" name="teln">			
<input type="email" placeholder="Nuevo Email" name="emailn" required="required"> 
<!--  -->
<br>
<input type="submit" class="btn btn-lg btn-success" value="Modificar">
</form>
<form action="eliminar.php" method="post">
<legend>Eliminar</legend>
<input type="number" placeholder="Id" name="ide" required="required"> <br>
<input type="submit" class="btn btn-lg btn-danger" value="Eliminar">
<form>
<legend>Agregar nuevo registro</legend>
<a href="formulario_MySQL.html"><input class="btn btn-lg btn-primary" value="Nuevo"></a>
</form>
</div>
</body>
</html>