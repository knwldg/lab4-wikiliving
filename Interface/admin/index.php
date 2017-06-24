<!DOCTYPE html>
<html lang="en">

<?php

session_start();

require_once "../components/generalControl.php";

if (!isset($_SESSION["role"])) {

    die("User is not logged in");

}

if (!privilegeChecker(3, $_SESSION["username"])) {

    die ("You do not have the necessary permissions to view this page");

}

listUsers();
listPlants();

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wikiliving - Backoffice</title>

    <!-- Bootstrap Core CSS -->
    <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="dist/css/off.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    include "components/navbar_admin.php";
    ?>

    <div id="page-wrapper">
        <div class="row">
            <br>
            <div class="col-lg-12">
                <h1 class="text-center">Bem vindo ao Backoffice da Wikiliving</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- parte para ver artigos -->

        <div class="row">
            <div class="col-lg-12">
        <?php include "components/seeArticles.php";?><br>
            </div>
        </div>
        <!-- parte para escrever artigo -->
        <div class="row" id="editor_texto">
            <div class="col-lg-12">
            <?php
            include "components/publishArticle.php";

            ?>
            </div>
        </div>

        <!-- parte para editar artigo -->

        <div class="row" id="editor_texto">
            <div class="col-lg-12">
                <?php
                include "components/editArticle.php";

                ?>
            </div>
        </div>

        <!-- parte para ver utilizadores -->

        <div class="row" id="editor_texto">
            <div class="col-lg-12">
                <?php
                include "components/listUsers.php";

                ?>
            </div>
        </div>



        </div>


    </div>





<!-- jQuery -->
<script src="../admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../admin/vendor/raphael/raphael.min.js"></script>
<script src="../admin/vendor/morrisjs/morris.min.js"></script>
<script src="../admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../admin/dist/js/sb-admin-2.js"></script>

</body>

<script>
    initSample();
</script>

</html>
