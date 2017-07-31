<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IPTV-PungaTV</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/progressbar/bootstrap-progressbar-3.3.0.css">
    <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"> <span><span>Panel IPTV <small style="font-size: 10px;">PungaTV</small></span></span></a>
                </div>
                <div class="clearfix"></div>


                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                            <li><a href="streams.php"><i class="fa  fa-upload"></i> Streams </a></li>
                            <li><a href="activities.php"><i class="fa fa-toggle-right"></i> Actividades </a></li>
                            <li><a href="users.php"><i class="fa fa-users"></i> Lista usuarios </a></li>
                            <li><a href="categories.php"><i class="fa fa-list"></i> Categorias </a></li>
                            <li><a href="transcodes.php"><i class="fa fa-reorder"></i> Transcodes </a></li>
                            <li><a href="stream_importer.php"><i class="fa fa-archive"></i> Importador Streams </a></li>

                            <li><a href="admins.php"><i class="fa fa-user"></i> Admins </a></li>
                            <li><a href="ipblocks.php"><i class="fa fa-exclamation-triangle"></i> Bloqueo de IP </a></li>
                            <li><a href="useragentblocks.php"><i class="fa fa-exclamation-triangle"></i> Bloqueo user-agent</a></li>
                            <li><a href="settings.php"><i class="fa fa-cog"></i> Configuracion </a></li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Informacion Extra</h3>
						<li><a href="http://www.pungatv.club"><i class="fa fa-user"></i> PungaTV </a></li>

                    </div>

                </div>
                <!-- /sidebar menu -->


                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                {{ $_SESSION['user_id'] }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">

                                <li><a href="?logout"><i class="fa fa-sign-out pull-right"></i> Desconectar</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            @yield('content')

            </div>
            <div class="clearfix"></div>

            <!-- footer content -->
            <footer>
                <div class="">
                    <p class="pull-right">PungaIPTV-Panel <a href="http://www.pungatv.club" target="_new">website</a>

                    </p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

        </div>
        <!-- /page content -->
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>


<script src="js/bootstrap.min.js"></script>

<!-- chart js -->
<script src="js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="js/icheck/icheck.min.js"></script>

<script src="js/custom.js"></script>




@yield('js')

</body>

</html>
