<?php
    include "conexionBase.php";
    session_start();
    $id = $_SESSION["id_usuario"];
    $text = $_POST["area"];
    $id_usuario = $_POST["idareasu"];
    $id_articulo = $_POST["idareaar"];
    
    $sql = "INSERT INTO comentarios (id_usuario,id_Articulo,comentar) VALUES ($id_usuario, $id_articulo, '$text')";
    // $sql = "UPDATE Producto SET nombre = view, descripcion = test, precio = 10000 WHERE id_producto = ". 1;
    
    // $result = mysqli_query($db, $sql);
    
    
    if(mysqli_query($db, $sql) == 1) {
      header("location:homePage.php");  
     } else {
      //  echo "Ha ocurrido un error";
    }
    // if ($db->query($sql) === TRUE) {
    //   echo "Registro actualizado correctamente";
    // } else {
    //   echo "Ha ocurrido un error: " . $db->error;
    // }
    
    mysqli_close($db);



?>