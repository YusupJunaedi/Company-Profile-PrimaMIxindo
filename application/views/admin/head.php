<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?= base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?= base_url(); ?>assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?= base_url(); ?>assets/admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?= base_url(); ?>assets/admin/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?= base_url(); ?>assets/admin/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?= base_url(); ?>assets/admin/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?= base_url(); ?>assets/admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?= base_url(); ?>assets/admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?= base_url(); ?>assets/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?= $user; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?= base_url(); ?>assets/admin/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                    <?= $user; ?>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                               
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="text-center">
                                        <a href="<?= base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="text-center image">
                            <img src="<?= base_url(); ?>assets/admin/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="text-center info">
                            <p>Hello, <?= $user; ?></p>

                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?= base_url(); ?>admin_home">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>admin_slider">
                                <i class="fa fa-film"></i> <span>Slider Home</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>admin_keunggulan">
                                <i class="fa fa-asterisk"></i> <span>Keunggulan</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>admin_profile">
                                <i class="fa fa-user"></i> <span>Profile</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>admin_pricing">
                                <i class="fa fa-lightbulb-o"></i> <span>Pricing Plan</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>admin_reputasi">
                                <i class="fa fa-star"></i> <span>Reputasi</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>admin_testimoni">
                                <i class="fa fa-thumbs-up"></i> <span>Testimoni</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>admin_pegawai">
                                <i class="fa fa-users"></i> <span>Pegawai</span> 
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-picture-o"></i> <span>Dokumentasi</span> 
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= base_url(); ?>admin_album"><i class="fa fa-book"></i> sampul Album</a></li>
                                <li><a href="<?= base_url(); ?>admin_dokumentasi"><i class="fa fa-camera-retro"></i> Photo Dokumentasi</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>admin_pemesanan">
                                <i class="fa fa-shopping-cart"></i> <span>Pemesanan</span> 
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url(); ?>admin_pesan">
                                <i class="fa fa-envelope"></i> <span>Pesan</span> 
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url(); ?>logout">
                                <i class="fa fa-sign-out"></i> <span>Logout</span> 
                            </a>
                        </li>
                       
                       
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>