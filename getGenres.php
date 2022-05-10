<?php
    include "conexionBase.php";
    $sql = "SELECT * from Producto";
    $result = mysqli_query($db, $sql);
    $sql = "SELECT * FROM usuarios";
    while($hola = mysqli_fetch_array($result)) {?>
        <option><?php echo $hola["nombre"] ?></option>
    <?php } ?>

