<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Test
 */

//get_header(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>GEM Global Network</title>

    <!-- Bootstrap core CSS -->
    <link href="wp-content/themes/test/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="wp-content/themes/test/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="utility-nav">
        <div class="container">
            <ul class="pull-right">
                <li><a href="#"><i class="fa fa-lock"></i> login</a>
                </li>
                <li><a href="#"><i class="fa fa-pencil-square-o"></i> register</a>
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GEM Global Network</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">About GEM</a>
                            </li>
                            <li><a href="#">Why Join GEM</a>
                            </li>
                            <li><a href="#">GEMs Headquarters</a>
                            </li>
                            <li><a href="#">Partners</a>
                            </li>
                            <li><a href="#">Sponsors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Support<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Donate</a>
                            </li>
                            <li><a href="#">Join the GEM Network</a>
                            </li>
                            <li><a href="#">Offer Gift or Service</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Community<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">GEM Members</a>
                            </li>
                            <li><a href="#">Peace Projects</a>
                            </li>
                            <li><a href="#">Join the GEM Network</a>
                            </li>
                            <li><a href="#">View Community Map</a>
                            </li>
                            <li><a href="#">GEMs Headquarters</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">The Mandela<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Art</a>
                            </li>
                            <li><a href="#">Education</a>
                            </li>
                            <li><a href="#">Media</a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#">Contact</a>
                    </li>

                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-7 col-lg-5 col-md-offset-7">
                <div class="search pull-right">
                    <form>
                        <a href="#" class="btn">Register Today</a>
                        <span><input type="text" class="search-bar rounded" placeholder=" Search..."></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Hero
    ================================================== -->
    <div class="hero">

        <div class="container hero-text">

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img alt="logo" src="images/logo-alt.jpg" />
                </div>
                <div class="col-lg-9 col-lg-9 col-sm-9">
                    <h1>Welcome to GEM</h1>
                    <p class="lead"><a class="youtube" href="https://www.youtube.com/watch?v=BJQ67uPfyQ4">Watch our video to learn more</a>
                    </p>
                </div>

            </div>
            <i class="middle-circle fa fa-globe"></i>
        </div>
    </div>

    <!-- Start Main Content
    ================================================== -->
    <div class="main">
        <div class="home-page-widgets">
            <div class="container marketing">
                <div class="row">
                    <div class="col-lg-3 col-md-3 widget">
                        <a href="#"><img class="img-circle slickHoverPlusWhite" src="wp-content/themes/test/images/callout-1.jpg">
                            <h2>GEM Community</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-3 widget">
                        <a href="#"><img class="img-circle slickHoverPlusWhite1" src="wp-content/themes/test/images/callout-2.jpg">
                            <h2>Gift Hub</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-3 widget">
                        <a href="#"><img class="img-circle slickHoverPlusWhite2" src="images/callout-3.jpg">
                            <h2>Peace Projects</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-3 widget">
                        <a href="#"><img class="img-circle slickHoverPlusWhite3" src="wp-content/themes/test/images/callout-4.jpg">
                            <h2>Play it Forward</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                    <!-- /.col-lg-3 -->
                </div>
                <!-- /.row -->
                <!--/.marketing -->
            </div>
            <!-- /.home-page-widgets -->
        </div>
        <!--/.main -->
        <div class="container" id="feed">
            <div class="row">
                <div class="block peace-project col-md-7">
                    <div class="featured"><a href="#">Featured</a></div>
                    <div class="project-title"><a class="title" href="#"><h3>Example Project Title</h3></a>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident...</p>
                    <p class="meta">Tags: <span class="highlight"><a href="#">Featured</a>, <a href="#">Peace Project</a>, <a href="#">Education</a></span>
                    </p>
                    <a href="#"><img src="images/sample-project.jpg"></a>
                </div>
                <div class="col-md-1"></div>

                <div class="announcements col-md-4">
                    <h2>Announcements</h2>
                    <div class="article">
                    <h4><a href="#">Sample Article Title</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos...</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
        <!-- /.row -->
    </div>
    </div>
    <!-- Start Footer
    ================================================== -->
    <div class="container footer">
        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a>
            </p>
            <p>&copy; 2015 GEM Global Network. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>
    </div>
    <!--.footer -->
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
