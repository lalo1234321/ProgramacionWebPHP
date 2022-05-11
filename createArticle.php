<?php
    include "conexionBase.php";


    session_start();
    $id = $_SESSION["id_usuario"];
    echo $id;
    
    $subcat = $_POST["subcat"];
    $decada = $_POST["decada"];
    $contenido = $_POST["articleContent"];
    echo $subcat;
    echo $decada;
    echo $contenido;
    $sql = "INSERT INTO articulos (id_Escritor,Subcategoria,contenido,decada) VALUES ($id, '$subcat', '$contenido', $decada)";
    // $sql = "UPDATE Producto SET nombre = view, descripcion = test, precio = 10000 WHERE id_producto = ". 1;
    
    // $result = mysqli_query($db, $sql);
    
    if(mysqli_query($db, $sql) == 1) {
        header("location:homePage.php");
    } else {
        echo "Ha ocurrido un error";
    }
    if ($db->query($sql) === TRUE) {
      echo "Registro actualizado correctamente";
    } else {
      echo "Ha ocurrido un error: " . $db->error;
    }
    
    mysqli_close($db);



?>