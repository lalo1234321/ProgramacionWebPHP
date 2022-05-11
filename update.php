<?php
include "conexionBase.php";

$id = $_POST["id_articulo"];
$decada = $_POST["decada"];
$subcat = $_POST["subcat"];
$content = $_POST["articleContent"];

$sql = "UPDATE articulos SET decada = $decada, Subcategoria = '$subcat', Contenido = '$content' WHERE id_Articulo = $id";
// $sql = "UPDATE Producto SET nombre = view, descripcion = test, precio = 10000 WHERE id_producto = ". 1;

// $result = mysqli_query($db, $sql);

if(mysqli_query($db, $sql) == 1) {
    header("location:homePage.php");
} else {
    echo "Ha ocurrido un error";
}


mysqli_close($db);
?>