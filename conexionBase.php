<?php
            $servidor = "localhost";
            $usuarioBD = "root";
            $pwdDB = "";
            $nomBD = "examenu5";
            $db = mysqli_connect($servidor, $usuarioBD, $pwdDB, $nomBD);
            if(!$db) {
                die("La conexion fallo" .mysqli_connect_error());
            } else {
                //  echo "conexion creada";
                //mysql_query($db, "SET NAMES 'UTF8'");
            }
?>