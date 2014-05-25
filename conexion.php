<?php
// Se almacena la conexion en la variable $enlace
$enlace = mysql_connect('localhost', 'root', '123456');
// La condicion que permite verificar que se logro conectar y envia el respective mensaje en cualquiera de los casos
if (!$enlace) {
    die('Error de Conexión ( ' . mysql_errno() . ' ) '. mysql_error());
}
// Seleccionamos la Base de datos a trabajar, tambien se puede agregar esto en el archivo de conexion
mysql_select_db('formulario_php');
?>