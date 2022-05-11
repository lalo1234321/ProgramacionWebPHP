<!DOCTYPE html>
<html lang="es">
<head>
    <title>Rome Blog</title>
    <link rel="icon" type="image/png" href="../../img/icono.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/includes.css">
    <link rel="stylesheet" href="/css/homePage.css">
    <link rel="stylesheet" href="./includes/header.css">
    
    <style>
    .formu{
        max-width:50%;
        margin: 0 auto;
    }
    .contenedor {
        display: flex;
        justify-content: center;
    }
    .error {color: #FF0000;
    }
    </style>
</head>
<body >
    <!--HEADER-->
    <?php include("./includes/header.php")?>
    <br>
    <br>

    <!--Cuerpo-->
    <!--<div class="formu border border-warning rounded-lg" >
        <div class="formu">
            <h2>Resgístrate</h2>            
        </div>-->

        <!--Formulario-->
        <!--<div id="formulario">
            <form action="registrosCheck.php" class="contenedor" method="post">
                <div id="formdatos" class="form-group"> 
                    <label for="correo">Correo:</label><br>
                    <input type="text" id="correo" name="email" required><br>                  
                    <label for="pass">Contraseña:</label><br>
                    <small class="text-muted">Debe contener al menos una mayúscula, una minúscula y un número. Mínimo 6 caracteres</small>
                    <input type="password" id="pass1" name="pass" pattern="(?=.*\d)(?=.*[A-Z]).{6,}" required><br>
                    <label for="pass">Repite la contraseña:</label><br>
                    <input type="password" id="pass2" name="passC" pattern="(?=.*\d)(?=.*[A-Z]).{6,}" required><br><br>
                    <input type="submit" value="Aceptar" class="btn btn-warning my-2 my-sm-0">
                </div>
            </form>
        </div>
    </div>-->

    <?php
        $emailErr = $passwordErr = $password2Err = "";
        $email = $password = $password2 = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["email"])) {
                $emailErr = "Correo es requerido";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "El formato de correo no es válido";
                }
            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <div class="formu border border-warning rounded-lg">
        <div class="formu">
            <h2>Regístrate</h2>
        </div>

        <div id="formulario">
            <span class="error">* campo requerido</span>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    Correo: <br><input type="text" name="email" value="<?php echo $email;?>" required>
                    <span class="error">* <?php echo $emailErr;?></span>
                    <br><br>

                    Contraseña: <br><input type="password" name="password" pattern="(?=.*\d)(?=.*[A-Z]).{6,}" value="<?php echo $password;?>" required>
                    <span class="error">* <?php echo $passwordErr;?></span>
                    <br><br>

                    Confirma contraseña: <br><input type="password" name="password2" pattern="(?=.*\d)(?=.*[A-Z]).{6,}" value="<?php echo $password2;?>" required>
                    <span class="error">* <?php echo $password2Err;?></span>
                    <br><br>
                    <input type="submit" name="submit" value="Aceptar" class="btn btn-warning my-2 my-sm-0">
                </div>
            </form>
        </div>
        
    </div>

    



    <!--Footer-->
    <br>
    <br>
    <?php include("./includes/footer.php")?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>