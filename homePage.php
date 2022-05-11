<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./includes/header.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">

    

    	<link rel="stylesheet" href="fonts/icomoon/style.css">

    	<link rel="stylesheet" href="css/owl.carousel.min.css">

    	<link rel="stylesheet" href="css/animate.css">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<title>Document</title>

</head>
<body>
        <?php
        	require_once 'includes/header.php';
		$tipoDeRol = "admin";	
        ?>
	

	<!-- Carousel -->
	<div class="content">
    
		<div class="container">
		  <!-- <h2 class="my-5 text-center">Carousel #8</h2> -->
	    
		  <div class="d-flex carousel-nav">

			<a href="#" class="col active">Lectura</a>
		    	<?php
				?>
				<?php if( $tipoDeRol == "admin" )  {?>
					<a href="#" class="col">Creación</a>
				<?php
			}?>
		    	
			
			<?php
				?>
				<?php if( $tipoDeRol == "admin" )  {?>
					<a href="#" class="col">Edición</a>
				<?php
			}?>
			
			<?php
				?>
				<?php if( $tipoDeRol == "admin" )  {?>
					<a href="#" class="col">Eliminar</a>
				<?php
			}?>
			
		  </div>
	    
	    
		  <div class="owl-carousel owl-1">
			
			<div class="media-29101 d-md-flex w-100">
				<div class="img">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiMef-5G8mhSHsIYYgzvwrufNr3qTvvu88eQ&usqp=CAU" alt="Image" class="img-fluid">
				</div>
				<div class="text">
					<a class="category d-block mb-4" href="#">Leer un artículo</a>
					<h2><a data-toggle="modal" data-target="#exampleModal">Encuentra un artículo de tu interés</a></h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fuga optio dolorem, fugit voluptates sint ducimus praesentium iste!</p> -->
				</div>
			</div> <!-- .item -->	

		  	<?php
				if( $tipoDeRol == "admin" ) {?>
					<div class="media-29101 d-md-flex w-100">
						<div class="img">
							<img src="https://odontosistemas.files.wordpress.com/2013/04/lectura.jpg" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<a class="category d-block mb-4" href="#">Crear un nuevo artículo</a>
							<h2><a href="#">Crea un nuevo artículo para que los demás usuarios puedan leerlo y opinar</a></h2>
							<!-- <p>Crea un nuevo artículo para que los demás usuarios puedan leerlo y opinar</p> -->
						</div>
					</div> <!-- .item -->
				<?php }
				?>	
			
			
			<?php
				if( $tipoDeRol == "admin" ) {?>
					<div class="media-29101 d-md-flex w-100">
						<div class="img">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlZJyJncMTFCu7hor7Eeo3iVO80nmEcTl-NA&usqp=CAU" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<a class="category d-block mb-4" href="#">Editar un artículo</a>
							<h2><a href="#">Selecciona esta opción si deseas editar un artículo publicado por tí</a></h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fuga optio dolorem, fugit voluptates sint ducimus praesentium iste!</p> -->
						</div>
					</div> <!-- .item -->
				<?php }
				?>			
		    
	    
		    	<?php
				if( $tipoDeRol == "admin" ) {?>
					<div class="media-29101 d-md-flex w-100">
						<div class="img">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWrxg5QHovPGKMe_PMicz3hqi1gwHi-bo5FQ&usqp=CAU" alt="Image" class="img-fluid" style = "height:370">
						</div>
						<div class="text">
							<a class="category d-block mb-4" href="#">Eliminar un artículo</a>
							<h2><a href="#">Selecciona esta opción para eliminar uno de los artículos que publicaste</a></h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fuga optio dolorem, fugit voluptates sint ducimus praesentium iste!</p> -->
						</div>
					</div> <!-- .item -->	
				<?php }
				?>
		    
		    
		    
		  	</div>
		</div>
	</div>
	
	
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Búsqueda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form action="Articulos/escritores.php" >
					<div class="form-group">
						<label for="">Haga click en el botón para leer artículos sin filtros</label>
						<br>
						<input type="submit" value="Consultar">
					</div>
				</form>
                <form action="articulosPorFiltro.php" method="post">
                    <div class="form-group">
						<div style="text-align: center">
						<label for="" >o</label>
						</div>
						
						<br>
                        <label for="exampleFormControlSelect1">Selecciona una década</label>
                        <select class="form-control" id="decadaSeleccionada" name = "decada">
                            <?php
                            include "conexionBase.php";
                            $sql = "SELECT distinct decada from articulos";
                            $result = mysqli_query($db, $sql);

                            while ($hola = mysqli_fetch_array($result)) { ?>
                                <option ><?php echo $hola["decada"] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Selecciona una área de la física</label>
                        <select class="form-control" id="subcategoriaSeleccionada" name = "subcat">
                            <?php
                            include "conexionBase.php";
                            $sql = "SELECT distinct Subcategoria from articulos";
                            $result = mysqli_query($db, $sql);
                            while ($hola = mysqli_fetch_array($result)) { ?>
                                <option ><?php echo $hola["Subcategoria"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" onclick="obtainFilter()">Buscar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


		<script>
		$('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                //var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                //var array = recipient.split(',');
                var modal = $(this)
                // modal.find('.modal-title').text('Editar el producto: ' + array[0])
                // modal.find('.modal-body input.idProd').val(array[0])
                // modal.find('.modal-body input.nombre').val(array[1])
                // modal.find('.modal-body input.descripcion').val(array[2])
                // modal.find('.modal-body input.precio').val(array[3])

		});

		
		let obtainFilter = () => {
			let subcategoria = $( "#subcategoriaSeleccionada option:selected" ).text();
			let decada = $( "#decadaSeleccionada option:selected" ).text();
			console.log(subcategoria +'   ' +  decada);
		}
	</script>
	<div style = "padding-bottom: 200px"></div>				
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	<?php
        require_once 'includes/footer.php';
        ?>
	

</body>
</html>