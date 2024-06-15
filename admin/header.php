
<?php


if( !isset($_SESSION['email']) )
{ 

?>    <script> 
    alert('You are not Login ...!'); window.location="login.php";
</script>
<?php 
}

?>


<?php 
$email = $_SESSION['email'];


$q= $mysqli -> query("select * from user where email = '$email'");
$userid_q = $q -> fetch_array(MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> WorkEasy </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content=" ">
    <meta name="author" content=" "/>
    <!-- Favicon icon -->
    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/feather/css/feather.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">

    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

    <style type="text/css">
        <style type="text/css">
        .switch-btn {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 34px;
        }

        .switch-btn input { 
            opacity: 0;
            width: 0;
            height: 0;
        }

        .switch-btn .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .switch-btn .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus +  .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(39px);
            -ms-transform: translateX(39px);
            transform: translateX(39px);
        }

        /* Rounded sliders */
        .switch-btn .slider.round {
            left: 16px;
            border-radius: 34px;
        }

        .switch-btn .slider.round:before {
            border-radius: 50%;
        }

    </style>

</style>
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img  class="img-fluid ad_logo" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <!-- <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> -->

                            <?php 
                            $q= $mysqli -> query("select * from profile where uid =".$userid_q['uid']);

                            while($row = $q -> fetch_array(MYSQLI_ASSOC)){?>

                                <li class="user-profile header-notification">
                                    <a href="#!" class="waves-effect waves-light">
                                        <img src="<?php echo $row['pimg']; ?>" class="img-radius" alt="User-Profile-Image">
                                        <span>Hello <?php echo $row['fname']; ?> </span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li class="waves-effect waves-light">
                                            <a href="setting.php">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="profile.php">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="logout.php">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>

                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <?php 
                                $q= $mysqli -> query("select * from profile where uid =".$userid_q['uid']);

                                while($row = $q -> fetch_array(MYSQLI_ASSOC)){?>
                                    <div class="main-menu-header">
                                        <img class="img-80 img-radius" src="<?php echo $row['pimg']; ?>" alt="User-Profile-Image">
                                        <div class="user-details">
                                            <span id="more-details"><?php echo $row['fname']; ?><i class="fa fa-caret-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="main-menu-content">
                                        <ul>
                                            <li class="more-details">
                                                <a href="profile.php"><i class="ti-user"></i>View Profile</a>
                                                <a href="setting.php"><i class="ti-settings"></i>Settings</a>
                                                <a href="logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                           <!--  <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div> -->
                            <!--  <div class="pcoded-navigation-label">Navigation</div> -->
                            
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a target="_blank" href="www.workeasy.in" class="waves-effect waves-dark vc-btn">
                                      <button style="width: 100%;" class="btn btn-primary waves-effect waves-light">View WebSite</button>
                                  </a>
                              </li>
                          </ul>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                <a  href="index.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="profile.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-comments-smiley"></i></span>
                                    <span class="pcoded-mtext">Profile</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="product.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-media-center-alt"></i></span>
                                    <span class="pcoded-mtext">Add workspace</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="testimonial.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                    <span class="pcoded-mtext">Testimonial</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="timeline.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                    <span class="pcoded-mtext">Timeline</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            
                            <li class="">
                                <a href="blog.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                                    <span class="pcoded-mtext">Blog</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                            <li class="">
                                <a href="vlogs.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                                    <span class="pcoded-mtext">Vlog</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                            <li class="">
                                <a href="podcast.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                                    <span class="pcoded-mtext">Podcast</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                             <li class="">
                                <a href="new.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                                    <span class="pcoded-mtext">What's New</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                         <!--    <div class="pcoded-navigation-label">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Basic</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Breadcrumbs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Button</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Accordion</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tabs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Color</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Label Badge</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tooltip And Popover</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Typography</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notification.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Notifications</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </nav>
