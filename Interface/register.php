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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll">
                <i class="fa fa-play-circle"></i> <span class="light">Wiki</span> Living
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" style="text-transform: none;!important; href="#about">Plantas</a>
                </li>
                <li>
                    <a class="page-scroll" style="text-transform: none;!important; href="#download">Grupo</a>
                </li>
                <li>
                    <a class="page-scroll" style="text-transform: none;!important; href="#contact">Cenas</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<br><br><br>

<div class="container">


    <div class="row center-block text-center">
        <div class="invisible col-lg-4 col-md-4 col-sm-4">truques e dicas</div>
        <div class="col-lg-4 col-md-4 col-sm-4">

            <form class="form-register" id="registerForm" action="components/register_control.php" method="post" role="form">

                <br><br><div class="well-index" style="color: white"> <h2 class="form-signin-heading text-center">Do que estás à espera?</h2></div> <br>



                <input type="text" name="inputUsername" id="inputUsername" class="form-control form-control-wiki" placeholder="Username" required autofocus> <br>



                <input type="password" id="inputPassword" class="form-control form-control-wiki" placeholder="Password" name="inputPassword" required> <br>



                <input type="password" id="confirmPassword" class="form-control form-control-wiki" placeholder="Confirmar password" name="confirmPassword" required><br>



                <input type="email" id="email" class="form-control form-control-wiki" placeholder="Email" name="email" required> <br>

                <input type="submit" tabindex="7" style="background-color: #5cb85c; border-color:#5cb85c" class=" btn btn-lg btn-primary btn-block" value="Regista-te já!"><br>
                <a  style="color: white;" class="text-center" href="index.php">Voltar Atrás</a>

            </form>
            <div class="invisible col-lg-4 col-md-4 col-sm-4">truques e dicas
            </div>

        </div>
    </div>






    <div class="col-md-4 col-lg-4 col-sm-4 invisible "> olá</div>
    <div class="col-md-4 col-lg-4 col-sm-4">
        <form class="form-signin" id="loginForm" action="components/login_control.php" method="post" role="form">

            <br><br><div class="well-index"> <h2 class="form-signin-heading text-center">WikiLiving Login</h2></div> <br>

            <label for="inputUsername" class="sr-only">Username</label>

            <input type="text"  name="inputUsername" id="inputUsername" class="form-control form-control-wiki" placeholder="Username"  required autofocus><p></p>

            <label for="inputPassword" class="sr-only">Password</label>

            <input type="password" id="inputPassword" class="form-control form-control-wiki" placeholder="Password" name="inputPassword" required>

            <br><br>

            <input type="submit" tabindex="3" class="form-control-wiki btn-wiki2 btn-lg btn-primary-wiki btn-block" value="Log In Now">

        </form>
    </div>
</div>

<footer style="color: white" class="footer text-center">
    <p>&copy; 2016 Company, Inc.</p>
</footer>
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






<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
  <!--<head>-->
    <!--<meta charset="utf-8">-->
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--&lt;!&ndash; The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags &ndash;&gt;-->
    <!--<meta name="description" content="">-->
    <!--<meta name="author" content="">-->
    <!--<link rel="icon" href="../favicon.ico">-->

    <!--<title></title>-->

    <!--&lt;!&ndash; Bootstrap core CSS &ndash;&gt;-->
    <!--<link href="dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!--&lt;!&ndash; Custom styles for this template &ndash;&gt;-->
    <!--<link href="signin.css" rel="stylesheet">-->

    <!--&lt;!&ndash; HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries &ndash;&gt;-->
    <!--&lt;!&ndash;[if lt IE 9]>-->
      <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
      <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->
  <!--</head>-->

  <!--<body>-->

    <!--<div class="container">-->
        <!--<div class="row center-block text-center">-->
            <!--<div class="invisible col-lg-4 col-md-4 col-sm-4">truques e dicas</div>-->
            <!--<div class="col-lg-4 col-md-4 col-sm-4">-->

      <!--<form class="form-register" id="registerForm" action="components/register_control.php" method="post" role="form">-->

          <!--<br><br><h2 class="form-signin-heading">WikiLiving Register</h2><br>-->

          <!--&lt;!&ndash;<label for="inputUsername" class="sr-only">Username</label>&ndash;&gt;-->

          <!--<input type="text" name="inputUsername" id="inputUsername" class="form-control" placeholder="username" required autofocus> <br>-->

          <!--&lt;!&ndash;<label for="inputPassword" class="sr-only">Password</label>&ndash;&gt;-->

          <!--<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="inputPassword" required> <br>-->

          <!--&lt;!&ndash;<label for="confirmPassword" class="sr-only">Confirm Password</label>&ndash;&gt;-->

          <!--<input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" name="confirmPassword" required><br>-->

          <!--&lt;!&ndash;<label for="email" class="sr-only">Email</label>&ndash;&gt;-->

          <!--<input type="email" id="email" class="form-control" placeholder="Your email here" name="email" required> <br>-->

          <!--<input type="submit" tabindex="7" class=" btn btn-lg btn-primary btn-block" value="Register Now">-->
          <!--<a  class="text-center" href="index.php">Voltar Atrás</a>-->

      <!--</form>-->
                <!--<div class="invisible col-lg-4 col-md-4 col-sm-4">truques e dicas-->
            <!--</div>-->

            <!--</div>-->
        <!--</div>-->
    <!--</div> &lt;!&ndash; /container &ndash;&gt;-->

  <!--</body>-->
<!--</html>-->
