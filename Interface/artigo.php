<!DOCTYPE html>
<?php session_start();?>

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
    <link href="dist/css/artigo.css" rel="stylesheet">
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
                <?php if($_SESSION['role'] == 3){?>
                    <li>
                        <a class="page-scroll" style="text-transform: none;!important;" href="admin/index.php">Admin</a>
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

    <div class="row">
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            <!-- Informações base do fruto -->

            <div class="well">
                <h3 class="h3 text-center">Tomate</h3>
                <img class="col-centered img-responsive" src="img/300.png" alt="";>


            </div>

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Procurar na Wikiliving</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Tópicos</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Tomate</a>
                            </li>
                            <li><a href="#">Maçã</a>
                            </li>
                            <li><a href="#">Batatas</a>
                            </li>
                            <li><a href="#">Ver lista completa</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>



        </div>
        <!-- Blog Post Content Column -->
        <div class="col-lg-8 well">

            <!-- Blog Post -->

            <!-- Title -->
            <h1>Inserir título do artigo</h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#">Nome do utilizador que escrever (editor ou admin)</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Associar à BD a data do artigo</p>

            <hr>



            <hr>

            <!-- Post Content -->
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

            <hr>


        </div>
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

