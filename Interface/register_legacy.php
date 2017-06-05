<!DOCTYPE html>
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
    <link href="signin.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">
        <div class="row center-block text-center">
            <div class="invisible col-lg-4 col-md-4 col-sm-4">truques e dicas</div>
            <div class="col-lg-4 col-md-4 col-sm-4">

      <form class="form-register" id="registerForm" action="components/register_control.php" method="post" role="form">

          <br><br><h2 class="form-signin-heading">WikiLiving Register</h2><br>

          <!--<label for="inputUsername" class="sr-only">Username</label>-->

          <input type="text" name="inputUsername" id="inputUsername" class="form-control" placeholder="username" required autofocus> <br>

          <!--<label for="inputPassword" class="sr-only">Password</label>-->

          <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="inputPassword" required> <br>

          <!--<label for="confirmPassword" class="sr-only">Confirm Password</label>-->

          <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" name="confirmPassword" required><br>

          <!--<label for="email" class="sr-only">Email</label>-->

          <input type="email" id="email" class="form-control" placeholder="Your email here" name="email" required> <br>

          <input type="submit" tabindex="7" class=" btn btn-lg btn-primary btn-block" value="Register Now">
          <a  class="text-center" href="index.html">Voltar Atrás</a>

      </form>
                <div class="invisible col-lg-4 col-md-4 col-sm-4">truques e dicas
            </div>

            </div>
        </div>
    </div> <!-- /container -->

  </body>
</html>