<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD
<<<<<<< HEAD
<?php

session_start();

require_once "../components/connection.php";
require_once "../components/generalControl.php";

if (!isset($_SESSION["role"])) {

	die("User is not logged in");

}

if (!privilegeChecker(3, $_SESSION["username"])) {

	die ("You do not have the necessary permissions to view this page");

}

listUsers();
=======
>>>>>>> ca2793cfdf520773504417d28997c175101a5420
=======
>>>>>>> ca2793cfdf520773504417d28997c175101a5420

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wikiliving - Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Backoffice WikiLiving</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->

            <!-- /.dropdown -->

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Publicar um artigo</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris.js Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#artigos"><i class="fa fa-table fa-fw"></i> Ver artigos publicados</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-edit fa-fw"></i> Ver utilizadores</a>
                    </li>
                    <li>
                        <a href="#editArtigos"><i class="fa fa-edit fa-fw"></i> Editar artigos</a>
                    </li>
                </ul>




            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- parte para escrever artigo -->
        <div id="editor_texto">
            <div class="col-lg-8 col-md-8 col-sd-8">
                <h1 class="page-header">Publicar um artigo</h1>
                <form>
                    <div class="form-group">
                        <label>Nome do artigo</label><br>
                        <input class="form-control" type="text" placeholder="inserir texto aqui"><br>
                        <label>Nome do autor</label><br>
                        <input class="form-control" type="text" placeholder="inserir texto aqui"><br>
                        <label>Corpo do artigo</label><br>
                        <textarea class="form-control" rows="40"></textarea><br>
                        <button type="submit" class="btn btn-default">Publicar</button><br>
                    </div>

                </form>
            </div>

            <hr>

            <!-- ver artigos -->
            <div id="ver_tópicos">
                <div class="col-lg-8 col-md-8 col-sd-8">

                    <h1 class="page-header">Ver artigos publicados</h1>
                    <div class="row">
                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>
                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>

                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>
                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>

                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>
                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>

                        <div class="visible-lg-inline-block col-lg-4 col-md-4 col-sm-4 text-center ">
                            <img src="../img/doge.bmp"><br>
                            <label class="">tomate</label>
                        </div>

                    </div>
                </div>


            </div>
            <!-- listagem de utilizadores -->






            <!-- listagem de utilizadores -->






            <!-- editar artigos -->

            <div class="col-lg-8 col-md-8 col-sd-8">
                <h1 class="page-header">Editar artigo x</h1>
                <form>
                    <div class="form-group">
                        <label>Nome do artigo</label><br>
                        <input class="form-control" type="text" placeholder="inserir texto aqui"><br>
                        <label>Nome do autor</label><br>
                        <input class="form-control" type="text" placeholder="inserir texto aqui"><br>
                        <label>Corpo do artigo</label><br>
                        <textarea class="form-control" rows="40"></textarea><br>
                        <button type="submit" class="btn btn-default">Publicar</button><br>
                    </div>

                </form>
            </div>




            <!-- editar artigos -->








            <!-- ver artigos -->


        </div>


    </div>
    <!-- /#page-wrapper -->

</div>


    <!-- jQuery -->
    <script src="../admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../admin/vendor/raphael/raphael.min.js"></script>
    <script src="../admin/vendor/morrisjs/morris.min.js"></script>
    <script src="../admin/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
