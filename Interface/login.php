<!DOCTYPE html>
<?php session_start()?>
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


<!-- Navigation -->
<?php include "components/navbar.php";?>

<!-- Page Content -->
<div style="margin-top: 15rem;"></div>

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 well-index">
            <h2 class="form-signin-heading text-center specialone" >Login</h2>
        </div>
        <div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 well2">

            <form class="form-signin" id="loginForm" action="components/login_control.php" method="post" role="form">

                <label for="inputUsername" class="sr-only">Username</label>

                <input type="text"  name="inputUsername" id="inputUsername" class="form-control form-control-wiki" placeholder="Username"  required autofocus>
                <div class="sm-spacer15"></div>

                <input type="password" id="inputPassword" class="form-control form-control-wiki" placeholder="Password" name="inputPassword" required>
                <div class="sm-spacer30"></div>
                <input type="submit" tabindex="3" style="background-color: #5cb85c; border-color:#5cb85c" class=" btn btn-lg btn-primary btn-block" value="Entrar">
                <a href="index.php">Voltar Atrás</a>

            </form>
        </div>
    </div>
</div>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="dist/assets/js/ie10-viewport-bug-workaround.js"></script>




<!-- /.container -->

<!-- jQuery -->
<script src="dist/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/grayscale.min.js"></script>

</body>



</html>
