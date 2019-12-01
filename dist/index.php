<?php
require_once ("class/class.Menu.php");
$menu = new Menu();
if (isset($_GET['menu'])){
    $id = $menu->get_menu($_GET['menu']);
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>ESE Hospital San Antonio - Betania</title>
        <meta name="author" content="Juan Fernando Ramirez Velez">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
        <meta name="description" content="Página Oficial de la Empresa Social del Estado Hospital San Antonio del Municipio de Betania en el Suroeste de Antioquia" />

        <!-- FAVICON -->

        <link rel="icon" href="Favicon.png" type="image/png"/>

        <!-- CSS -->

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/colorbox.css" />
        <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- JAVASCRIPT -->

        <script src="https://code.jquery.com/jquery.js"></script>
    </head>
    <body>
        <h1 class="offscreen">Hospital San Antonio - Betania</h1>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <h2 class="offscreen">Menú Principal</h2>
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                     <a class="navbar-brand" href="index.php" alt="Inicio">
                                        <img src="img/Logo2.jpg" alt="Hospital San Antonio - Betania">
                                    </a>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-vertical-align navbar-right">
                                        <li><a href="index.php">INICIO</a></li>
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NUESTRA ENTIDAD <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="?menu=1">Estructura Organizacional</a></li>
                                                <li><a href="?menu=3">Reseña Histórica</a></li>
                                                <li><a href="?menu=24">Donde Estamos</a></li>
                                                <li><a href="?menu=28">Empleados y Contratistas</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">NUESTROS SERVICIOS <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="?menu=5">Consulta Externa</a></li>
                                                <li><a href="?menu=6">Odontología</a></li>
                                                <li><a href="?menu=7">Hospitalización</a></li>
                                                <li><a href="?menu=8">Urgencias</a></li>
                                                <li><a href="?menu=9">Laboratorio</a></li>
                                                <li><a href="?menu=10">Rayos X</a></li>
                                                <li><a href="?menu=11">Promoción y Prevención</a></li>
                                                <li><a href="?menu=12">Vacunación</a></li>
                                                <li><a href="?menu=13">Higiene Oral</a></li>
                                                <li><a href="?menu=14">Farmacia</a></li>
                                                <li><a href="?menu=15">Transporte Asistencial Básico</a></li>
                                                <li><a href="?menu=16">Atención al Usuario</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">GESTIÓN <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="?menu=4">Planes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>

            <!-- Contenido Principal -->

            <?php

                if (!empty($_GET["menu"]))
                {
                    for ($i=0;$i<sizeof($id);$i++)
                    {
                    include ($id["$i"]["html"].".php");
                    }
                }
                else
                {
                    include ("inicio.php");
                }
            ?>
        <footer>
            <div class="container">

                <div class="row">

                    <!-- El Hospital -->

                    <div class="col-lg-4 col-sm-3 col-md-3 col-xs-6">
                        <div class="col">
                            <h4>El Hospital</h4>
                            <ul>
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="?menu=1">Estructura Organizacional</a></li>
                                <li><a href="?menu=3">Reseña Histórica</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Servicios -->

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-6">
                        <div class="col">
                            <h4>Servicios</h4>
                            <ul>
                                <li><a href="?menu=5">Consulta Externa</a></li>
                                <li><a href="?menu=6">Odontología</a></li>
                                <li><a href="?menu=7">Hospitalización</a></li>
                                <li><a href="?menu=8">Urgencias</a></li>
                                <li><a href="?menu=9">Laboratorio</a></li>
                                <li><a href="?menu=10">Rayos X</a></li>
                                <li><a href="?menu=11">Promoción y Prevención</a></li>
                                <li><a href="?menu=12">Vacunación</a></li>
                                <li><a href="?menu=13">Higiene Oral</a></li>
                                <li><a href="?menu=14">Farmacia</a></li>
                                <li><a href="?menu=15">Transporte Asistencial Básico</a></li>
                                <li><a href="?menu=16">Atención al Usuario</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contacto -->

                    <div class="col-lg-4 col-lg-offset-0 col-sm-5 col-sm-offset-0 col-md-5 col-xs-12 col-xs-offset-2">
                        <h4>Contacto</h4>
                        <address>
                            <i class="fa fa-home"></i>&nbsp;&nbsp;<strong>Dirección:</strong>&nbsp;&nbsp;Calle 20 # 26 - 173 Betania - Antioquia<br>
                            <i class="fa fa-phone"></i>&nbsp;&nbsp;<strong>Teléfonos:</strong>&nbsp;&nbsp;843 50 50 - 843 50 44 - 843 54 35   <br>
                            <i class="fa fa-print"></i>&nbsp;&nbsp;<strong>Fax:</strong>&nbsp;&nbsp;843 50 50 Ext 104 <br>
                            <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong>E-Mail:</strong>&nbsp;&nbsp;betahs01@gmail.com

                            <p><a href="?menu=22" class="btn btn-primary btn-xs"><i class="fa fa-comment-o"></i>&nbsp; Comuníquese con Nosotros</a></p>

                        </address>
                    </div>

                </div>

                <hr>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
                        <a href="index.php">2016 &copy; Hospital San Antonio - Betania Antioquia</a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
                        <p class="text-right">Diseñado Por: Juan Fernando Ramírez Vélez</p>
                    </div>
                </div>
            </div>
        </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- JQuery Para Colorbox -->
    <!--<script src="js/jquery.colorbox.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap3.1.1.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script src="js/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
    <!--<script src="js/functions.js"></script>-->
    <script src="js/bundle.js"></script>

    </body>
</html>
