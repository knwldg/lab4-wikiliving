<?php

session_start();

if (isset($_SESSION['role'])){
  header('Location: ./index_log.php');}

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
  <div>

  <!-- Navigation -->
      <?php include "components/navbar.php";?>

  <!-- Page Content -->
      <div style="margin-top: 20rem;"></div>
    <div class="row ">
      <div class="col-lg-4 col-md-4 col-sm-4 invisible"></div>

      <div style="border-radius: 5px;" class="well-index col-lg-4 col-md-4 col-sm-4 text-center"><br>
        <img class="img-responsive img-rounded img-center" src="img/logo-011.png">
        <h3 class="notopacity form-inline" style="text-transform: none;!important; color: white;">Entra já na nossa comunidade!</h3><br>
        <p><a class="notopacity btn btn-lg btn-wiki" href="login.php" role="button">Log In</a> </p>
        <p><a class="notopacity btn btn-lg btn-wiki" href="register.php" role="button">Registar</a> </p>

      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 invisible"></div>

    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="dist/assets/js/ie10-viewport-bug-workaround.js"></script>

  </div>


  <!-- /.container -->

  <!-- jQuery -->
  <script src="dist/js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="dist/js/bootstrap.min.js"></script>
  <
  <script src="dist/js/grayscale.min.js"></script>

  </body>



</html>
