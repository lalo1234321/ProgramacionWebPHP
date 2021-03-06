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
			session_start();
			$tipoDeRol = $_SESSION["info"]["rol"];
			//echo $tipoDeRol;
        	require_once 'includes/header.php';
        ?>
	

	<!-- Carousel -->
	<div class="content">
    
		<div class="container">
		  <!-- <h2 class="my-5 text-center">Carousel #8</h2> -->
	    
		  <div class="d-flex carousel-nav">

			<a href="#" class="col active">Lectura</a>
		    	<?php
				?>
				<?php if( $tipoDeRol == "escritor" )  {?>
					<a href="#" class="col">Creaci??n</a>
				<?php
			}?>
		    	
			
			<?php
				?>
				<?php if( $tipoDeRol == "escritor" )  {?>
					<a href="#" class="col">Edici??n</a>
				<?php
			}?>
			
			<?php
				?>
				<?php if( $tipoDeRol == "escritor" )  {?>
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
					<a class="category d-block mb-4" href="#">Leer un art??culo</a>
					<h2><a data-toggle="modal" data-target="#exampleModal">Encuentra un art??culo de tu inter??s</a></h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fuga optio dolorem, fugit voluptates sint ducimus praesentium iste!</p> -->
				</div>
			</div> <!-- .item -->	

		  	<?php
				if( $tipoDeRol == "escritor" ) {?>
					<div class="media-29101 d-md-flex w-100">
						<div class="img">
							<img src="https://odontosistemas.files.wordpress.com/2013/04/lectura.jpg" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<a class="category d-block mb-4" href="#">Crear un nuevo art??culo</a>
							<h2><a data-toggle="modal" data-target="#createModal">Crea un nuevo art??culo para que los dem??s usuarios puedan leerlo y opinar</a></h2>
							<!-- <p>Crea un nuevo art??culo para que los dem??s usuarios puedan leerlo y opinar</p> -->
						</div>
					</div> <!-- .item -->
				<?php }
				?>	
			
			
			<?php
				if( $tipoDeRol == "escritor" ) {?>
					<div class="media-29101 d-md-flex w-100">
						<div class="img">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlZJyJncMTFCu7hor7Eeo3iVO80nmEcTl-NA&usqp=CAU" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<a class="category d-block mb-4" href="#">Editar un art??culo</a>
							<h2><a data-toggle="modal" data-target="#editModal">Selecciona esta opci??n si deseas editar un art??culo publicado por t??</a></h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fuga optio dolorem, fugit voluptates sint ducimus praesentium iste!</p> -->
						</div>
					</div> <!-- .item -->
				<?php }
				?>			
		    
	    
		    	<?php
				if( $tipoDeRol == "escritor" ) {?>
					<div class="media-29101 d-md-flex w-100">
						<div class="img">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWrxg5QHovPGKMe_PMicz3hqi1gwHi-bo5FQ&usqp=CAU" alt="Image" class="img-fluid" style = "height:370">
						</div>
						<div class="text">
							<a class="category d-block mb-4" href="#">Eliminar un art??culo</a>
							<h2><a data-toggle="modal" data-target="#deleteModal">Selecciona esta opci??n para eliminar uno de los art??culos que publicaste</a></h2>
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
                <h5 class="modal-title" id="exampleModalLabel">B??squeda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form action="Articulos/escritores.php" >
					<div class="form-group">
						<label for="">Haga click en el bot??n para leer art??culos sin filtros</label>
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
                        <label for="exampleFormControlSelect1">Selecciona una d??cada</label>
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
                        <label for="exampleFormControlSelect1">Selecciona una ??rea de la f??sica</label>
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

		<!-- Modal creacion -->
	<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear un nuevo art??culo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				
                <form action="createArticle.php" method="post">
                    <div class="form-group">
			
                        <label for="exampleFormControlSelect1">Seleccione una d??cada</label>
                        <select class="form-control" id="decadaSeleccionada" name = "decada">
                            
                                <option >40</option>
								<option >50</option>
								<option >60</option>
								<option >70</option>
								<option >80</option>
								<option >90</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Escriba el ??rea de la f??sica</label>
                        <input type="text" value = "??ptica" name = "subcat">
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlSelect1">Escriba el contenido del art??culo</label>
                        <textarea name="articleContent" rows="10" cols="40">Escribe aqu?? tu contenido</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" >Crear</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

		<!-- Modal edicion -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edita un articulo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				
                <form action="update.php" method="post">
                    <div class="form-group">
			
                        <label for="exampleFormControlSelect1">Escriba el id de su art??culo</label>
                        <div class="form-group">
						
						<input type='text' name="id_articulo" 
							id='articleId' class='form-control'
							placeholder='Ingrese el id de su art??culo'
							onkeyup="fillFields(this.value)" value="">
					</div>
                    </div>
					<div class="form-group">
			
                        <label for="exampleFormControlSelect1">Seleccione una d??cada</label>
                        <select class="form-control" id="decadaSeleccionada" name = "decada">
                            
                                <option >40</option>
								<option >50</option>
								<option >60</option>
								<option >70</option>
								<option >80</option>
								<option >90</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Escriba el ??rea de la f??sica</label>
                        <input type="text" value = "" name = "subcat" id = "subCategoria1">
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlSelect1">Escriba el contenido del art??culo</label>
                        <textarea id = "content1" name="articleContent" rows="10" cols="40"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" >Editar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

        		<!-- Modal eliminar -->
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Elimine un articulo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				
                <form action="delete.php" method="post">
                    <div class="form-group">
					<label for="exampleFormControlSelect1">Selecciones el id del articulo a  eliminar</label>
						<select class="form-control" id="idArticuloSeleccionado" name = "idArticle">
                            <?php
							include "conexionBase.php";
							session_start();
							$idUsuario = $_SESSION["id_usuario"];
                            $sql = "SELECT * from articulos where id_Escritor = $idUsuario";
                            $result = mysqli_query($db, $sql);
                            while ($hola = mysqli_fetch_array($result)) { ?>
                                <option ><?php echo $hola["id_Articulo"] ?></option>
                            <?php } ?>
                        </select>
                        
                        <div class="form-group">
						
						
					</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" >Eliminar</button>
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
		$('#createModal').on('show.bs.modal', function (event) {
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
		$('#editModal').on('show.bs.modal', function (event) {
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
		$('#deleteModal').on('show.bs.modal', function (event) {
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
		function fillFields(str) {
            if (str.length == 0) {
				//console.log("eNTR??");
                document.getElementById("decadaSeleccionada").value = "";
                document.getElementById("subCategoria1").value = "";
				document.getElementById("content").value = "";
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        // Returns the response data as a
                        // string and store this array in
                        // a variable assign the value 
                        // received to first name input field
                          
                        document.getElementById
                            ("subCategoria1").value = myObj[0];
                          
                        // Assign the value received to
                        // last name input field

                        document.getElementById("content1").value = myObj[1];
                    }
                };
  
                // xhttp.open("GET", "filename", true);
				console.log(str)
                xmlhttp.open("GET", "getEditData.php?id_usuario="+str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }

		
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