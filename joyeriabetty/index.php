<?php

session_start();

include_once('modulos/enrutador.php');
include_once('modulos/controladorEmpleado.php');
include_once('modulos/controladorProducto.php');
include_once('modulos/controladorCliente.php');

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Joyería Betty</title>
    <link rel="icon" href="img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php if (@$_SESSION['validada'] == "SI") { ?>
    <!--inicio del header-->
        <header class="main_menu home_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand"> <img src="img/logotipo.png" alt="logotipo"  align="right" style="max-width: 80%;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer; ">
                                    Clientes
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="?cargar=registrarClientes">Registrar</a>
                                        <a class="dropdown-item" href="?cargar=consultarClientes">Consultar</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer; ">
                                        Productos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="?cargar=registrarProductos">Registrar</a>
                                        <a class="dropdown-item" href="?cargar=consultarProductos">Consultar</a>
                                    </div>
                                </li>                            
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer; ">
                                        Empleados
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="?cargar=registrarEmpleados">Registrar</a>
                                        <a class="dropdown-item" href="?cargar=consultarEmpleados">Consultar</a>
                                    </div>                                
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="?cargar=cerrar">Cerrar sesión</a>
                                </li>
                            </ul>
                        </div>                        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <?php } ?>
    <!-- fin del header-->

    <!-- inicio del body-->
    <section>
        <?php
            $enrutador = new enrutador();
            if($enrutador->validarGet(@$_GET['cargar'])) {
                $enrutador->cargarVista($_GET['cargar']);
            }
        ?>
    </section>
    <!--fin del body-->
   
    <!-- inicio del footer-->
    <?php if (@$_SESSION['validada'] == "SI") { ?>
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_1">
                        <div class="contact_info">
                            <h4>Acerca de</h4>
                            <p>La joyería de acero inoxidable Betty puede atenderlos en horarios de: 9:00 a.m. a 10:00 p.m.</p>
                            <p>Los dias de Lunes a Sabado</p>                                                    
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Sucursales</h4>
                        <div class="contact_info">
                            <p><span> Ocosingo: </span>5ta Avenida Nro 12, Barrio Aeropuerto</p>
                                <p>Telefono: 9191030542</p>
                            <p><span> San cristóbal: </span> 8va avenida nro 22, Barrio Las mercedes</p>
                            <p>Telefono: 9671284672</p>
                            <p><span> Comitán: </span> 2da avenida nro 53, Barrio Carlos Pelliser</p>
                            <p>Telefono: 9611728342</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-md-6">
                    <div class="single-footer-widget footer_3">
                        <h4>Sugerencias</h4>
                        <p>Escribanos sus sugerencias sobre como podemos mejorar nuestro servicio</p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Escribe un mensaje'>
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- fin del footer-->
    <?php } ?>
    
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>