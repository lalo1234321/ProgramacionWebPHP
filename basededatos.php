<?php
$servidor= "localhost";
$usuarioBD= "root";
$pwdBD= "";
$nomBD= "basedatos";

$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

if(!$db){
    die("La conexion fallo: ".mysqli_connect_error());
}
else
{
    mysqli_query($db, "SET NAMES 'UTF8'");
}

//mysqli_close($conn);

?>