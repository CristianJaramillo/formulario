###### Base de datos
| id_cliente  | Nombre           | Direccion    | Telefono     |
| :---------: |:---------------: | :----------: | :----------: |
| 1           |   Cristian       | Tecnologico  | 3521130834   |
| 2           |   Omar       | Tecnologico  | 3521131678   |

>___
>Pagina de **PHP** administrada con una Base de datos 
>___

####Conexion de la Base de Datos

<?php
`$enlace` = mysql_connect(`'localhost'`, `'user'`, `'pass_user'`);
if (!$enlace) {
    die('Error de Conexión ( ' . mysql_errno() . ' ) '. mysql_error());
}
mysql_select_db('formulario_php');
?>