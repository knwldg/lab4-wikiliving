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
                        <a class="page-scroll" style="text-transform: none;!important;" href="index.php">Index</a>
                    </li>
                    <li>
                        <a class="page-scroll" style="text-transform: none;!important;" href="artigo.php">Plantas</a>
                    </li>
                    <?php if(isset($_SESSION['role'])){
                        if ($_SESSION['role'] === 3){?>
                            <li>
                                <a class="page-scroll" style="text-transform: none;!important;" href="admin/index.php">Admin</a>
                            </li>
                        <?php }};

                    if(isset($_SESSION['role'])){?>
                        <li>
                            <a class="page-scroll" style="text-transform: none;!important;" href="components/logout.php">Logout</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <br><br><br>

    <div class="container">
        <div class="col-md-4 col-lg-4 col-sm-4 invisible "> olá</div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <form class="form-signin" id="loginForm" action="components/login_control.php" method="post" role="form">

                <br><br><div class="well-index" style="color: white"> <h2 class="form-signin-heading text-center">Login</h2></div> <br>

                <label for="inputUsername" class="sr-only">Username</label>

                <input type="text"  name="inputUsername" id="inputUsername" class="form-control form-control-wiki" placeholder="Username"  required autofocus><p></p>

                <label for="inputPassword" class="sr-only">Password</label>

                <input type="password" id="inputPassword" class="form-control form-control-wiki" placeholder="Password" name="inputPassword" required>

<br><br>

                <input type="submit" tabindex="3" style="background-color: #5cb85c; border-color:#5cb85c" class=" btn btn-lg btn-primary btn-block" value="Entrar">
               <br> <a  style="color: white;" class="text-center" href="index.php">Voltar Atrás</a>

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














