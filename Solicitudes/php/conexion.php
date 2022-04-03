<?php
//declarar variables para conexion
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$DB = "pruebas_solicitudes";

//Crear conexon
$conexion = mysqli_connect($servidor,$usuario,$contraseña,$DB);

//Revisar conexion
if (!$conexion){
    echo "Fallo la conexion <br>";
    die  ("Conexion failed: ".mysqli_connect_error());
    
}
else{
    echo "Conexion exitosa";
}

?>