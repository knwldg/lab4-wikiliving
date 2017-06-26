<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a style="padding-top: 10px;" class="navbar-brand page-scroll">
                <img style="display: inline" src="img/semtexto.png" class="img-responsive" >
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
<<<<<<< HEAD
<<<<<<< Updated upstream
                <?php if (isset($_SESSION['role'])){if ($_SESSION['role'] == 3){?>
=======
                <?php if (isset($_SESSION['role'])){?>
>>>>>>> working
                <li>
                    <a class="page-scroll" style="text-transform: none;!important;" href="index_log.php">Index</a>
                </li> 
                <?php }?>
                <?php if (isset($_SESSION['role'])){?>
                <li>
                    <a class="page-scroll" style="text-transform: none;!important;" href="escolher_artigo.php">Escolher Artigo</a>
                </li>
<<<<<<< HEAD
                <?php }}?>
                <?php if (isset($_SESSION['role'])){if ($_SESSION['role'] == 3){?>
=======

                <li>
                    <a class="page-scroll" style="text-transform: none;!important;" href="escolher_artigo.php">Escolher Artigo</a>
                </li>

                <?php if (isset($_SESSION['role'])){if ($_SESSION['role'] == 3 || $_SESSION['role'] == 2){?>
>>>>>>> Stashed changes
=======
                <?php }?>
                <?php if (isset($_SESSION['role'])){if ($_SESSION['role'] == 3 || $_SESSION['role'] == 2){?>
>>>>>>> working
                    <li>
                        <a class="page-scroll"  href="admin/index.php">Admin</a>
                    </li>
                <?php }}?>

                <?php if (isset($_SESSION['role'])){if ($_SESSION['role'] == 3){?>
                    <li>
                        <a class="page-scroll"  href="components/logout.php">Log Out</a>
                    </li>
                <?php }}?>

	            <?php if (!isset($_SESSION['role'])){?>
                    <li>
                        <a class="page-scroll" style="text-transform: none;!important;" href="../index.php">Login</a>
                    </li>
	            <?php }?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>