<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultar</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
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

/********************************************/
/* Luego vamos a obtener todos los datos que esten contenidos 
en la tabla con una consulta */
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
?>
<div class="span12">
<br/>
<form action="modificar.php" method="post">
<legend>Modificar</legend>
<label for="idn">Que registro desea modificar: </label>
<input id="idn" type="number" placeholder="id" name="idn" required="required"> <br />
<input type="text" placeholder="Nuevo Nombre" name="nomn" value="">
<input type="text" placeholder="Nueva Dirección" name="dirn">
<input type="text" placeholder="Nuevo Teléfono" name="teln">			
<input type="email" placeholder="Nuevo Email" name="emailn" required="required"> <br />
<input type="submit" class="btn btn-lg btn-success" value="Modificar">
</form> 
<form action="eliminar.php" method="post">
<legend>Eliminar</legend>
<input type="number" placeholder="Id" name="ide" required="required"> <br>
<input type="submit" class="btn btn-lg btn-danger" value="Eliminar">
</form>
<form>
<legend>Agregar nuevo registro</legend>
<a href="index.html"><input class="btn btn-lg btn-primary" value="Nuevo"></a>
</form>
</div>
</body>
</html>