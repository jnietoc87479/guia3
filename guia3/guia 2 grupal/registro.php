<?php
include_once('db.php');
//recibo todos los datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


echo "los datos son los siguientes: <br>";
echo "$nombres,$apellidos,$direccion,$telefono,$usuario,$clave";


<?php

$conectar=conn();//ejecuta las conexiones a la bd
$sql="INSERT INTO usuarios(usuario,nombres,apellidos,direccion,telefono,usuario,clave)
VALUES('$nombres', '$apellidos', '$direccion','$telefono','$usuario','$clave');
$resul= mysqli_query($conectar,$sql)or trigger_error(Query failed! SQl- Error: ".mysqli_error
echo "$sql";

?>



?>