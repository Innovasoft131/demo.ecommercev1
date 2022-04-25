<?php
session_start();

// mantener la ruta fija de la ecommerce
$url =  Ruta::ctrRuta();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="<?php echo $url; ?>vistas/img/plantilla/invo.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FERXO STYLE</title>

    <!-- PLUGINS DE CSS -->
    <!-- Fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/libs/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/libs/fontawesome/css/brands.css">
    <link rel="stylesheet" href="vistas/libs/fontawesome/css/solid.css">
    <!-- Estilos de toda la aplicación web -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/plantilla.css">
    <!-- Estilos del menú -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/menu.css">
    <!-- Estilos del inicio -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/inicio.css">
    <!-- Estilos del pie -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/pie.css">
    <!-- Estilos del login -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/login.css">
    <!-- Estilos de productos -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/productos.css">
    <!-- Estilos de detalle de producto -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/detalle-productos.css">
    <!-- Estilos de carrito de compras -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/carrito.css">
    <!-- Estilos de Paginación -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/pagination.css">
    <!-- Estilos de Cotización -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/dist/css/cotizacion.css">

    <!-- PLUGINS DE JS -->
    <script src="<?php echo $url; ?>vistas/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo $url; ?>vistas/libs/fontawesome/js/fontawesome.js"></script>
    <script src="<?php echo $url; ?>vistas/libs/fontawesome/js/brands.js"></script>
    <script src="<?php echo $url; ?>vistas/libs/fontawesome/js/solid.js"></script>
    <script src="<?php echo $url; ?>vistas/libs/sweetalert2/sweetalert2.all.js"></script>
</head>
<body>

    <?php
    /*=============================================
        CONTENIDO DINÁMICO
    =============================================*/

    $rutas = array();
    $ruta = null;
    
    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
             
    ?>
    <div class="header">
        <div class="container">
           
        </div>
    </div>
    <?php
            if(isset($_GET["ruta"])){
                
                $rutas = explode("/", $_GET["ruta"]);
                $ruta = $rutas[0];
                
                if($rutas[0] == "productos" || $rutas[0] == "Perzonalizados"){
                    include "modulos/menu.php"; 
                    include "modulos/productos.php";
                    include "modulos/pie.php"; 
                }else if($rutas[0] == "inicio" || $rutas[0] == "salir" || $rutas[0] == "detalle-del-producto" || $rutas[0] == "carrito"  || $rutas[0] == "articulos-para-hombre" || $rutas[0] == "articulos-para-mujeres" || $rutas[0] == "articulos-para-ninios" || $rutas[0] == "articulos-personalizados" || $rutas[0] == "articulos-en-oferta" || $rutas[0] == "articulos-nuevos" || $rutas[0] == "cotizacion"){
                    
                    include "modulos/menu.php"; 
                    include "modulos/".$rutas[0].".php";
                    include "modulos/pie.php"; 
                }else if($rutas[0] == "login" ){
                    include "modulos/login.php"; 
                }
            }else{
                include "modulos/menu.php"; 
                include "modulos/inicio.php";
                include "modulos/pie.php"; 
            }
    }else{
            
            if(isset($_GET["ruta"])){
                
                $rutas = explode("/", $_GET["ruta"]);
                $ruta = $rutas[0];
                
                if($rutas[0] == "productos" || $rutas[0] == "Perzonalizados"){
                    include "modulos/menu.php"; 
                    include "modulos/productos.php";
                    include "modulos/pie.php"; 
                }else if($rutas[0] == "inicio" || $rutas[0] == "salir" || $rutas[0] == "detalle-del-producto" || $rutas[0] == "carrito"  || $rutas[0] == "articulos-para-hombre" || $rutas[0] == "articulos-para-mujeres" || $rutas[0] == "articulos-para-ninios" || $rutas[0] == "articulos-personalizados" || $rutas[0] == "articulos-en-oferta" || $rutas[0] == "articulos-nuevos" || $rutas[0] == "cotizacion" || $rutas[0] == "personalizados"){
                    
                    include "modulos/menu.php"; 
                    
                    include "modulos/".$rutas[0].".php";
                    include "modulos/pie.php"; 
                }else if($rutas[0] == "login" ){
                    include "modulos/login.php"; 
                }
            }else{
                include "modulos/menu.php"; 
                include "modulos/inicio.php";
                include "modulos/pie.php"; 
            }
            
    }
 ?>



    

    <script src="<?php echo $url; ?>vistas/dist/js/menu.js"></script>
    <script src="<?php echo $url; ?>vistas/js/inicio.js"></script>
    <script src="<?php echo $url; ?>vistas/dist/js/login.js"></script>
    <script src="<?php echo $url; ?>vistas/js/productos.js"></script>
</body>
</html>