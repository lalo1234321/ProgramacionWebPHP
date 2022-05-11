<?php
include "conexionBase.php";

$id = $_POST["idArticle"];

$sql = "DELETE FROM articulos WHERE id_Articulo=$id";
// $sql = "UPDATE Producto SET nombre = view, descripcion = test, precio = 10000 WHERE id_producto = ". 1;

// $result = mysqli_query($db, $sql);

if(mysqli_query($db, $sql) == 1) {
    header("location:homePage.php");
} else {
    echo "Ha ocurrido un error";
}
// if ($db->query($sql) === TRUE) {
//   echo "Registro actualizado correctamente";
// } else {
//   echo "Ha ocurrido un error: " . $db->error;
// }

mysqli_close($db);



?>


