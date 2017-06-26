<<<<<<< HEAD
<<<<<<< Updated upstream
<?php session_start();?>
=======
<?php
session_start();
require_once '../Interface/components/connection.php';
require_once '../Interface/components/generalControl.php';

listPlants();

global $plantList;

?>
>>>>>>> Stashed changes
=======
<?php session_start();

require_once "components/generalControl.php";

listPlants();

?>
>>>>>>> working

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
  <div>

  <!-- Navigation -->
      <?php include "components/navbar.php";?>

  <!-- Page Content -->
      <div style="margin-top: 8rem;"></div>
    <div class="row ">

        
            <?php include "components/carousel.php";?>


    </div>

      <div class="sm-spacer120"></div>

      <div class="row well-index text-black">

          <?php

          for ($i = 0; $i < 3; $i++) {?>

<<<<<<< Updated upstream
          <div style="margin-left:50px;" class="col-lg-3 col-md-3 col-sm-3 well text-black">é para por sinopses de artigos</div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-sm-offset-1 well text-black"><?=$plantList[1]['nome_planta']?></div>

<<<<<<< HEAD
          <div class="col-lg-3 col-md-3 col-sm-3 col-sm-offset-1 well text-black"></div>
=======
          <div class="col-sm-3 col-sm-offset-1 well subs"><?=$plantList[$i]['subtitulo_planta']?></div>

          <?php } ?>
>>>>>>> Stashed changes
=======
          <div class="col-lg-3 col-md-3 col-sm-3 col-sm-offset-1 well text-black">
        <?=$plantList[1]['subtitulo_planta']?>
          </div>
>>>>>>> working

      </div>



<div class="sm-spacer15"></div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="dist/assets/js/ie10-viewport-bug-workaround.js"></script>

  </div>


  <!-- /.container -->

  <!-- jQuery -->
  <script src="dist/js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="dist/js/bootstrap.min.js"></script>
  <script src="dist/js/grayscale.min.js"></script>

  </body>



</html>
