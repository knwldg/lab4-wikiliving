<!DOCTYPE html>

<?php

session_start();

require_once "components/generalControl.php";

if (isset($_SESSION['role'])) {

	header('Location: index.html');

}

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="register.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-image: url('img/panda.jpg')">

    <div class="container">
    <div class="col-md-4 col-lg-4 col-sm-4 invisible "> olá</div>
    <div class="col-md-4 col-lg-4 col-sm-4">
      <form class="form-signin" id="loginForm" action="components/login_control.php" method="post" role="form">

          <br><br><br><br><h2 class="form-signin-heading text-center">WikiLiving Login</h2> <br>

          <label for="inputUsername" class="sr-only">Username</label>

          <input type="text" name="inputUsername" id="inputUsername" class="form-control" placeholder="Username"  required autofocus><p></p>

          <label for="inputPassword" class="sr-only">Password</label>

          <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="inputPassword" required>

          <div class="checkbox">
          <!-- Talvez adicionar no futuro?
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
          -->
        </div>

          <input type="submit" tabindex="4" class="form-control btn btn-lg btn-primary btn-block" value="Log In Now">

      </form>
    </div>

    </div> <!-- /container -->

  </body>
</html>
