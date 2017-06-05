<?php session_start();?>

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
  <div>

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
              if ($_SESSION['role'] == 3){?>
                <li>
                  <a class="page-scroll" style="text-transform: none;!important;" href="admin/index.php">Admin</a>
                </li>
              <?php }};

            if(isset($_SESSION['username'])){?>
              <li>
                <a class="page-scroll" style="text-transform: none;!important;" href="components/logout.php">Logout</a>
              </li>
            <?php }?>

<!--            <li class="dropdown">-->
<!--              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Utilizador <span class="caret"></span></a>-->
<!--              <ul class="dropdown-menu">-->
<!--                <li><a href="#">Ver Perfil</a></li>-->
<!--                <li><a href="#">Log Out</a></li>-->

              </ul>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

  <!-- Page Content -->
<br><br><br>
    <div class="row ">
      <div class="col-lg-4 col-md-4 col-sm-4 invisible"></div>

      <div style="border-radius: 5px;" class="well-index col-lg-4 col-md-4 col-sm-4 text-center"><br>
        <h1 class="notopacity form-inline" style="text-transform: none;!important; color: white;">Bem-vindo à WikiLiving</h1><br>

      </div>



      <div class="col-lg-4 col-md-4 col-sm-4 invisible"></div>

    </div>
<br><br><br>

    <div style="color: white" class="row well-index "><div class="row text-center"><h3 style="color: white">últimos tópicos</h3></div>
      <div  style="border-right: 2px solid white;" class="col-lg-4 col-md-4 col-sm-4 text-center"><br>
        <h7>Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</h7><br>

      </div>
      <div  style="border-right: 2px solid white;" class="col-lg-4 col-md-4 col-sm-4 text-center"><br>
        <h7>Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</h7><br>

      </div>

      <div  style="border-right: 2px solid white;" class="col-lg-4 col-md-4 col-sm-4 text-center"><br>
        <h7>Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</h7><br>

      </div>

    </div>

    <footer style="color: white" class="footer text-center">
      <p>&copy; 2016 Company, Inc.</p>
    </footer>
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
