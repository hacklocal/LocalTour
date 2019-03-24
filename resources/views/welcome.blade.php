<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx">
    <head>
        <!-- TITLE OF SITE -->
        <title> {{ setting('site.title') }} </title>
        
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="app landing page template" />
        <meta name="keywords" content="app, landing page, bootstrap" />
        <meta name="developer" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- FAV AND ICONS   -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="shortcut icon" href="assets/images/apple-icon.png">
        <link rel="shortcut icon" sizes="72x72" href="assets/images/apple-icon-72x72.png">
        <link rel="shortcut icon" sizes="114x114" href="assets/images/apple-icon-114x114.png">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700%7cRRaleway:400,500" rel="stylesheet">

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/font/flaticon.css">
    
        <!-- Bootstrap-->
        <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
        <!-- Animation -->
        <link rel="stylesheet" href="assets/plugins/css/animate.css">
        <!-- owl -->
        <link rel="stylesheet" href="assets/plugins/css/owl.css">
        <!--flexslider-->
        <link rel="stylesheet" href="assets/plugins/css/flexslider.min.css">
        <!-- selectize -->
        <link rel="stylesheet" href="assets/plugins/css/selectize.css">
        <link rel="stylesheet" href="assets/plugins/css//selectize.bootstrap3.css">
        <!-- Fancybox-->
        <link rel="stylesheet" href="assets/plugins/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/plugins/css/bootstrap-dropdownhover.min.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">

        <!-- COUSTOM CSS link  -->
        <link rel="stylesheet" href="assets/less/style.css">
        <link rel="stylesheet" href="assets/less/responsive.css">

        <!-- Colors -->
        <link rel="stylesheet" href="assets/less/colors/blue.css" title="blue">
        <link rel="alternate stylesheet" href="assets/less/colors/green.css" title="green">
        <link rel="alternate stylesheet" href="assets/less/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" href="assets/less/colors/purple.css" title="purple">
        <link rel="alternate stylesheet" href="assets/less/colors/slate.css" title="slate">
        <link rel="alternate stylesheet" href="assets/less/colors/yellow.css" title="yellow">
        <link rel="alternate stylesheet" href="assets/less/colors/red.css" title="red">
        <link rel="alternate stylesheet" href="assets/less/colors/blue-munsell.css" title="blue-munsell">


        <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="ldx-black">
        <header>
            <!-- 
            |========================
            |  Nav
            |========================
            -->
            <div class="main-navigation">
                <nav class="navbar navbar-fixed-top nav-scroll" id="navbar">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-action="#js-navbar-menu" aria-expanded="false">
                                        <span aria-hidden="true" class="icon"></span>
                                    </button>
                                <!-- page brand -->
                                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="" class="img-responsive"></a>
                            </div>
                            <div class="collapse navbar-collapse black-nav" id="js-navbar-menu">
                                <ul class="nav navbar-nav navbar-right" id="navbar-nav">
                                    <li><a href="http://localhost:8000/admin/login">Accedi</a></li>
                                    <li><a href="http://localhost:8000/admin/login">Registrati</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav><!-- /.navbar -->
            </div>
            <!-- 
            |========================
            |   HOME CONTENT
            |========================
            -->
            <div class="fixed-bg image-bg ldx-home-black-bg ldx-home" id="ldx-home">
                <div class="ldx-home-overlay gradeint-bg">
                    <div class="container">
                        <div class="row section-separator">
                            <div class="col-sm-4">
                                <img src="assets/images/dx-iphone.png" alt="" class="img-responsive wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.s">
                            </div>
                            <div class="col-sm-8">
                                <div class="ldx-home-content">
                                    <h1 class="wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Scopri le bellezze nascoste del tuo quartiere </h1>
                                    <p class="wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">Scarica ora l'app e scopri cosa ti sei perso! </p>
                                    <div class="button">
                                        <a href="" class="wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">
                                             <img src="assets/images/appstore.png" alt="" class="img-responsive">
                                        </a>
                                        <a href="" class="wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">
                                             <img src="assets/images/playstore.png" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--
        |========================
        |      Script
        |========================
        -->
        
        <!-- jquery -->
        <script src="assets/plugins/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/plugins/js/bootstrap.min.js"></script>
        <!-- mean menu nav-->
        <!--<script src="assets/plugins/js/meanmenu.js"></script>-->
        <!-- ajaxchimp -->
        <script src="assets/plugins/js/jquery.ajaxchimp.min.js"></script>
        <!-- wow -->
        <script src="assets/plugins/js/wow.min.js"></script>
        <!-- Owl carousel-->
        <script src="assets/plugins/js/owl.carousel.js"></script>
        <!--flexslider-->
        <script src="assets/plugins/js/jquery.flexslider-min.js"></script>
        <!--dropdownhover-->
        <script src="assets/plugins/js/bootstrap-dropdownhover.min.js"></script>
        <!--jquery-ui.min-->
        <script src="assets/plugins/js/bars.js"></script>
        <!--validator -->
        <script src="assets/plugins/js/validator.min.js"></script>
        <!--smooth scroll-->
        <script src="assets/plugins/js/smooth-scroll.js"></script>
        <!-- Fancybox js-->
        <script src="assets/plugins/js/jquery.fancybox.min.js"></script>
        <script src="assets/plugins/js/jquery.fitvids.js"></script>
        <script src="assets/plugins/js/jquery.nav.js"></script>
        <!-- SELECTIZE-->
        <script src="assets/plugins/js/standalone/selectize.js"></script>
        <!-- isotope js-->
        <script src="assets/plugins/js/isotope.pkgd.js"></script>
        <script src="assets/plugins/js/packery-mode.pkgd.js"></script>
        <!-- init -->
        <script src="assets/js/init.js"></script>
        
    </body>
</html>