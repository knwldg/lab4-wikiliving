<html lang="en">

<?php

session_start();

require_once "../components/connection.php";
require_once "../components/generalControl.php";

listUsers();

if (!isset($_SESSION["role"])) {

	die("User is not logged in");

}

if (!privilegeChecker(3, $_SESSION["username"])) {

	die ("You do not have the necessary permissions to view this page");

}

?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wikiliving - Admin Dashboard</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Backoffice WikiLiving</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->

            <!-- /.dropdown -->

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../../Interface/components/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Publicar um artigo</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>

                        <!--
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris.js Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#artigo"><i class="fa fa-table fa-fw"></i> Ver artigos publicados</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-edit fa-fw"></i> Ver utilizadores</a>
                    </li>
                    <li>
                        <a href="#editArtigo"><i class="fa fa-edit fa-fw"></i> Editar artigos</a>
                    </li>
                </ul>




            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users Control</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- parte para escrever artigo -->

        <div id="">
            <table width="100%" class="table table-striped table-bordered table-hover"
                   id="dataTables-example">
                <thead>
                <tr>
                    <th><a href="users.php?sort=u">Username</a></th>
                    <th><a href="users.php?sort=d">ID Utilizador</a></th>
                    <th><a href="users.php?sort=r">Role</a></th>
                   <!--<th>actions</th>-->
                </tr>

                
                </thead>
                


            <?php

            if(isset($userList)) {

                for($i = 0; sizeof($userList) > $i; $i++) {?>

                    <tr>
<!--                    <td>--><?//=($userList[$i]['id_users'])?><!--</td>-->
                    <td><?=($userList[$i]['nome_user'])?></td>
                    <td><?=($userList[$i]['id_users'])?></td>
                    <td><?php switch($userList[$i]['roles_id_roles']) {

		                    case 1:

			                    echo('User');
			                    break;

		                    case 2:
			                    echo('Editor');
			                    break;

		                    case 3:

			                    echo('Admin');
			                    break;
	                    }?></td>
                    </tr>

                <?php
                }


            }

            ?>
            </table>
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

</html>
