<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sitio Web</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="includes/header.css">
    <!--<link rel="stylesheet" href="includes/footer.css">-->
    <link rel="stylesheet" href="css/homePage.css">
    
    
   <style>
    .formu{
        max-width:40%;
        margin: 0 auto;
    }

    .contenedor {
                  
        display: flex;
        justify-content: center;
    }

    </style>
    
</head>

<body >
    <!--HEADER-->
    <?php include("./includes/header.php")?>
    <br>
    <br>

    <div>

    </div>
    <div class="formu border border-warning rounded-lg">
        <div class="formu">
            <h1>Crear cuenta</h1>
            <h6 class="text-muted">Ya tengo una cuenta? <u><a href="login.php" class="text-muted">Iniciar sesion</a> </u></h6>

        </div>

        <!--Formulario-->
        <div id="formulario">

            <form action="registerCheck.php" class="contenedor" method = "post">

                <div id="formdatos" class="form-group">

                    <label for="correo">Correo:</label><br>
                    <input type="text" id="correo" name="correo" required><br>
                    <label for="pass">Contraseña:</label><br>
                    <input type="password" id="pass" name="pass" pattern="(?=.*\d)(?=.*[A-Z]).{4,}" required><br>

                </div>

                <div id="formrol" class="form-check">

                    <label>Elige un rol:</label><br>
                    <input type="radio" id="escritor" name="rol" value="escritor">
                    <label for="escritor">escritor</label><br>
                    <input type="radio" id="lector" name="rol" value="lector" checked>
                    <label for="vehicle2">lector </label><br>
                    <input type="submit" value="Submit" class="btn btn-warning my-2 my-sm-0">

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
