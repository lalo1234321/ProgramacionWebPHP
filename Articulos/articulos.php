<?php
$id_Escritor = $_GET['id'];
$servidor = "localhost";
$usuario = "root";
$contra = "";
$bdnom = "examenu5";
$bd = mysqli_connect($servidor, $usuario, $contra, $bdnom);

if (!$bd) {
    die("La conexión falló: " . mysqli_connect_error());
} else {
    mysqli_query($bd, "SET NAMES 'UTF8'");
}

$query = mysqli_query($bd, "SELECT * FROM articulos where id_escritor = $id_Escritor");

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./estilos2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="includes/header.css">
    

</head>

<body>
    <?php
    require_once '../includes/header.php';
    ?>
    <div class="container2" style="background-color: lightblue;">
        <div class="card-content2" style="display:none;">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query)) {

            ?>
                <a style="text-decoration: none;">
                    <div class="card2">

                        <div class="card-info2">
                            <h3 style="color: blue">Categoría:</h3> <h3> <?php echo $row['Categoria']; ?></h3>
                            <h3 style="color: blue">Subcategoría: </h3> <h3> <?php echo $row['Subcategoria']; ?></h3>
                            <h3 style="color: blue">Década: </h3> <h3> <?php echo $row['decada']; ?></h3>
                            <h3 style="color: blue">Fecha: </h3> <h3> <?php echo $row['Fecha']; ?></h3>
                            <h3 style="color: blue">Lugar: </h3> <h3> <?php echo $row['Lugar']; ?></h3>
                            <h3 style="color: blue">Autor: </h3> <h3> <?php echo $row['Autor']; ?></h3>
                            <h3 style="color: blue">Notas de relevancia: </h3> <h3> <?php echo $row['Contenido']; ?></h3>
                            <h3 style="color: blue">Premio: </h3> <h3> <?php echo $row['Premio']; ?></h3>
                        </div>
                </a>
        </div>

    <?php
                echo "<br>";
            }
    ?>
    </div>
    </div>

    <div class="pagination2">
        <!--<li class="page-item previous-page disable"><a href="#" class="page-link">Prev</a></li>
            <li class="page-item current-page acttive"><a href="#" class="page-link">1</a></li>
            <li class="page-item dots"><a href="#" class="page-link">...</a></li>
            <li class="page-item current-page"><a href="#" class="page-link">5</a></li>
            <li class="page-item current-page"><a href="#" class="page-link">6</a></li>
            <li class="page-item current-page"><a href="#" class="page-link">10</a></li>
            <li class="page-item next-page"><a href="#" class="page-link">Next</a></li>-->
    </div>
    </div>

    <script type="text/javascript">
        function getPageList(totalPages, page, maxLength) {
            function range(start, end) {
                return Array.from(Array(end - start + 1), (_, i) => i + start);
            }
            var sideWidth = maxLength < 9 ? 1 : 2;
            var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
            var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

            if (totalPages <= maxLength) {
                return range(1, totalPages);
            }

            if (page <= maxLength - sideWidth - 1 - rightWidth) {
                return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
            }

            if (page >= totalPages - sideWidth - 1 - rightWidth) {
                return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
            }
            return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
        }

        $(function() {
            var numberOfItems = $(".card-content2 .card2").length;
            var limitPerPage = 2; //limite de items por pagina
            var totalPages = Math.ceil(numberOfItems / limitPerPage);
            var paginationSize = 7; //elementos de pagina visibles en la paginacion
            var currentPage;

            function showPage(whichPage) {
                if (whichPage < 1 || whichPage > totalPages) return false;

                currentPage = whichPage;

                $(".card-content2 .card2").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

                $(".pagination2 li").slice(1, -1).remove();

                getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                    $("<li>").addClass("page-item").addClass(item ? "current-page2" : "dots2")
                        .toggleClass("active2", item === currentPage).append($("<a>").addClass("page-link")
                            .attr({
                                href: "javascript:void(0)"
                            }).text(item || "...")).insertBefore(".next-page2");
                });

                $(".previous-page2").toggleClass("disable2", currentPage === 1);
                $(".next-page2").toggleClass("disable2", currentPage === totalPages);
                return true;
            }

            $(".pagination2").append(
                $("<li>").addClass("page-item").addClass("previous-page2").append($("<a>").addClass("page-link").attr({
                    href: "javascript:void(0)"
                }).text("Prev")),
                $("<li>").addClass("page-item").addClass("next-page2").append($("<a>").addClass("page-link").attr({
                    href: "javascript:void(0)"
                }).text("Next"))
            );

            $(".card-content2").show();
            showPage(1);

            $(document).on("click", ".pagination2 li.current-page2:not(.active2)", function() {
                return showPage(+$(this).text());
            });

            $(".next-page2").on("click", function() {
                return showPage(currentPage + 1);
            });

            $(".previous-page2").on("click", function() {
                return showPage(currentPage - 1);
            });
        });
    </script>
    <?php
   // require_once '../includes/footer.php';
    ?>

</body>

</html>