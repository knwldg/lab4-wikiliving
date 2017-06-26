<?php
session_start();
require_once '../Interface/components/connection.php';
require_once '../Interface/components/generalControl.php';

listPlants();

global $plantList;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wikiliving</title>

    <!-- Bootstrap Core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/round-about.css" rel="stylesheet">
    <link href="dist/css/off.css" rel="stylesheet">
    <link href="dist/css/grayscale.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>


<?php include "components/navbar.php";?>

<!-- Page Content -->
<div class="sm-spacer60"></div>

<div class="container-fluid">
    <div style="margin-top: 6rem;"></div>
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-sm-offset-4 well-index">
            <h1 class="text-center">Veja os nossos artigos</h1>
        </div>

    </div>

    <div class="sm-spacer30"></div>

    <!-- Projects Row -->
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-sm-offset-2 well ">
            <div>

                <?php


                for ($i = 0; $i < count($plantList); $i++) {

                    echo("
                    
                <div class=\"col-md-4 portfolio-item\">
                    <a href=\"artigo.php?id=".$plantList[$i]['id_plantas']."\">
                        <img class=\"img-responsive\" src=\"../Interface/img/".$plantList[$i]['id_plantas'].".png\" alt=\"\">
                    </a>
                    <h3>
                        <a href=\"artigo.php?id=".$plantList[$i]['id_plantas']."\">".$plantList[$i]['nome_planta']."</a>
                    </h3>
<<<<<<< HEAD
<<<<<<< Updated upstream
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
=======
                    <p class='subs2'>".$plantList[$i]['subtitulo_planta']."</p>
>>>>>>> Stashed changes
=======
                    <p>".$plantList[$i]['subtitulo_planta']."</p>
>>>>>>> working
                </div>
                    
                    ");

                }

                ?>

            </div>
        </div>
    </div>
    <!-- /.row -->



</div>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="dist/assets/js/ie10-viewport-bug-workaround.js"></script>




<!-- /.container -->

<!-- jQuery -->
<script src="dist/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="dist/js/bootstrap.min.js"></script>
<
<script src="dist/js/grayscale.min.js"></script>

</body>



</html>
