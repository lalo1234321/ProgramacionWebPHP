<?php

include "conexionBase.php";
session_start();
// echo $_SESSION["rol"];

$id = $_REQUEST['id_usuario'];


$sql = "SELECT * from articulos where id_Articulo = $id";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
  
    // Get the subcat
    $subcat = $row["Subcategoria"];
  
    // Get the content
    $content = $row["Contenido"];
    // Store it in a array
    $result1 = array("$subcat", "$content");
    
    // Send in JSON encoded form
    $myJSON = json_encode($result1);
    echo $myJSON;

?>