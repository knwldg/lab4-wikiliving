<!DOCTYPE html>

<?php

session_start();

require_once "components/generalControl.php";

listArticles();

if (!contentFetcher($_GET["id"])) {

    die ("Could not get page");

}

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/blog-post.css" rel="stylesheet">
    <link href="dist/css/off.css" rel="stylesheet">
    <link href="dist/css/round-about.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav style="background-color: green;" class="navbar navbar-inverse navbar-fixed-top " role="navigation">
    <div class="row">
        <!-- usar js -->
        <!--<span class="text-center">olá</span>
        &lt;!&ndash; usar js &ndash;&gt;
        <div class="">-->
        <!--<div class="container">-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div  class="navbar-header ">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse col-md-offset-1 col-centered " id="bs-example-navbar-collapse-1">
            <ul  class="nav navbar-nav">
                <li>
                    <a href="index.html">Início</a>
                </li>
                <li>
                    <a href="#indice">Procurar artigos</a>
                    <?php

                    ?>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->

    </div>
    </div>
    <!-- /.container -->
</nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Informações base do fruto -->
                
                <div class="well">
                    <h3 class="h3 text-center"><?php echo($plantData["nomePlanta"])?></h3>
                    <img class="col-centered img-responsive" src="<?php echo("img/$article_image.jpg");?>" alt="">
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
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo($plantData["nomePlanta"])?> </h1>

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
                <p class="lead">
                <?=$plantData['textoPlanta']?>
                <hr>

                <!--&lt;!&ndash; Blog Comments &ndash;&gt;-->

                <!--&lt;!&ndash; Comments Form &ndash;&gt;-->
                <!--<div class="well">-->
                    <!--<h4>Leave a Comment:</h4>-->
                    <!--<form role="form">-->
                        <!--<div class="form-group">-->
                            <!--<textarea class="form-control" rows="3"></textarea>-->
                        <!--</div>-->
                        <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                    <!--</form>-->
                <!--</div>-->

                <!--<hr>-->

                <!--&lt;!&ndash; Posted Comments &ndash;&gt;-->

                <!--&lt;!&ndash; Comment &ndash;&gt;-->
                <!--<div class="media">-->
                    <!--<a class="pull-left" href="#">-->
                        <!--<img class="media-object" src="http://placehold.it/64x64" alt="">-->
                    <!--</a>-->
                    <!--<div class="media-body">-->
                        <!--<h4 class="media-heading">Start Bootstrap-->
                            <!--<small>August 25, 2014 at 9:30 PM</small>-->
                        <!--</h4>-->
                        <!--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
                    <!--</div>-->
                <!--</div>-->

                <!--&lt;!&ndash; Comment &ndash;&gt;-->
                <!--<div class="media">-->
                    <!--<a class="pull-left" href="#">-->
                        <!--<img class="media-object" src="http://placehold.it/64x64" alt="">-->
                    <!--</a>-->
                    <!--<div class="media-body">-->
                        <!--<h4 class="media-heading">Start Bootstrap-->
                            <!--<small>August 25, 2014 at 9:30 PM</small>-->
                        <!--</h4>-->
                        <!--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
                        <!--&lt;!&ndash; Nested Comment &ndash;&gt;-->
                        <!--<div class="media">-->
                            <!--<a class="pull-left" href="#">-->
                                <!--<img class="media-object" src="http://placehold.it/64x64" alt="">-->
                            <!--</a>-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">Nested Start Bootstrap-->
                                    <!--<small>August 25, 2014 at 9:30 PM</small>-->
                                <!--</h4>-->
                                <!--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; End Nested Comment &ndash;&gt;-->
                    </div>
                </div>

            </div>



        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class=" text-center col-lg-12">
                    <p>Wikiliving &copy; DeCA</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="dist/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="dist/js/bootstrap.min.js"></script>



</body>

</html>
