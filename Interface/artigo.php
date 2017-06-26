<!DOCTYPE html>

<?php

session_start();

require_once './components/generalControl.php';

if (!isset($_GET['id'])) {

    header('Location: ./escolher_artigo.php');

}

contentFetcher($_GET['id']);
listPlants();

global $plantList;

?>
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

<?php include "components/navbar.php"?>

<!-- Page Content -->


<div class="container">

    <div class="row">
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            <!-- Informações base do fruto -->

            <div class="well">
                <h3 class="h3 text-center text-black"><?=$plantData['nomePlanta']?></h3>
                <img class="col-centered img-responsive" src="img/<?=$_GET['id']?>.png" alt="">


            </div>

            <!-- Blog Search Well -->
            <div class="well text-black">
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
            <div class="well text-black">
                <h4>Tópicos</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <?php

                            for ($i = 0; $i < 3; $i++) {

                                echo ("
                                
                                <li><a href=\"".$plantList[$i]['id_plantas']."\">".$plantList[$i]['nome_planta']."</a>
                            </li>
                                
                                ");

                            }

                            ?>
                            <br>
                            <li><a href="#">Ver lista completa</a>
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
            <h1 class="text-black"><?=$plantData['nomePlanta']?></h1>

<<<<<<< Updated upstream
            <!-- Author
            <p class="lead">
                by <a href="#">Nome do utilizador que escrever (editor ou admin)</a>
            </p>
            -->
            <hr>

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time text-black"></span> Associar à BD a data do artigo</p>
=======
	        <?php

            if(isset($_SESSION['role'])) {

	        if ($_SESSION['role'] == 2 || $_SESSION['role'] == 3) {

		        ?><button onclick="
		            document.getElementById('textoPlanta').setAttribute('contenteditable', 'true');
		            CKEDITOR.inline('textoPlanta');
		        "></button>

	        <?php } }?>


            }

>>>>>>> Stashed changes

            <hr>




            <!-- Post Content -->

            <div class="text-black" style="color: black!important;">
                <p style="color: #000000 !important;" class="lead"><?=$plantData['textoPlanta']?></p>
            </div>
            <hr>

            <!--                                            Cena para postar comentários                                    -->
            <!-- Comments Form -->
            <div class="well text-black">
                <h4>Leave a Comment:</h4>
                <form role="form">
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <hr>

            <!-- Posted Comments -->

            <!-- Comment -->
            <div class="media ">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body text-black">
                    <h4 class="media-heading">Start Bootstrap
                        <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

            <!-- Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body text-black">
                    <h4 class="media-heading">Start Bootstrap
                        <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <!-- Nested Comment -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body text-black">
                            <h4 class="media-heading">Nested Start Bootstrap
                                <small>August 25, 2014 at 9:30 PM</small>
                            </h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <!-- End Nested Comment -->
                </div>
            </div>

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

