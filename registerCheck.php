<?php
    include "conexionBase.php";


    
    
    $correo = $_POST["correo"];
    $password = $_POST["pass"];
    $rol = $_POST["rol"];
    $sql = "INSERT INTO usuarios (correo,password,rol) VALUES ( '$correo', '$password', '$rol')";
    // $sql = "UPDATE Producto SET nombre = view, descripcion = test, precio = 10000 WHERE id_producto = ". 1;
    
    // $result = mysqli_query($db, $sql);
    
    if(mysqli_query($db, $sql) == 1) {

        header("location:Login.php");
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