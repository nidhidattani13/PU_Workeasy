<?php
include 'admin/config.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Diligent || Responsive HTML 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/01-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/02-all.min.css">
    <link rel="stylesheet" href="assets/css/03-jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/css/04-nice-select.css">
    <link rel="stylesheet" href="assets/css/05-odometer.css">
    <link rel="stylesheet" href="assets/css/06-swiper.min.css">
    <link rel="stylesheet" href="assets/css/07-animate.min.css">
    <link rel="stylesheet" href="assets/css/08-custom-animate.css">
    <link rel="stylesheet" href="assets/css/09-slick.css">
    <link rel="stylesheet" href="assets/css/10-icomoon.css">
    <link rel="stylesheet" href="assets/vendor/custom-animate/custom-animate.css">
    <link rel="stylesheet" href="assets/vendor/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendor/odometer/odometer.min.css">
    <link rel="stylesheet" href="assets/fonts/gilroy/stylesheet.css">

    <link rel="stylesheet" href="assets/css/timeline.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/color1.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/public.css">
</head>

<body class="body-gray-bg <?php if (basename($_SERVER["PHP_SELF"]) != "index.php") { echo 'not-home'; } ?>">


    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <div class="page-wrapper">

        <!--Start Main Header One -->
        
        <header class="  <?php if (basename($_SERVER["PHP_SELF"]) == "index.php") { echo 'main-header main-header-three'; } else { echo 'main-header main-header-three about'; } ?> ">
            <div class="main-header-three__top">
                <div class="container">
                    <marquee>Here the updates will be displayed as discussed with the pavak sir</marquee>
                    <div class="main-header-three__top-inner">
                    </div>
                </div>
            </div>

            <div class="main-header-three__bottom">
                <div id="sticky-header" class="menu-area">
                    <div class="container">
                        <div class="main-header-three__bottom-inner">
                            <div class="main-header-three__bottom-left">
                                <div class="logo-box-one">
                                    <a href="index.php">
                                        <?php
                                        if (basename($_SERVER["PHP_SELF"]) == "index.php") {
                                            echo '<img src="assets/img/resource/pavak-logo-black.png" alt="Logo">';
                                        } else {
                                            echo '<img src="assets/img/resource/pavak-logo-white.png" alt="Logo">';
                                        }
                                        ?>
                                    </a>
                                </div>
                            </div>

                            <div class="main-header-three__bottom-middle">
                                <div class="menu-area__inner">
                                    <div class="mobile-nav-toggler alt">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                    <div class="menu-wrap">
                                        <nav class="menu-nav">
                                            <div class="navbar-wrap main-menu">
                                                <ul class="navigation">
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li class="menu-item-has-children"><a href="ventures.php">Ventures</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="pukka.php">Pukka Media</a></li>
                                                            <li><a href="learneasy.php">LearnEasy</a></li>
                                                            <li><a href="workeasy.php">WorkEasy</a></li>
                                                            <!-- <li><a href="meet.php">MeetEasy</a></li> -->
                                                            <li><a href="intern.php">Yo Internships</a></li>
                                                            <li><a href="vaatche.php">Su Vaat Che</a></li>
                                                            <li><a href="amar.php">Amar Estate Agency</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li><a href="podcast.php">Podcast</a></li>
                                                    <li><a href="vlog.php">Vlog</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li><a href="pukka.php">Vlog</a></li>
                                                            <li><a href="learneasy.php">Blog</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="contact.php">Contacts</a></li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="main-header-three__bottom-right">
                                <div class="header-btn-box-one">
                                    <a class="thm-btn" href="contact.php">
                                        <span class="txt">Contact Us<i class="icon-next"></i></span>
                                    </a>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>

            <!--Start Mobile Menu  -->
            <div class="mobile-menu">
                <nav class="menu-box">
                    <div class="close-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="nav-logo">
                        <a href="index.php">
                            <img src="assets/img/resource/pavak-logo-black.png" alt="Logo">
                        </a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <div class="contact-info">
                        <div class="icon-box"><span class="icon-phone-call"></span></div>
                        <p><a href="tel:9979910101">+91 997 9910 101</a></p>
                    </div>
                    <div class="social-links">
                        <ul class="clearfix list-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-backdrop"></div>
            <body class="body-gray-bg <?php if (basename($_SERVER["PHP_SELF"]) != "index.php") { echo 'not-home'; } ?>">

            <!-- End Mobile Menu -->
        </header>
        <!--End Main Header One -->
