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
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$_SESSION["username"]?>
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>

            <ul class="dropdown-menu dropdown-user">
                <li><a href="../index_log.php"><i class="fa fa-sign-out fa-fw"></i> Website</a>
                </li>
                <li><a href="../components/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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

                <li>
                    <a href="see.php"><i class="fa fa-table fa-fw"></i> Ver artigos publicados</a>
                </li>
                <li>
                    <a href="publish.php"><i class="glyphicon glyphicon-pencil"></i> Publicar um artigo</a>
                </li>
                <li>
                    <a href="edit.php"><i class="fa fa-edit fa-fw"></i> Editar artigos</a>
                </li>
                <?php if (isset($_SESSION['role'])){if ($_SESSION['role'] == 3){?>
                <li>
                    <a href="list.php"><i class="fa fa-user fa-fw"></i> Ver utilizadores</a>
                </li>
                <?php }}?>
            </ul>




        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>