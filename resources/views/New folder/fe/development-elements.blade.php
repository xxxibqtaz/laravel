<!doctype html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/development-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:57 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Learning HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="../assets/images/favicon.png" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/night-mode.css">
    <link rel="stylesheet" href="../assets/css/framework.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/icons.css">

 
    <style>
        .secondary-nav {
            background: white
        }

        .secondary-nav ul li.uk-active a {
            color: #3e416d;
            box-shadow: 7px 0px 0px -3px #3e416d inset;
        }

        .night-mode .secondary-nav {
            background-color: #131313 !important;
        }

        .night-mode .secondary-nav ul li.uk-active a {
            color: white;
            box-shadow: 7px 0px 0px -3px white inset;
        }
    </style>

</head>

<body>

    <div id="wrapper">
 
      
        <!-- Header Container
        ================================================== -->
        <header class="header header-transparent uk-light"
            uk-sticky="top:20 ; cls-active:header-sticky ; cls-inactive: uk-light">

            <div class="container">
                <nav uk-navbar>

                    <!-- left Side Content -->
                    <div class="uk-navbar-left">

                        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: mobile-active"></span>



                        <!-- logo -->
                        <a href="dashboard.html" class="logo">
                            <img src="http://demo.foxthemes.net/courseplusv3.3/assets/images/logo-dark.svg" alt="">
                            <span> Courseplus</span>
                        </a>

                        <!-- breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#"> Dashboard </a></li>
                                <li><a href="#">Docs</a></li>
                                <li>Elements</li>
                            </ul>
                        </nav>


                    </div>


                    <!--  Right Side Content   -->

                    <div class="uk-navbar-right">

                        <div class="header-widget">
                            <!-- User icons close mobile-->
                            <span class="icon-feather-x icon-small uk-hidden@s"
                                uk-toggle="target: .header-widget ; cls: is-active"> </span>


                            <a href="#" class="header-widget-icon"
                                uk-tooltip="title: My Courses ; pos: bottom ;offset:21">
                                <i class="uil-youtube-alt"></i>
                            </a>

                            <!-- courses dropdown List -->
                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                                class="dropdown-notifications my-courses-dropdown">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Your Courses</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings"
                                            uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="../assets/images/course/1.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="../assets/images/course/3.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">The Complete JavaScript Course Build Real
                                                        Projects !</span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="../assets/images/course/2.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Learn Angular Fundamentals From The
                                                        Beginning</span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="../assets/images/course/1.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: top-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all</a>
                                </div>
                            </div>

                            <!-- notificiation icon  -->

                            <a href="#" class="header-widget-icon"
                                uk-tooltip="title: Notificiation ; pos: bottom ;offset:21">
                                <i class="uil-bell"></i>
                                <span>4</span>
                            </a>

                            <!-- notificiation dropdown -->
                            <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small"
                                class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Notifications </h4>
                                    <a href="#">
                                        <i class="icon-feather-settings"
                                            uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-thumbs-up"></i></span>
                                                <span class="notification-text">
                                                    <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                    <span class="text-primary">Javascript Introduction </span>
                                                    <br> <span class="time-ago"> 9 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-primary disabled">
                                                    <i class="icon-feather-message-circle"></i></span>
                                                <span class="notification-text">
                                                    <strong>Stella Johnson</strong> Replay Your Comments in
                                                    <span class="text-primary">Programming for Games</span>
                                                    <br> <span class="time-ago"> 12 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-success disabled">
                                                    <i class="icon-feather-star"></i></span>
                                                <span class="notification-text">
                                                    <strong>Alex Dolgove</strong> Added New Review In Course
                                                    <span class="text-primary">Full Stack PHP Developer</span>
                                                    <br> <span class="time-ago"> 19 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-share-2"></i></span>
                                                <span class="notification-text">
                                                    <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                    <span class="text-primary">Css Flex Box </span>
                                                    <br> <span class="time-ago"> Yesterday </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>


                            </div>


                            <!-- Message  -->

                            <a href="#" class="header-widget-icon" uk-tooltip="title: Message ; pos: bottom ;offset:21">
                                <i class="uil-envelope-alt"></i>
                                <span>1</span>
                            </a>

                            <!-- Message  notificiation dropdown -->
                            <div uk-dropdown=" pos: top-right;mode:click" class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Messages</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings"
                                            uk-tooltip="title: Message settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Jonathan Madano</strong>
                                                    <p>Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> 2 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="../assets/images/avatars/avatar-3.jpg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Stella Johnson</strong>
                                                    <p> Alex will explain you how to keep the HTML structure and all
                                                        that...</p>
                                                    <span class="time-ago"> 7 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Alex Dolgove</strong>
                                                    <p> Alia Joseph just joined Messenger! Be the first to send a
                                                        welcome message..</p>
                                                    <span class="time-ago"> 19 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="../assets/images/avatars/avatar-4.jpg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Adrian Mohani</strong>
                                                    <p> Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> Yesterday </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all <i class="icon-line-awesome-long-arrow-right"></i> </a>
                                </div>
                            </div>


                            <!-- profile-icon-->

                            <a href="#" class="header-widget-icon profile-icon">
                                <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="header-profile-icon">
                            </a>

                            <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">

                                <!-- User Name / Avatar -->
                                <a href="profile-1.html">

                                    <div class="dropdown-user-details">
                                        <div class="dropdown-user-avatar">
                                            <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="dropdown-user-name">
                                            Richard Ali <span>Students</span>
                                        </div>
                                    </div>

                                </a>

                                <!-- User menu -->

                                <ul class="dropdown-user-menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                    </li>
                                    <li><a href="#">
                                            <i class="icon-feather-bookmark"></i> Bookmark </a>
                                    </li>
                                    <li><a href="profile-edit.html">
                                            <i class="icon-feather-settings"></i> Account Settings</a>
                                    </li>
                                    <li><a href="#" style="color:#62d76b">
                                            <i class="icon-feather-star"></i> Upgrade To Premium</a>
                                    </li>
                                    <li>
                                        <a href="#" id="night-mode" class="btn-night-mode">
                                            <i class="icon-feather-moon"></i> Night mode
                                            <span class="btn-night-mode-switch">
                                                <span class="uk-switch-button"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-divider">
                                    <li><a href="#">
                                            <i class="icon-feather-help-circle"></i> Help</a>
                                    </li>
                                    <li><a href="page-login.html">
                                            <i class="icon-feather-log-out"></i> Sing Out</a>
                                    </li>
                                </ul>


                            </div>


                        </div>



                        <!-- icon search-->
                        <a class="uk-navbar-toggle uk-hidden@s"
                            uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>

                        <!-- User icons -->
                        <a href="#" class="uil-user icon-small uk-hidden@s"
                            uk-toggle="target: .header-widget ; cls: is-active">
                        </a>


                    </div>
                    <!-- End Right Side Content / End -->


                </nav>

            </div>
            <!-- container  / End -->

        </header>

        <!-- overlay seach on mobile-->
        <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden
            style="z-index: 10000;">
            <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                </form>
            </div>
            <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
                href="#"></a>
        </div>

        <!-- search overlay-->
        <div id="searchbox">

            <div class="search-overlay"></div>

            <div class="search-input-wrapper">
                <div class="search-input-container">
                    <div class="search-input-control">
                        <span class="icon-feather-x btn-close uk-animation-scale-up"
                            uk-toggle="target: #searchbox; cls: is-active"></span>
                        <div class=" uk-animation-slide-bottom">
                            <input type="text" name="search" autofocus required>
                            <p class="search-help">Type the name of the Course and book you are looking for</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- side nav-->
        <div class="side-nav uk-animation-slide-left-medium">


            <div class="side-nav-bg"></div>

            <!-- logo -->
            <div class="logo uk-visible@s">
                <a href="dashboard.html">
                    <i class=" uil-graduation-hat"></i>
                </a>
            </div>

            <ul>
                <li>
                    <a href="#"> <i class="uil-play-circle"></i> </a>
                    <div class="side-menu-slide">
                        <div class="side-menu-slide-content">
                            <ul data-simplebar>
                                <li>
                                    <a href="courses.html"> <i class="uil-brush-alt "></i> Web Development </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-android-alt"></i> Mobile App </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-bag-alt"></i> Business </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-window"></i> IT Software </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-palette"></i> Desings </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-megaphone"></i> Marketing </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-life-ring"></i> Life Style </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class=" uil-camera"></i> Photography </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-medkit"></i> Health Fitness </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-music"></i> Music </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-shopping-cart-alt"></i> Ecommerce
                                    </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-utensils-alt "></i> Food cooking </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-lightbulb-alt"></i> Teaching academy </a>
                                </li>
                        </div>
                    </div>
                </li>
                <li>
                    <!-- book -->
                    <a href="book.html"> <i class="uil-book-alt"></i> <span class="tooltips"> Book</span> </a>
                </li>
                <li>
                    <!-- Episodes -->
                    <a href="episode.html"> <i class="uil-youtube-alt"></i> <span class="tooltips"> Episodes</span></a>
                </li>
                <li>
                    <!-- Paths-->
                    <a href="course-path.html"> <i class="uil-rss-interface"></i> <span class="tooltips">
                            Paths</span></a>
                </li>
                <li>
                    <!-- Blog-->
                    <a href="blog-1.html"> <i class="uil-file-alt"></i> <span class="tooltips"> Blog</span></a>
                </li>
                <li>
                    <!--  Pages -->
                    <a href="#"> <i class="uil-layers"></i></a>
                    <div class="side-menu-slide">
                        <div class="side-menu-slide-content">
                            <ul uk-accordion>
                                <!-- to make it open default   class="uk-open" -->
                                <li>
                                    <a href="#" class="uk-accordion-title">
                                        <i class="uil-layers"></i> Pages </a>
                                    <div class="uk-accordion-content">
                                        <a href="page-pricing.html"> Pricing</a>
                                        <a href="page-faq.html"> faq</a>
                                        <a href="page-term.html"> term</a>
                                        <a href="page-privacy.html"> Privacy</a>
                                        <a href="specialty-comming-soon.html"> Comming soon</a>
                                        <a href="specialty-maintanence.html"> Maintanence</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="uk-accordion-title">
                                        <i class="uil-sign-out-alt"></i> authentication </a>
                                    <div class="uk-accordion-content">
                                        <a href="form-login.html"> Login </a>
                                        <a href="form-register.html"> Register </a>
                                        <a href="form-modern-login.html"> Simple Register</a>
                                        <a href="form-modern-singup.html"> Simple Register</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="uk-accordion-title">
                                        <i class="uil-code"></i> Development </a>
                                    <div class="uk-accordion-content">
                                        <a href="development-elements.html"> Elements </a>
                                        <a href="development-compounents.html"> Components </a>
                                        <a href="development-icons.html"> Icons </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" uk-toggle="target: #searchbox; cls: is-active"><i class="uil-search-alt"></i></a>
                </li>

            </ul>
            <ul class="uk-position-bottom">
                <li>
                    <!-- Lunch information box -->
                    <a href="#">
                        <i class="uil-paint-tool"></i>
                    </a>
                    <div uk-drop="pos: right-bottom ;mode:click ; offset: 10;animation: uk-animation-slide-right-small">
                        <div class="uk-card-default rounded p-0">
                            <h5 class="mb-0 p-3 px-4  bg-light"> Night mode</h5>
                            <div class="p-3 px-4">
                                <p>Turns the light surfaces of the page dark, creating an experience ideal for night.
                                </p>
                                <div class="uk-flex">
                                    <p class="uk-text-small text-muted">DARK THEME </p>
                                    <!-- night mode button -->
                                    <span href="#" id="night-mode" class="btn-night-mode">
                                        <label class="btn-night-mode-switch">
                                            <span class="uk-switch-button"></span>
                                        </label>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <a href="#">
                        <span class="icon-feather-user"></span>
                    </a>
                    <div uk-drop="pos: right-bottom ;mode:click ; offset: 10;animation: uk-animation-slide-right-small">
                        <div class="uk-card-default rounded p-0">
                            <a href="user-profile.html" class="p-0">

                                <div class="dropdown-user-details">
                                    <div class="dropdown-user-avatar">
                                        <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="dropdown-user-name">
                                        Richard Ali <span>Students</span>
                                    </div>
                                </div>

                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                </li>
                                <li><a href="user-profile-edit.html">
                                        <i class="icon-feather-settings"></i> Account Settings</a>
                                </li>
                                <li><a href="#" class="text-grey">
                                        <i class="icon-feather-star"></i> Upgrade To Premium</a>
                                </li>
                                <li class="menu-divider">
                                </li>
                                <li><a href="#">
                                        <i class="icon-feather-help-circle"></i> Help</a>
                                </li>
                                <li><a href="page-login.html">
                                        <i class="icon-feather-log-out"></i> Sing Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="page-content">
            <div class="bg-grey uk-light pt-lg-5">

                  
                <div class="container">

                    <div class="p-3">
                        <h1 class="mt-4"> Elements </h1>
                        <p> Advanced multi-part components with lots of possibilities . </p>
                    </div>

                    <nav class="responsive-tab style-4">
                        <ul data-submenu-title="Elements"
                            uk-switcher="connect: #elements-nav ;animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                            <li><a href="#">Button</a></li>
                            <li><a href="#">Card</a></li>
                            <li><a href="#">Colors</a></li>
                            <li><a href="#">Flex</a></li>
                            <li><a href="#">Form</a></li>
                            <li><a href="#">Grid</a></li>
                            <li><a href="#">Heading</a></li>
                            <li><a href="#">icons</a></li>
                            <li><a href="#">List</a></li>
                            <li><a href="#">Pagination</a></li>
                            <li><a href="#">Position</a></li>
                            <li><a href="#">Table</a></li>
                            <li><a href="#">Tab</a></li>
                            <li><a href="#">Text</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="container bg-white"> 

                <ul class="uk-switcher  pl-lg-3" id="elements-nav">

                    <!-- Button -->

                    <li>
                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">
                                <h2> Button</h2>
                                <p class="mb-4"> Easily create nice looking .buttons, which come in different styles
                                </p>

                                <h4 id="introduction" class="uk-margin-medium-top">   Size </h4>

                                    <div class="mt-3" uk-margin>

                                            <button type="button" class="btn btn-primary btn-sm">
                                              Small
                                            </button>
                                            <button type="button" class="btn btn-primary">
                                              Default
                                            </button>
                                            <button type="button" class="btn btn-primary btn-lg">
                                              Large
                                            </button> 

                                        </div>

                                    <br> 

                                    <h4 id="Button-colors" class="uk-margin-medium-top"> Button Colors </h4>

                                        <p>There are several style modifiers available. Just add one of the following
                                            classes to
                                            apply a
                                            different look.</p>
                                        <code>.btn-warning</code> <code>.btn-secondary</code> <code>.btn-danger</code>
                                        <code>.btn-success</code>
                                        <code>.btn-info</code> <br>
                                        <code>.btn-dark</code>   <code>.btn-dark </code> <code>.btn-white </code>
                                        <code>.btn-light</code>
                                        

                                        <div class="mt-3" uk-margin>

                                            <button type="button" class="btn btn-primary">
                                              Primary
                                            </button>
                                            <button type="button" class="btn btn-secondary">
                                              Secondary
                                            </button>
                                            <button type="button" class="btn btn-success">
                                              Success
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                              Danger
                                            </button>
                                            <button type="button" class="btn btn-warning">
                                              Warning
                                            </button>
                                            <button type="button" class="btn btn-info">
                                              Info
                                            </button>
                                            <button type="button" class="btn btn-dark">
                                              Dark
                                            </button>
                                            <button type="button" class="btn btn-link">Link</button>
                                        </div>

                                        <br>


                                        <h4 id="Button-outline" class="uk-margin-medium-top"> Outline Button</h4>

                                            <div class="mt-3" uk-margin>

                                                <button type="button" class="btn btn-outline-primary">
                                                  Primary
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary">
                                                  Secondary
                                                </button>
                                                <button type="button" class="btn btn-outline-success">
                                                  Success
                                                </button>
                                                <button type="button" class="btn btn-outline-danger">
                                                  Danger
                                                </button>
                                                <button type="button" class="btn btn-outline-warning">
                                                  Warning
                                                </button>
                                                <button type="button" class="btn btn-outline-info">
                                                  Info
                                                </button>
                                                <button type="button" class="btn btn-outline-dark">
                                                  Dark
                                                </button>
                                                <button type="button" class="btn btn-outline-link">Link</button>
                                            </div>

                                            <br>
                                            
                                            <h4 id="Button-soft" class="uk-margin-medium-top"> Soft color</h4>

                                                <div class="mt-3" uk-margin>

                                                    <button type="button" class="btn btn-soft-primary">
                                                      Primary
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary">
                                                      Secondary
                                                    </button>
                                                    <button type="button" class="btn btn-soft-success">
                                                      Success
                                                    </button>
                                                    <button type="button" class="btn btn-soft-danger">
                                                      Danger
                                                    </button>
                                                    <button type="button" class="btn btn-soft-warning">
                                                      Warning
                                                    </button>
                                                    <button type="button" class="btn btn-soft-info">
                                                      Info
                                                    </button>
                                                    <button type="button" class="btn btn-soft-dark">
                                                      Dark
                                                    </button>
                                                    <button type="button" class="btn btn-soft-link">Link</button>
                                                </div>
    
                                                <br>
                                                
                                                <h4 id="transtion" class="uk-margin-medium-top">Button transition 3d
                                                    hover</h4>

                                                    <div class="mt-3" uk-margin>
                                                        <button type="button" class="btn btn-primary  transition-3d-hover">
                                                            Primary
                                                          </button> 
                                                          <button type="button" class="btn btn-success transition-3d-hover">
                                                            Success
                                                          </button>
                                                          <button type="button" class="btn btn-danger transition-3d-hover">
                                                            Danger
                                                          </button>
                                                          <button type="button" class="btn btn-warning transition-3d-hover">
                                                            Warning
                                                          </button>
                                                    </div> 

                                                    <br>

                                                    <h4 id="Button-Social" class="uk-margin-medium-top">Button Social
                                                        </h4>

                                                        <div class="mt-3" uk-margin>
                                                              <button type="button" class="btn btn-facebook btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-facebook-f"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Facebook</span>
                                                            </button>
                                                            <button type="button" class="btn btn-twitter btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-twitter"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Twitter</span>
                                                            </button>
                                                            <button type="button" class="btn btn-google-plus btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-google-plus-g"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Google +</span>
                                                            </button>
                                                            <button type="button" class="btn btn-instagram btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-instagram"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Instagram</span>
                                                            </button>
                                                            <button type="button" class="btn btn-pinterest btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-pinterest-p"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Pinterest</span>
                                                            </button>
                                                            <button type="button" class="btn btn-youtube btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-youtube"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Youtube</span>
                                                            </button>
                                                            <button type="button" class="btn btn-vimeo btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-vimeo"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Vimeo</span>
                                                            </button>
                                                            <button type="button" class="btn btn-slack btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-slack"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Slack</span>
                                                            </button>
                                                            <button type="button" class="btn btn-dribbble btn-icon-label">
                                                              <span class="btn-inner--icon">
                                                                <i class="icon-brand-dribbble"></i>
                                                              </span>
                                                              <span class="btn-inner--text">Dribbble</span>
                                                            </button>
                                                          </div>


                                                          <br>

                                                        <h4 id="Button-with-icon" class="uk-margin-medium-top">Button with icon </h4>

                                                            <div class="mt-3" uk-margin>

                                                                <button type="button" class="btn btn-primary btn-icon-label">
                                                                    <span class="btn-inner--icon">
                                                                      <i class="uil-play"></i>
                                                                    </span>
                                                                    <span class="btn-inner--text">Play now</span>
                                                                  </button>
                                                                  <button type="button" class="btn btn-dark btn-icon-label">
                                                                    <span class="btn-inner--icon">
                                                                        <i class="uil-shopping-basket"></i>
                                                                    </span>
                                                                    <span class="btn-inner--text">Add to cart</span>
                                                                  </button>
                                                                  <button type="button" class="btn btn-danger btn-icon-label">
                                                                    <span class="btn-inner--icon">
                                                                      <i class="uil-trash-alt"></i>
                                                                    </span>
                                                                    <span class="btn-inner--text">Delete item</span>
                                                                  </button>

                                                            </div>

                                                            <div class="mt-3" uk-margin>

                                                                <button type="button" class="btn btn-primary btn-icon-label">
                                                                    <span class="btn-inner--text">Play now</span><span class="btn-inner--icon">
                                                                        <i class="uil-play"></i>
                                                                    </span>
                                                                  </button>
                                                                  <button type="button" class="btn btn-dark btn-icon-label">
                                                                    <span class="btn-inner--text">Add to cart</span><span class="btn-inner--icon">
                                                                      <i class="uil-shopping-basket"></i>
                                                                    </span>
                                                                  </button>
                                                                  <button type="button" class="btn btn-danger btn-icon-label">
                                                                    <span class="btn-inner--text">Delete item</span><span class="btn-inner--icon">
                                                                      <i class="uil-trash-alt"></i>
                                                                    </span>
                                                                  </button>

                                                            </div>
  

                                                            <br>


                                                            <h4 id="btn-animation" class="uk-margin-medium-top">Button with
                                                                icon animation </h4>

                                                                <div class="mt-3" uk-margin>
                                                                    <button type="button" class="btn btn-animated btn-primary btn-animated-x">
                                                                        <span class="btn-inner--visible">Play now</span>
                                                                        <span class="btn-inner--hidden">
                                                                            <i class="uil-play"></i>
                                                                        </span>
                                                                      </button>
                                                                      <button type="button" class="btn btn-animated btn-dark btn-animated-y">
                                                                        <span class="btn-inner--visible">
                                                                            <i class="uil-shopping-basket"></i>
                                                                        </span><span class="btn-inner--hidden">Buy</span>
                                                                      </button>
                                                                      <button type="button" class="btn btn-animated btn-success btn-animated-x">
                                                                        <span class="btn-inner--visible">Next step</span>
                                                                        <span class="btn-inner--hidden">
                                                                          <i class="uil-arrow-right"></i>
                                                                        </span>
                                                                      </button>
                                                                      <button type="button" class="btn btn-animated btn-dark btn-animated-y">
                                                                        <span class="btn-inner--visible">
                                                                            <i class="uil-play"></i>
                                                                        </span>
                                                                        <span class="btn-inner--hidden">
                                                                            <i class="uil-pause"></i>
                                                                        </span>
                                                                      </button>
                                                                    
                                                                </div>
 

                                                                <h4 id="btn-apps"
                                                                            class="uk-margin-medium-top"> Apps </h4>
    
                                                                    <div class="mt-3" uk-margin>

                                                                        <button type="button" class="btn btn-app-store">
                                                                            <i class="icon-brand-apple"></i>
                                                                            <span class="btn-inner--text">Download on the</span>
                                                                            <span class="btn-inner--brand">App Store</span>
                                                                          </button>
                                                                          <button type="button" class="btn btn-app-store">
                                                                            <i class="icon-brand-google-play"></i>
                                                                            <span class="btn-inner--text">Download on the</span>
                                                                            <span class="btn-inner--brand">Play Store</span>
                                                                          </button>

                                                                        </div>



                                                                        <h4 id="btn-apps"
                                                                            class="uk-margin-medium-top"> Button Icon </h4>

                                                                        <div class="mt-3" uk-margin>

                                                                            <button type="button" class="btn btn-primary btn-icon-only">
                                                                                <span class="btn-inner--icon">
                                                                                  <i class="uil-user"></i>
                                                                                </span>
                                                                              </button>
                                                                              <button type="button" class="btn btn-secondary btn-icon-only">
                                                                                <span class="btn-inner--icon">
                                                                                  <i class="uil-arrow-left"></i>
                                                                                </span>
                                                                              </button>
                                                                              <button type="button" class="btn btn-danger btn-icon-only">
                                                                                <span class="btn-inner--icon">
                                                                                  <i class="uil-trash-alt"></i>
                                                                                </span>
                                                                              </button>


                                                                              <br>

                                                                              <button type="button" class="btn btn-primary rounded-circle btn-icon-only">
                                                                                <span class="btn-inner--icon">
                                                                                  <i class="uil-user"></i>
                                                                                </span>
                                                                              </button>
                                                                              <button type="button" class="btn btn-secondary rounded-circle btn-icon-only">
                                                                                <span class="btn-inner--icon">
                                                                                  <i class="uil-arrow-left"></i>
                                                                                </span>
                                                                              </button>
                                                                              <button type="button" class="btn btn-danger rounded-circle btn-icon-only">
                                                                                <span class="btn-inner--icon">
                                                                                  <i class="uil-trash-alt"></i>
                                                                                </span>
                                                                              </button>

                                                                        </div>
                                                                        
                                                                        <h4 id="btn-apps"
                                                                            class="uk-margin-medium-top"> Button States </h4>

                                                                        <div class="mt-3" uk-margin> 


                                                                                <button type="button" class="btn btn-primary active">Active</button>
                                                                                <button type="button" class="btn btn-secondary active">Active</button>
                                                                                <button type="button" class="btn btn-primary" disabled="">Disabled</button>
                                                                                <button type="button" class="btn btn-secondary" disabled="">Disabled</button>
                                                                                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Single toggle</button>


                                                                        </div>
 



                            </div>
                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-scrollspy-nav="closest: li; scroll: true" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#introduction" uk-scroll> Basic </a></li>
                                    <li> <a href="#Button-colors" uk-scroll> Colours </a></li>
                                    <li> <a href="#Button-outline" uk-scroll> outline </a></li>
                                    <li> <a href="#Button-soft" uk-scroll> Soft colour </a></li>
                                    <li> <a href="#transtion" uk-scroll> tansition </a></li>
                                    <li> <a href="#Glass" uk-scroll> Glass </a></li>
                                    <li> <a href="#Button-Social" uk-scroll> Social </a></li>
                                    <li> <a href="#Button-with-icon" uk-scroll> With Icon </a></li>
                                    <li> <a href="#btn-animation" uk-scroll> animation </a></li>
                                    <li> <a href="#btn-apps" uk-scroll> apps </a></li>
                                </ul>


                            </div>

                        </div>
                    </li>

                    <!-- Card -->
                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">
                                <h2> Card</h2>
                                <p class="mb-4"> Create layout boxes with different styles. </p>

                                <h6 id="introduction"> Usage : </h6>
                                <p>By default, a card is blank. That is why it is important to add a modifier class for
                                    styling. In our example we are using the <code>.uk-card-default</code> class.</p>

                                <h6> PREVIEW</h6>
                                <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                                    <h4 class="uk-card-title">Default</h3>
                                        <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #card"> MARKUP</button>

                                    <div id="card" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-jnpra2wc" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-width-1-2@m"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Default<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>dolor<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h3 class="uk-margin uk-margin-medium-top" id="Style-modifiers"> Style modifiers</h3>
                                <p> UIkit includes a number of modifiers that can be used to add a
                                    specific style to cards. <br>
                                    <code>.uk-card-default</code> <code> .uk-card-primary </code> <code>
                                        .uk-card-secondary
                                    </code> or you can use <a href="http://demo.foxthemes.net/courseplusv3.3/elements/colors.html">Background</a> compounents
                                    .
                                    and <code>.uk-light</code> </p>

                                <h6> PREVIEW</h6>


                                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">
                                            <h4 class="uk-card-title">Default</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-primary uk-card-body">
                                            <h4 class="uk-card-title">Primary</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-secondary uk-card-body">
                                            <h4 class="uk-card-title">Secondary</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="uk-card-default uk-card-body bg-danger uk-light">
                                            <h5> Default </h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card-default uk-card-body bg-warning uk-light">
                                            <h5> Default </h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card-default uk-card-body bg-info uk-light">
                                            <h5> Default </h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Card-Style"> MARKUP</button>

                                    <div id="Card-Style" aria-hidden="true" class=" uk-margin-small-top" hidden="">

                                        <pre><code id="code-k0oydzq1" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-3@m uk-grid-small uk-grid-match"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
         <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">h4</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Default<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
         <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
         <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-primary uk-card-body"</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">h4</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
         <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
         <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-secondary uk-card-body"</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">h4</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Secondary<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
         <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

     <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
         <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-default uk-card-body bg-danger uk-light"</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">h5</span>&gt;</span> Default <span class="hljs-tag">&lt;/<span class="hljs-name">h5</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
         <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
         <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-default uk-card-body bg-warning uk-light"</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">h5</span>&gt;</span> Default <span class="hljs-tag">&lt;/<span class="hljs-name">h5</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
         <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
         <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-default uk-card-body bg-info uk-light"</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">h5</span>&gt;</span> Default <span class="hljs-tag">&lt;/<span class="hljs-name">h5</span>&gt;</span>
             <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
         <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
     <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h3 class="uk-margin uk-margin-medium-top" id="Hover-modifier"> Hover modifier</h3>
                                <p>To create a hover effect on the card, add the <code>.uk-card-hover</code> class. This
                                    comes in handy when working with anchors and can be combined with the other card
                                    modifiers.</p>
                                <h6> PREVIEW</h6>

                                <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-hover uk-card-body">
                                            <h4 class="uk-card-title">Hover</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                                            <h4 class="uk-card-title">Default</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                                            <h4 class="uk-card-title">Primary</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light">
                                            <h4 class="uk-card-title">Secondary</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Card-hover"> MARKUP</button>

                                    <div id="Card-hover" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-k0oyhqyu" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-2@s uk-grid-match"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-hover uk-card-body"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Hover<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-hover uk-card-body"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Default<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-primary uk-card-hover uk-card-body uk-light"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-secondary uk-card-hover uk-card-body uk-light"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Secondary<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>



                                <h3 class="uk-margin-medium-top uk-margin" id="Size-modifier"> Size modifier</h3>
                                <p>You can apply different size modifiers to cards that will decrease or increase their
                                    padding.</p>

                                <h6> PREVIEW</h6>
                                <div class="uk-child-width-1-2@s" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <h4 class="uk-card-title">Small</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-large uk-card-body">
                                            <h4 class="uk-card-title">Large</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Card-size"> MARKUP</button>

                                    <div id="Card-size" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-k0oyhqyv" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-2@s"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-small uk-card-body"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Small<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-large uk-card-body"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Large<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="card-header-and-footer"> Header & footer </h3>
                                <p>You can also divide a card into header and footer — around the default body. Just add
                                    the <code>.uk-card-header</code> or <code>.uk-card-footer</code> class to a
                                    <code>&lt;div&gt;</code> element inside the card.</p>
                                <h6> PREVIEW</h6>
                                <div class="uk-card uk-card-default uk-width-1-2@m  uk-card-small">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <img class="uk-border-circle" src="../assets/images/avatars/avatar-1.jpg"
                                                    style="width:40px">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h4 class="uk-card-title uk-margin-remove-bottom">Title</h4>
                                                <p class="uk-text-meta uk-margin-remove-top"><time
                                                        datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <div class="uk-card-footer">
                                        <a href="#" class="uk-uk-button uk-button-text">Read more</a>
                                    </div>
                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Card-head-foot"> MARKUP</button>

                                    <div id="Card-head-foot" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-k0oyhqyw" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-width-1-2@m"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-header"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-grid-small uk-flex-middle"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-auto"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-border-circle"</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"40"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"40"</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/avatar.jpg"</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-expand"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title uk-margin-remove-bottom"</span>&gt;</span>Title<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-text-meta uk-margin-remove-top"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">time</span> <span class="hljs-attr">datetime</span>=<span class="hljs-string">"2016-04-01T19:00"</span>&gt;</span>April 01, 2016<span class="hljs-tag">&lt;/<span class="hljs-name">time</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-body"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-footer"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-uk-button uk-button-text"</span>&gt;</span>Read more<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Media-modifiers"> Media modifiers. </h3>
                                <p>To display an image inside a card without any spacing, add one of the following
                                    classes to a <code>&lt;div&gt;</code> around the <code>&lt;img&gt;</code> element.
                                    Mind that you need to modify the source order accordingly.</p>

                                <h6> PREVIEW</h6>
                                <div class="uk-child-width-1-2@m" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img src="../assets/images/demos/elements/image.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h4 class="uk-card-title">Media Top</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-body">
                                                <h4 class="uk-card-title">Media Bottom</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt.</p>
                                            </div>
                                            <div class="uk-card-media-bottom">
                                                <img src="../assets/images/demos/elements/light.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Card-media"> MARKUP</button>

                                    <div id="Card-media" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-k0oyhqyx" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-2@m"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-media-top"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/light.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-body"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Media Top<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-body"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Media Bottom<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-media-bottom"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/light.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>



                                <h3 class="uk-margin-medium-top" id="Horizontal-alignment"> Horizontal alignment </h3>
                                <h6> PREVIEW</h6>

                                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin"
                                    uk-grid>
                                    <div class="uk-card-media-left uk-cover-container">
                                        <img src="../assets/images/demos/elements/image.jpg" alt="" uk-cover>
                                        <canvas width="600" height="400"></canvas>
                                    </div>
                                    <div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Media Left</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin"
                                    uk-grid>
                                    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                                        <img src="../assets/images/demos/elements/dark.jpg" alt="" uk-cover>
                                        <canvas width="600" height="400"></canvas>
                                    </div>
                                    <div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Media Right</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt.</p>
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Card-media"> MARKUP</button>

                                    <div id="Card-media" aria-hidden="true" class=" uk-margin-small-top" hidden="">

                                        <pre><code id="code-k0oyhqyy" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-media-left uk-cover-container"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/light.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span> <span class="hljs-attr">uk-cover</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">canvas</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"600"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"400"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">canvas</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-body"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Media Left<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-flex-last@s uk-card-media-right uk-cover-container"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/light.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span> <span class="hljs-attr">uk-cover</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">canvas</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"600"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"400"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">canvas</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-body"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">h3</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card-title"</span>&gt;</span>Media Right<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

                                    </div>
                                </div>






                            </div>


                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Introduction" uk-scroll> Introduction </a></li>
                                    <li> <a href="#Style-modifiers" uk-scroll> Style modifiers </a></li>
                                    <li> <a href="#Hover-modifier" uk-scroll> Hover modifier </a></li>
                                    <li> <a href="#Size-modifier" uk-scroll> Size modifier </a></li>
                                    <li> <a href="#card-header-and-footer" uk-scroll> header and footer </a></li>
                                    <li> <a href="#Media modifiers" uk-scroll> Media modifier </a></li>
                                    <li> <a href="#Horizontal alignment" uk-scroll> Horizontal alignment </a></li>
                                </ul>

                            </div>

                        </div>

                    </li>


                    <!-- colors -->
                    <li>
                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> Background</h2>
                                <p class="mb-4"> A collection of utility classes to add different backgrounds to
                                    elements.</p>


                                <h4 id="Uikit-backgrounds">Uikit backgrounds</h3>


                                    <p>
                                        To apply a background color to an element, add one of the following classes. The
                                        actual color
                                        for each modifier is defined by the UIkit style that you have chosen or
                                        customized.
                                    </p>
                                    <code class="mr-2"> .uk-background-default </code> <code class="mr-2">
                                        .uk-background-muted </code>
                                    <code class="mr-2"> .uk-background-primary </code> <code class="mr-2">
                                        .uk-background-secondary </code>
                                    <br><Br> <br>

                                    <div class="uk-child-width-1-2@s uk-text-center uk-flex-center" uk-grid>
                                        <div>
                                            <div class="uk-background-default uk-padding uk-panel">
                                                <p class="uk-h4">Default</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-background-muted uk-padding uk-panel">
                                                <p class="uk-h4">Muted</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-background-primary uk-light uk-padding uk-panel">
                                                <p class="uk-h4">Primary</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-background-secondary uk-light uk-padding uk-panel">
                                                <p class="uk-h4">Secondary</p>
                                            </div>
                                        </div>
                                    </div>



                                    <h3 class="uk-margin-medium-top" id="Theme-backgrounds">Theme backgrounds</h3>

                                    <p>To apply a background color to an element, add one of the following classes :
                                        <br>
                                        <code class="mr-2"> .bg-White </code> <code class="mr-2"> .bg-primary </code>
                                        <code class="mr-2"> .bg-Danger </code> <code class="mr-2"> .bg-success </code>
                                        <code class="mr-2"> .bg-Warning </code> <code class="mr-2"> .bg-info </code>
                                        <code class="mr-2"> .bg-grey </code> <code class="mr-2"> .bg-Dark </code>
                                    </p> <Br> <br>

                                    <div class="uk-child-width-1-3@s uk-text-center" uk-grid>
                                        <div>
                                            <div class="uk-padding uk-panel bg-white border">
                                                <p class="uk-h4">White</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-primary">
                                                <p class="uk-h4">Primary</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-danger">
                                                <p class="uk-h4">Danger</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-success">
                                                <p class="uk-h4">Success</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-warning">
                                                <p class="uk-h4">Warning</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-info">
                                                <p class="uk-h4">Info</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-grey">
                                                <p class="uk-h4">Grey</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-dark">
                                                <p class="uk-h4">Dark</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel bg-light border">
                                                <p class="uk-h4">Light</p>
                                            </div>
                                        </div>
                                    </div>



                                    <p class="uk-text-small mt-3"><span class="uk-label">Note</span> To change the text
                                        inside the element to light use this class <code>uk-light</code>. </p>




                                    <h3 class="uk-margin-medium-top" id="Theme-soft-backgrounds">Theme soft backgrounds
                                    </h3>


                                    <p>To apply a background color to an element, add one of the following classes :
                                        <br>
                                        <code class="mr-2"> .bg-soft-primary </code> <code class="mr-2"> .bg-soft-Danger
                                        </code> <code class="mr-2"> .bg-soft-success </code>
                                        <code class="mr-2"> .bg-soft-Warning </code> <code class="mr-2"> .bg-soft-info
                                        </code> <code class="mr-2"> .bg-soft-grey </code> <code class="mr-2">
                                            .bg-soft-Dark </code>
                                    </p> <Br> <br>


                                    <div class="uk-child-width-1-3@s uk-text-center" uk-grid>
                                        <div>
                                            <div class="uk-padding uk-panel bg-soft-white">
                                                <p class="uk-h4">White</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel bg-soft-primary">
                                                <p class="uk-h4">Primary</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel bg-soft-danger">
                                                <p class="uk-h4">Danger</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel bg-soft-success">
                                                <p class="uk-h4">Success</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel bg-soft-warning">
                                                <p class="uk-h4">Warning</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel bg-soft-info">
                                                <p class="uk-h4">Info</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel bg-soft-dark">
                                                <p class="uk-h4">Dark</p>
                                            </div>
                                        </div>
                                    </div>



                                    <h3 class="uk-margin-medium-top" id="Gradient backgrounds">Gradient backgrounds</h3>

                                    <p>To apply a background color to an element, add one of the following classes :
                                        <br>
                                        <code class="mr-2"> .bg-gradient-primary </code> <code class="mr-2">
                                            .bg-gradient-Danger </code> <code class="mr-2"> .bg-gradient-success </code>
                                        <code class="mr-2"> .bg-gradient-Warning </code> <code class="mr-2">
                                            .bg-gradient-info </code> <code class="mr-2"> .bg-gradient-grey </code>
                                        <code class="mr-2"> .bg-gradient-dark </code> <code class="mr-2">
                                            .bg-gradient-light </code>
                                    </p> <Br> <br>


                                    <div class="uk-child-width-1-3@s uk-text-center" uk-grid>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-gradient-primary">
                                                <p class="uk-h4">Primary </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-gradient-danger">
                                                <p class="uk-h4">Danger</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-gradient-success">
                                                <p class="uk-h4">Success</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-gradient-warning">
                                                <p class="uk-h4">Warning</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-gradient-info">
                                                <p class="uk-h4">Info</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-gradient-dark">
                                                <p class="uk-h4">Dark</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-gradient-grey">
                                                <p class="uk-h4">Grey</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-padding uk-panel uk-light bg-gradient-light">
                                                <p class="uk-h4">Light</p>
                                            </div>
                                        </div>
                                    </div>


                                    <h3 class="uk-margin-medium-top" id="Text-Colors"> Text Colors</h3>

                                    <br>
                                    <div class="uk-child-width-1-4@s uk-text-center uk-flex-center" uk-grid>
                                        <span class="h3 text-muted">.uk-text-muted</span>
                                        <span class="h3 text-emphasis">.uk-text-emphasis</span>
                                        <span class="h3 text-primary">.uk-text-primar</span>
                                        <span class="h3 text-secondary">.uk-text-secondary</span>
                                        <span class="h3 text-success">.uk-text-success</span>
                                        <span class="h3 text-warning">.uk-text-warning</span>
                                        <span class="h3 text-info">.uk-text-info</span>

                                    </div>



                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Uikit-backgrounds" uk-scroll> Uikit backgrounds </a></li>
                                    <li> <a href="#Theme-backgrounds" uk-scroll> Theme backgrounds </a></li>
                                    <li> <a href="#Theme-soft-backgrounds" uk-scroll> Theme soft backgrounds </a></li>
                                    <li> <a href="#Gradient backgrounds" uk-scroll> Gradient backgrounds </a></li>
                                    <li> <a href="#gradient-Shadow" uk-scroll> gradient Shadow </a></li>
                                    <li> <a href="#Text-Colors" uk-scroll> Text Colors </a></li>
                                </ul>


                            </div>

                        </div>
                    </li>


                    <!-- Flex -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> Flex</h2>
                                <p class="mb-4"> Utilize the power of flexbox to create a wide range of layouts. </p>


                                <p> To apply the flexbox layout modal, use one of the following classes.
                                    By default, all flex items are aligned to the left, as wide as their content and
                                    matched in
                                    height.</p>
                                <h6> PREVIEW </h6>

                                <div class="uk-flex">
                                    <div class="uk-card uk-card-default uk-card-body">Item 1</div>
                                    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 2</div>
                                    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 3</div>
                                </div>

                                <div class="mt-lg-4">
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #basic"> MARKUP</button>

                                    <div id="basic" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fl2j7" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-flex"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-margin-left"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-margin-left"</span>&gt;</span>Item 3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>



                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="Horizontal-alignment"> Horizontal alignment </h3>
                                <p> These classes define the horizontal alignment of flex
                                    items and
                                    distribute the space between them. Add one or more of them to the flex container in
                                    order to
                                    configure the alignments of the flex items. By default, flex items are aligned to
                                    the left
                                    as does the <code> </code> class. </p>
                                <h6> PREVIEW </h6>

                                <div class="uk-overflow-auto uk-margin-medium">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-flex-left</code></td>
                                                <td align="left">Add this class to align flex items to the left.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-center</code></td>
                                                <td align="left">Add this class to center flex items along the main
                                                    axis.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-right</code></td>
                                                <td align="left">Add this class to align flex items to the right.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-between</code></td>
                                                <td align="left">Add this class to distribute items evenly, with equal
                                                    space
                                                    between
                                                    the items along the main axis.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-around</code></td>
                                                <td align="left">Add this class to distribute items evenly with equal
                                                    space
                                                    on both
                                                    sides of each item.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="uk-flex uk-flex-center">
                                    <div class="uk-card uk-card-default uk-card-body">Item 1</div>
                                    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 2</div>
                                    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 3</div>
                                </div>

                                <div class="mt-lg-4">
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Horizontal"> MARKUP</button>

                                    <div id="Horizontal" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fl2j8" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-flex uk-flex-center"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-margin-left"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-margin-left"</span>&gt;</span>Item 3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>


                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Vertical-alignment">Vertical alignment </h3>

                                <p> These classes define the vertical alignment of flex items.
                                    By
                                    default, flex items fill the height of their container as does the
                                    <code>.uk-flex-stretch</code> class. </p>
                                <h6> PREVIEW </h6>


                                <div class="uk-overflow-auto uk-margin-medium">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-flex-stretch</code></td>
                                                <td align="left">Add this class to expand flex items to fill the height
                                                    of
                                                    their
                                                    parent.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-top</code></td>
                                                <td align="left">Add this class to align flex items to the top.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-middle</code></td>
                                                <td align="left">Add this class to center flex items along the cross
                                                    axis.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-bottom</code></td>
                                                <td align="left">Add this class to align flex items to the bottom.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="uk-flex uk-flex-middle uk-text-center">
                                    <div class="uk-card uk-card-default uk-card-body">Item 1</div>
                                    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 2<br>...</div>
                                    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item
                                        3<br>...<br>...
                                    </div>
                                </div>


                                <div class="mt-lg-4">
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Vertical"> MARKUP</button>

                                    <div id="Vertical" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0fl2ja" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-flex uk-flex-middle uk-text-center"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-margin-left"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-margin-left"</span>&gt;</span>Item 3<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>...<span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>



                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Flex-and-grid">Flex and grid</h3>
                                <p> The Flex component can be combined with a grid from the <a
                                        href="elements-grid.html">Grid
                                        component</a>. </p>
                                <h6> PREVIEW </h6>




                                <div class="uk-flex-middle" uk-grid>
                                    <div class="uk-width-2-3@m">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt
                                            ut labore et dolore magna.</p>
                                    </div>
                                    <div class="uk-width-1-3@m uk-flex-first">
                                        <img src="../assets/images/demos/elements/image.jpg" alt="Image">
                                    </div>
                                </div>


                                <div class="mt-lg-4">
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Flex"> MARKUP</button>

                                    <div id="Flex" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fl2je" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-flex-middle"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-2-3@m"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-1-3@m uk-flex-first"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/light.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">"Image"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>


                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="Direction-modifiers"> Direction modifiers </h3>
                                <p> These classes define the axis that flex items are placed on and their
                                    direction. By default, items run horizontally from left to right as does the
                                    <code>.uk-flex-row</code> class.</p>
                                <h6> PREVIEW </h6>
                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-flex-row</code></td>
                                                <td align="left">Add this class to lay out flex items as horizontal
                                                    rows.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-row-reverse</code></td>
                                                <td align="left">Add this class to lay out flex items from right to
                                                    left.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-column</code></td>
                                                <td align="left">Add this class to lay out flex items as vertical
                                                    columns.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-flex-column-reverse</code></td>
                                                <td align="left">Add this class to lay out flex items from bottom to
                                                    top.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="uk-flex uk-flex-column uk-width-1-3 mt-4">
                                    <div class="uk-card uk-card-default uk-card-body">Item 1</div>
                                    <div class="uk-card uk-card-default uk-card-body uk-margin-top">Item 2</div>
                                    <div class="uk-card uk-card-default uk-card-body uk-margin-top">Item 3</div>
                                </div>

                                <div class="mt-lg-4">
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Direction"> MARKUP</button>

                                    <div id="Direction" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fl2jb" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-flex uk-flex-column uk-width-1-3"</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item 1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-margin-top"</span>&gt;</span>Item 2<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
   <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body uk-margin-top"</span>&gt;</span>Item 3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>



                                    </div>
                                </div>



                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Introduction" uk-scroll> Introduction </a></li>
                                    <li> <a href="#Horizontal-alignment" uk-scroll> Horizontal alignment </a></li>
                                    <li> <a href="#Vertical-alignment" uk-scroll> Vertical alignment </a></li>
                                    <li> <a href="#Flex-and-grid" uk-scroll> Flex and grid </a></li>
                                    <li> <a href="#Direction-modifiers" uk-scroll> Direction modifiers </a></li>
                                    <li> <a href="#Direction-modifiers" uk-scroll> Direction modifiers </a></li>
                                </ul>

                            </div>

                        </div>

                    </li>


                    <!-- Form -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s ">
                                <h2> Form</h2>
                                <p class="mb-4">Easily create nice looking forms with different styles and layouts.</p>


                                <p>Add one of the following classes to form controls inside a <form>
                                        element to define them. </form>
                                </p>


                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-input</code></td>
                                                <td align="left">Add this class to <code>&lt;input&gt;</code> elements.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-select</code></td>
                                                <td align="left">Add this class to <code>&lt;select&gt;</code> elements.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-textarea</code></td>
                                                <td align="left">Add this class to <code>&lt;textarea&gt;</code>
                                                    elements.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-radio</code></td>
                                                <td align="left">Add this class to <code>&lt;input
                                                        type="radio"&gt;</code> elements
                                                    to
                                                    create radio buttons.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-checkbox</code></td>
                                                <td align="left">Add this class to <code>&lt;input
                                                        type="checkbox"&gt;</code>
                                                    elements
                                                    to create checkboxes.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-range</code></td>
                                                <td align="left">Add this class to <code>&lt;input
                                                        type="range"&gt;</code> elements
                                                    to
                                                    create range forms.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="uk-width-1-2@m  mt-sm">

                                    <form>
                                        <fieldset class="uk-fieldset">

                                            <legend class="uk-legend">Legend</legend>

                                            <div class="uk-margin">
                                                <input class="uk-input" type="text" placeholder="Input">
                                            </div>

                                            <div class="uk-margin">
                                                <select class="uk-select">
                                                    <option>Option 01</option>
                                                    <option>Option 02</option>
                                                </select>
                                            </div>

                                            <div class="uk-margin">
                                                <textarea class="uk-textarea" rows="5"
                                                    placeholder="Textarea"></textarea>
                                            </div>

                                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                                <label><input class="uk-radio" type="radio" name="radio2" checked>
                                                    A</label>
                                                <label><input class="uk-radio" type="radio" name="radio2"> B</label>
                                            </div>

                                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                                <label><input class="uk-checkbox" type="checkbox" checked> A</label>
                                                <label><input class="uk-checkbox" type="checkbox"> B</label>
                                            </div>

                                            <div class="uk-margin">
                                                <input class="uk-range" type="range" value="2" min="0" max="10"
                                                    step="0.1">
                                            </div>

                                        </fieldset>
                                    </form>

                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #form"> MARKUP</button>

                                    <div id="form" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpb" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">fieldset</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-fieldset"</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">legend</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-legend"</span>&gt;</span>Legend<span class="hljs-tag">&lt;/<span class="hljs-name">legend</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Input"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-select"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span>&gt;</span>Option 01<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span>&gt;</span>Option 02<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-textarea"</span> <span class="hljs-attr">rows</span>=<span class="hljs-string">"5"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Textarea"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin uk-grid-small uk-child-width-auto uk-grid"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-radio"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"radio2"</span> <span class="hljs-attr">checked</span>&gt;</span> A<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-radio"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"radio2"</span>&gt;</span> B<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin uk-grid-small uk-child-width-auto uk-grid"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-checkbox"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">checked</span>&gt;</span> A<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-checkbox"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span>&gt;</span> B<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-range"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"range"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span> <span class="hljs-attr">min</span>=<span class="hljs-string">"0"</span> <span class="hljs-attr">max</span>=<span class="hljs-string">"10"</span> <span class="hljs-attr">step</span>=<span class="hljs-string">"0.1"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;/<span class="hljs-name">fieldset</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>



                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="States-modifiers"> States modifiers</h3>

                                <p>Add one of the classes to an <code>&lt;input&gt;</code>,
                                    <code>&lt;select&gt;</code> or <code>&lt;textarea&gt;</code> element to modify its
                                    size.
                                </p>

                                <div class="uk-overflow-auto mb-md mt-sm">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-form-danger</code></td>
                                                <td align="left">Add this class to notify the user that the value is not
                                                    validated.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-form-success</code></td>
                                                <td align="left">Add this class to notify the user that the value is
                                                    validated.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="uk-grid-small" uk-grid>
                                    <div>
                                        <input class="uk-input uk-form-danger uk-form-width-medium" type="text"
                                            placeholder="form-danger" value="form-danger">
                                    </div>

                                    <div>
                                        <input class="uk-input uk-form-success uk-form-width-medium" type="text"
                                            placeholder="form-success" value="form-success">
                                    </div>

                                    <div>
                                        <input class="uk-input uk-form-width-medium" type="text" placeholder="disabled"
                                            value="disabled" disabled>
                                    </div>
                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #States-modifiers"> MARKUP</button>

                                    <div id="States-modifiers" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpc" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-danger uk-form-width-medium"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"form-danger"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"form-danger"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-success uk-form-width-medium"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"form-success"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"form-success"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-medium"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"disabled"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"disabled"</span> <span class="hljs-attr">disabled</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>



                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="Size-modifiers"> Size modifiers</h3>

                                <p>Provide the user with basic information through feedback
                                    states on form controls by using one of the following classes. </p>
                                <br>

                                <div class="uk-overflow-auto mb-md mt-sm">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-form-large</code></td>
                                                <td align="left">Add this class to make the element larger.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-form-small</code></td>
                                                <td align="left">Add this class to make the element smaller.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <form class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div>
                                        <input class="uk-input uk-form-width-medium uk-form-large" type="text"
                                            placeholder="Large">
                                    </div>

                                    <div>
                                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Default">
                                    </div>

                                    <div>
                                        <input class="uk-input uk-form-width-medium uk-form-small" type="text"
                                            placeholder="Small">
                                    </div>
                                </form>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Size-modifiers"> MARKUP</button>

                                    <div id="Size-modifiers" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpd" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-medium uk-form-large"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Large"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-medium"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Default"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-medium uk-form-small"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Small"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>


                                    </div>
                                </div>



                                <h3 class="uk-margin-medium-top" id="Width-modifiers"> Width modifiers</h3>

                                <p>Provide the user with basic information through feedback
                                    states on form controls by using one of the following classes. </p>

                                <div class="uk-overflow-auto mb-md mt-sm">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-form-width-large</code></td>
                                                <td align="left">Applies a width of <em>500px</em>.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-form-width-medium</code></td>
                                                <td align="left">Applies a width of <em>200px</em>.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-form-width-small</code></td>
                                                <td align="left">Applies a width of <em>130px</em>.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-form-width-xsmall</code></td>
                                                <td align="left">Applies a width of <em>40px</em>.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="uk-width-1-2@m">
                                    <form>

                                        <div class="uk-margin">
                                            <input class="uk-input uk-form-width-large" type="text" placeholder="Large">
                                        </div>

                                        <div class="uk-margin">
                                            <input class="uk-input uk-form-width-medium" type="text"
                                                placeholder="Medium">
                                        </div>

                                        <div class="uk-margin">
                                            <input class="uk-input uk-form-width-small" type="text" placeholder="Small">
                                        </div>

                                        <div class="uk-margin">
                                            <input class="uk-input uk-form-width-xsmall" type="text"
                                                placeholder="XSmall">
                                        </div>

                                    </form>
                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Width-modifiers"> MARKUP</button>

                                    <div id="Width-modifiers" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpe" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-large"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Large"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-medium"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Medium"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-small"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Small"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-xsmall"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"XSmall"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>


                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Horizontal-form"> Horizontal form </h3>

                                <p>Use the <code>.uk-form-controls-text</code> class to better
                                    align checkboxes and radio buttons when using them with text in a horizontal layout.
                                </p>


                                <div class="uk-width-2-3@m">
                                    <form class="uk-form-horizontal uk-margin-large">

                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-horizontal-text">Text</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-horizontal-text" type="text"
                                                    placeholder="Some text...">
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <label class="uk-form-label" for="form-horizontal-select">Select</label>
                                            <div class="uk-form-controls">
                                                <select class="uk-select" id="form-horizontal-select">
                                                    <option>Option 01</option>
                                                    <option>Option 02</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <div class="uk-form-label">Radio</div>
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label><input class="uk-radio" type="radio" name="radio1"> Option
                                                    01</label><br>
                                                <label><input class="uk-radio" type="radio" name="radio1"> Option
                                                    02</label>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Horizontal-form"> MARKUP</button>

                                    <div id="Horizontal-form" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpi" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-horizontal uk-margin-large"</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"form-horizontal-text"</span>&gt;</span>Text<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-controls"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"form-horizontal-text"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Some text..."</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-label"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"form-horizontal-select"</span>&gt;</span>Select<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-controls"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-select"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"form-horizontal-select"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span>&gt;</span>Option 01<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">option</span>&gt;</span>Option 02<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-label"</span>&gt;</span>Radio<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-controls uk-form-controls-text"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-radio"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"radio1"</span>&gt;</span> Option 01<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">br</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">label</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-radio"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"radio1"</span>&gt;</span> Option 02<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>



                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Form-and-icons"> Form and icons </h3>

                                <p>
                                    The icon has to come first in the markup. By default, the icon will be placed on the
                                    left side of the form. To change the alignment, add the <code>.uk-form-icon-flip
                                    </code>
                                    class.
                                </p>

                                <br>

                                <div class="uk-width-1-3@m">
                                    <form>

                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon"><i class="far fa-envelope"></i></span>
                                                <input class="uk-input" type="text" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip"><i
                                                        class="far fa-envelope"></i></span>
                                                <input class="uk-input" type="text" placeholder="Email">
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Form-and-icons"> MARKUP</button>

                                    <div id="Form-and-icons" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpj" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-inline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-icon"</span> <span class="hljs-attr">uk-icon</span>=<span class="hljs-string">"icon: user"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-inline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-icon uk-form-icon-flip"</span> <span class="hljs-attr">uk-icon</span>=<span class="hljs-string">"icon: lock"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>


                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Clickable-icons"> Clickable icons </h3>


                                <p>
                                    To enable an action, for example opening a modal to pick an image or link, use an
                                    <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element to create the icon.
                                </p>
                                <br>

                                <div class="uk-width-1-3@m">
                                    <form>

                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <a class="uk-form-icon" href="#"><i class="far fa-lock"></i></a>
                                                <input class="uk-input" type="Password" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <a class="uk-form-icon uk-form-icon-flip"><i
                                                        class="far fa-lock"></i></a>
                                                <input class="uk-input" type="Password" placeholder="Password">
                                            </div>
                                        </div>

                                    </form>

                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Clickable-icons"> MARKUP</button>

                                    <div id="Clickable-icons" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpk" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-inline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-icon"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span> <span class="hljs-attr">uk-icon</span>=<span class="hljs-string">"icon: pencil"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-inline"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-form-icon uk-form-icon-flip"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span> <span class="hljs-attr">uk-icon</span>=<span class="hljs-string">"icon: link"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>


                                    </div>
                                </div>




                                <h3 class="uk-margin-medium-top" id="Form-and-grid"> Form and grid </h3>


                                <p>
                                    You can also use the <a href="http://demo.foxthemes.net/courseplusv3.3/elements/grid.html">Grid</a> components to define
                                    the layout of
                                    a form.
                                </p>
                                <br>

                                <div class="uk-width-2-3@m">
                                    <form class="uk-grid-small" uk-grid>
                                        <div class="uk-width-1-1">
                                            <input class="uk-input" type="text" placeholder="100">
                                        </div>
                                        <div class="uk-width-1-2@s">
                                            <input class="uk-input" type="text" placeholder="50">
                                        </div>
                                        <div class="uk-width-1-4@s">
                                            <input class="uk-input" type="text" placeholder="25">
                                        </div>
                                        <div class="uk-width-1-4@s">
                                            <input class="uk-input" type="text" placeholder="25">
                                        </div>
                                        <div class="uk-width-1-2@s">
                                            <input class="uk-input" type="text" placeholder="50">
                                        </div>
                                        <div class="uk-width-1-2@s">
                                            <input class="uk-input" type="text" placeholder="50">
                                        </div>
                                    </form>

                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Form-and-grid"> MARKUP</button>

                                    <div id="Form-and-grid" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpl" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-grid-small"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-1-1"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"100"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-1-2@s"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"50"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-1-4@s"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"25"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-1-4@s"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"25"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-1-2@s"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"50"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-1-2@s"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"50"</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>



                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Custom-controls"> Custom controls </h3>

                                <p>
                                    To replace a file inputs or select forms with your own HTML content, like a button
                                    or text, add
                                    the <code>uk-form-custom</code> attribute to a container element.
                                </p>
                                <br>

                                <div class="uk-width-1-2@m">
                                    <form>

                                        <div class="uk-margin">
                                            <div uk-form-custom>
                                                <input type="file">
                                                <button class="uk-uk-button uk-button-default" type="button"
                                                    tabindex="-1">Select</button>
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <span class="uk-text-middle">Here is a text</span>
                                            <div uk-form-custom>
                                                <input type="file">
                                                <span class="uk-link">upload</span>
                                            </div>
                                        </div>

                                        <div class="uk-margin" uk-margin>
                                            <div uk-form-custom="target: true">
                                                <input type="file">
                                                <input class="uk-input uk-form-width-medium" type="text"
                                                    placeholder="Select file" disabled>
                                            </div>
                                            <button class="uk-uk-button uk-button-default">Submit</button>
                                        </div>

                                    </form>

                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Custom"> MARKUP</button>

                                    <div id="Custom" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flfpm" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">uk-form-custom</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-uk-button uk-button-default"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"-1"</span>&gt;</span>Select<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-text-middle"</span>&gt;</span>Here is a text<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">uk-form-custom</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-link"</span>&gt;</span>upload<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin"</span> <span class="hljs-attr">uk-margin</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">uk-form-custom</span>=<span class="hljs-string">"target: true"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-input uk-form-width-medium"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Select file"</span> <span class="hljs-attr">disabled</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-uk-button uk-button-default"</span>&gt;</span>Submit<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></code></pre>


                                    </div>
                                </div>


                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#introduction" uk-scroll> Basic </a></li>
                                    <li> <a href="#States-modifiers" uk-scroll> States modifiers </a></li>
                                    <li> <a href="#Size-modifiers" uk-scroll> Size modifiers </a></li>
                                    <li> <a href="#Width-modifiers" uk-scroll> Width modifiers </a></li>
                                    <li> <a href="#Horizontal-form" uk-scroll> Horizontal form </a></li>
                                    <li> <a href="#Form-and-icons" uk-scroll> Form and icons </a></li>
                                    <li> <a href="#Clickable-icons" uk-scroll> Clickable-icons </a></li>
                                    <li> <a href="#Custom-Clickable-icons" uk-scroll> Custom Clickable-icons </a></li>
                                    <li> <a href="#Form-and-grid" uk-scroll> Form and grid </a></li>
                                </ul>

                            </div>

                        </div>

                    </li>



                    <!-- Grid -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> Grid</h2>
                                <p class="mb-4"> Create a fully responsive, fluid and nestable grid layout. </p>

                                <h6 id="introduction"> Usage : </h6>
                                <p>To create the grid container, add the <code>uk-grid</code> attribute to a
                                    <code>&lt;div&gt;</code> element. Add child <code>&lt;div&gt;</code> elements to
                                    create the cells. By default, all grid cells are stacked. To place them side by
                                    side, add one of the classes from the Width component . Using
                                    <code>.uk-child-width-expand</code> will automatically apply equal width to items,
                                    regardless of how many there are.</p>
                                <h6> PREVIEW</h6>
                                <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Grid"> MARKUP</button>

                                    <div id="Grid" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-jw0flkm9" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-expand@s uk-text-center"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Gutter-modifiers"> Gutter modifiers </h3>
                                <p>The Grid component comes with a default gutter that is decreased automatically from a
                                    certain breakpoint usually on a smaller desktop viewport width. To apply a different
                                    gutter, add one of the following classes.</p>
                                <h6> PREVIEW</h6>
                                <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                </div>
                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Gird-Gutter-1"> MARKUP</button>

                                    <div id="Gird-Gutter-1" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-jw0flkma" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-grid-small uk-child-width-expand@s uk-text-center"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h6> PREVIEW</h6>
                                <div class="uk-grid-large uk-child-width-expand@s uk-text-center" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Gird-Gutter-2"> MARKUP</button>

                                    <div id="Gird-Gutter-2" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-jw0flkmb" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-grid-medium uk-child-width-expand@s uk-text-center"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>



                                <h6> PREVIEW</h6>
                                <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center" uk-grid>
                                    <div>
                                        <div class="uk-background-muted uk-padding">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-background-primary uk-padding uk-light">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-background-secondary uk-padding uk-light">Item</div>
                                    </div>
                                </div>
                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Gird-Gutter-3"> MARKUP</button>

                                    <div id="Gird-Gutter-3" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-jw0flkmb" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-grid-medium uk-child-width-expand@s uk-text-center"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Nested-grid"> Nested grid </h3>
                                <p> You can easily extend your grid layout with nested grids.</p>
                                <h6> PREVIEW</h6>
                                <div class="uk-child-width-1-2 uk-text-center" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div>
                                        <div class="uk-child-width-1-2 uk-text-center" uk-grid>
                                            <div>
                                                <div class="uk-card uk-card-primary uk-card-body">Item</div>
                                            </div>
                                            <div>
                                                <div class="uk-card uk-card-primary uk-card-body">Item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Gird-nested"> MARKUP</button>

                                    <div id="Gird-nested" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-jw0flkme" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-2 uk-text-center"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-2 uk-text-center"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-primary uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-primary uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Grid-and-width"> Grid and width </h3>
                                <p> The grid is mostly used in combination with the Width component. This allows for
                                    great flexibility when determining the column widths.</p>
                                <h6> PREVIEW</h6>
                                <div class="uk-text-center" uk-grid>
                                    <div class="uk-width-auto@m">
                                        <div class="uk-card uk-card-default uk-card-body">Auto</div>
                                    </div>
                                    <div class="uk-width-1-3@m">
                                        <div class="uk-card uk-card-default uk-card-body">1-3</div>
                                    </div>
                                    <div class="uk-width-expand@m">
                                        <div class="uk-card uk-card-default uk-card-body">Expand</div>
                                    </div>
                                </div>
                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Gird-width"> MARKUP</button>

                                    <div id="Gird-width" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-jw0flkmj" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-text-center"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-auto@m"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Auto<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-1-3@m"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>1-3<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-width-expand@m"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Expand<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>




                                <h3 class="uk-margin-medium-top" id="Child-width"> Child width </h3>
                                <p>If the grid columns are evenly split, you can add one of the
                                    <code>.uk-child-width-*</code> classes to the grid container instead of adding a
                                    class to each of the items.</p>
                                <p>you can add one of this <code>.uk-child-width-1-2</code>
                                    <code>.uk-child-width-1-3</code>
                                    <code>.uk-child-width-1-4</code><code>.uk-child-width-1-5 </code>
                                    <code>.uk-child-width-1-6 </code> </p>

                                <h6> PREVIEW</h6>
                                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-grid"
                                    uk-grid="">
                                    <div class="uk-first-column">
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div class="">
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                    <div class="">
                                        <div class="uk-card uk-card-default uk-card-body">Item</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Gird-child"> MARKUP</button>

                                    <div id="Gird-child" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-jw0flkmk" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-card uk-card-default uk-card-body"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                    </div>
                                </div>














                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">

                                    <li> <a href="#Introduction" uk-scroll> Introduction </a></li>
                                    <li> <a href="#Gutter-modifiers" uk-scroll> Gutter modifiers </a></li>
                                    <li> <a href="#Nested-grid" uk-scroll> Nested grid </a></li>
                                    <li> <a href="#Grid-and-width" uk-scroll> Grid and width </a></li>
                                    <li> <a href="#Child-width" uk-scroll> Child width </a></li>
                                </ul>

                            </div>

                        </div>


                    </li>


                    <!-- heading -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> heading</h2>
                                <p class="mb-4"> Define different styles for headings. </p>


                                <p>Add one of the following classes to modify the size and style of headings. Usually,
                                    these classes
                                    would be used on heading elements but they work also with any other element like a
                                    div element.
                                    Note that these classes extend the heading classes from the Base component upward,
                                    and the
                                    smallest modifier picks up the size after h1 element.</p>
                                <h6> PREVIEW </h6>

                                <h1 class="uk-heading-small">Small</h1>
                                <h1 class="uk-heading-medium">Medium</h1>
                                <h1 class="uk-heading-large">Large</h1>
                                <h1 class="uk-heading-xlarge">XLarge</h1>
                                <h1 class="uk-heading-2xlarge">2XLarge</h1>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #basic"> MARKUP</button>

                                    <div id="basic" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0flors" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-small"</span>&gt;</span>Small<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-medium"</span>&gt;</span>Medium<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-large"</span>&gt;</span>Large<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-xlarge"</span>&gt;</span>XLarge<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-2xlarge"</span>&gt;</span>2XLarge<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span></code></pre>


                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top border-top-0" id="Divider-modifier"> Divider modifier
                                </h3>

                                <p>To apply a divider to a heading, add the <code>
                                        .uk-heading-divider </code> class. You can combine it with any size modifier.
                                </p>
                                <h6> PREVIEW </h6>

                                <div class="my-lg-5">
                                    <h1 class="uk-heading-divider">Heading Divider</h1>
                                </div>


                                <pre><code id="code-jw0flort" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-divider"</span>&gt;</span>Heading Divider<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span></code></pre>

                                <h3 class="uk-margin-medium-top border-top-0" id="Bullet-modifier"> Bullet modifier
                                </h3>

                                <p> To apply a bullet to a heading, add the <code>
                                        .uk-heading-bullet
                                    </code> class. You can combine it with any size modifier, and it works well with
                                    text
                                    alignment.</p>

                                <h6> PREVIEW </h6>



                                <div class="my-lg-5">
                                    <h1 class="uk-heading-bullet">Heading Bullet</h1>
                                </div>

                                <pre><code id="code-jw0floru" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-bullet"</span>&gt;</span>Heading Bullet<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span></code></pre>



                                <h3 class="uk-margin-medium-top border-top-0" id="Line-modifier"> Line modifier </h3>

                                <p> To apply a vertically centered line to a heading, add the
                                    <code>
                                        .uk-heading-line </code> class and place a <code> span </code> element inside
                                    the
                                    heading element.
                                    You can combine it with any size modifier, and it works well with text alignment.
                                </p>

                                <h6> PREVIEW </h6>

                                <div class="my-lg-5">

                                    <h1 class="uk-heading-line"><span>Heading Line</span></h1>

                                    <h1 class="uk-heading-line uk-text-center"><span>Heading Line</span></h1>

                                    <h1 class="uk-heading-line uk-text-right"><span>Heading Line</span></h1>

                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Line"> MARKUP</button>

                                    <div id="Line" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0florv" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-line"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Heading Line<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-line uk-text-center"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Heading Line<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-heading-line uk-text-right"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>Heading Line<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span></code></pre>



                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top border-top-0" id="Divider-small"> Divider small </h3>

                                <p>Add the <code>.uk-divider-small</code> class to a
                                    <code>&lt;hr&gt;</code> or <code>&lt;div&gt;</code> element to create a smaller
                                    divider. </p>
                                <h6> PREVIEW </h6>


                                <div class="my-lg-5">

                                    <h1> Heading text </h1>
                                    <hr class="uk-divider-small">

                                </div>

                                <pre><code id="code-jw0flort" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">h1</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-divider-small"</span>&gt;</span>Heading Text<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span></code></pre>



                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Introduction" uk-scroll> Introduction </a></li>
                                    <li> <a href="#Divider-modifier" uk-scroll> Divider modifier </a></li>
                                    <li> <a href="#Bullet-modifier" uk-scroll> Bullet modifier </a></li>
                                    <li> <a href="#Line-modifier" uk-scroll> Line modifier </a></li>
                                    <li> <a href="#Divider-small" uk-scroll> Divider small </a></li>
                                </ul>

                            </div>

                        </div>


                    </li>


                    <!-- icons-->

                    <li>
                        <h2> Icons</h2>
                        <p class="mb-4"> Place scalable vector icons anywhere in your content. </p>

                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">
                                <h3 class="uk-margin-medium-top first" id="Available Icons"> Available Icons </h3>


                                <p> You have access to more than thousands icons provided freely
                                    by FontAwesome, Material icons, Line Awesome Icons, and Feather icons. </p>

                                <div class="uk-child-width-1-2@s uk-grid-small" uk-grid>
                                    <div>
                                        <a href="https://material.io/tools/icons/" class="uk-link-reset"
                                            target="_blank">
                                            <img src="../assets/images/demos/material-icons.jpg" alt=""
                                                class="animate-this shadow--hover rounded">
                                            <p>Feather icons</p>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://feathericons.com/" class="uk-link-reset" target="_blank">
                                            <img src="../assets/images/demos/feather-icons.jpg" alt=""
                                                class="animate-this shadow--hover rounded">
                                            <p>Material icons</p>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://icons8.com/line-awesome" class="uk-link-reset" target="_blank">
                                            <img src="../assets/images/demos/line-awesome-icons.jpg" alt=""
                                                class="animate-this shadow--hover rounded">
                                            <p>Line Awesome Icons</p>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://fontawesome.com/" class="uk-link-reset" target="_blank">
                                            <img src="../assets/images/demos/fontawesome-icons.jpg" alt=""
                                                class="animate-this shadow--hover rounded">
                                            <p>Font Awesome</p>
                                        </a>
                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Icon-size"> Icon size </h3>



                                <p>You can use <code>.icon-tiny</code> <code>.icon-small</code>
                                    <code>.icon-medium</code>
                                    <code>.icon-large</code><code>.icon-xlarge</code> and <code>.icon-xxlarge</code>
                                    . </p>
                                <br>

                                <i class="icon-feather-folder icon-tiny"></i>
                                <i class="icon-feather-folder icon-small"></i>
                                <i class="icon-feather-folder icon-medium"></i>
                                <i class="icon-feather-folder icon-large"></i>
                                <i class="icon-feather-folder icon-xlarge"></i>
                                <i class="icon-feather-folder icon-xxlarge"></i>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Icon-size">SHOW CODE</button>

                                    <div id="Icon-size" aria-hidden="true" class="uk-margin-small-top" hidden>
                                        <pre><code id="code-k0rq7kbr" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"icon-feather-folder icon-tiny"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"icon-feather-folder icon-small"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"icon-feather-folder icon-medium"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"icon-feather-folder icon-large"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"icon-feather-folder icon-xlarge"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"icon-feather-folder icon-xxlarge"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span></code></pre>

                                    </div>
                                </div>


                                <h4 id="Button-with-icon" aria-hidden="false">Button with icon </h3>

                                    <div class="uk-margin">
                                        <button type="button" class="button primary icon-label">
                                            <span class="inner-icon"><i class="icon-feather-play"></i></span>
                                            <span class="inner-text">Play now</span>
                                        </button>
                                        <button type="button" class="button primary icon-label bg-facebook">
                                            <span class="inner-icon"><i class="icon-brand-facebook-f"></i></span>
                                            <span class="inner-text">Facebook</span>
                                        </button>
                                        <button type="button" class="button success icon-label">
                                            <span class="inner-icon"><i class="icon-feather-shopping-cart"></i></span>
                                            <span class="inner-text">Add to cart</span>
                                        </button>
                                        <button type="button" class="button danger icon-label">
                                            <span class="inner-icon"><i class="icon-feather-trash"></i></span>
                                            <span class="inner-text">Delete item</span>
                                        </button>
                                    </div>

                                    <div class="uk-margin">
                                        <button type="button" class="button dark icon-label">
                                            <span class="inner-text">Next step</span>
                                            <span class="inner-icon">
                                                <i class="icon-feather-chevron-right"></i>
                                            </span>
                                        </button>
                                        <button type="button" class="button secondary icon-label">
                                            <span class="inner-text">Add to cart</span>
                                            <span class="inner-icon">
                                                <i class="icon-feather-shopping-cart"></i>
                                            </span>
                                        </button>
                                        <button type="button" class="button danger icon-label">
                                            <span class="inner-text">Delete item</span>
                                            <span class="inner-icon">
                                                <i class="icon-feather-trash"></i>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="uk-margin">

                                        <button class="button outline-primary transition-3d-hover">
                                            <i class="icon-feather-shopping-cart mr-2"></i> Buy now
                                        </button>

                                        <button class="button primary transition-3d-hover">
                                            <i class="icon-feather-trash-2 mr-2"></i> Delete
                                        </button>

                                    </div>


                                    <h4 id="animation">Button with icon animation </h3>

                                        <div class="uk-margin">
                                            <button type="button" class="button primary animated-x">
                                                <span class="inner-visible">Next step</span>
                                                <span class="inner-hidden"><i
                                                        class="icon-feather-arrow-right"></i></span>
                                            </button>
                                            <button type="button" class="button secondary animated-y">
                                                <span class="inner-hidden">Buy</span>
                                                <span class="inner-visible"><i
                                                        class="icon-feather-shopping-cart"></i></span>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="button button-default Markup-botton  uk-margin-small-top"
                                                type="button" uk-toggle="target: #Button-with-icon">
                                                MARKUP</button>
                                            <div id="Button-with-icon" aria-hidden="true" class="uk-margin-small-top"
                                                hidden="">

                                                <pre><code id="code-k0rq7kbr" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button primary transition-3d-hover"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"icon-feather-shopping-cart mr-2"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span> Buy now
<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button outline-primary transition-3d-hover"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"icon-feather-shopping-cart mr-2"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span> Buy now
<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">button</span>  <span class="hljs-attr">class</span>=<span class="hljs-string">"button danger icon-label bg-facebook"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"inner-icon"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"fas fa-play"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"inner-text"</span>&gt;</span>Watch now <span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span></code></pre>


                                            </div>
                                        </div>



                                        <div class="uk-margin">
                                            <span class="iconbox iconbox-xs">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox iconbox-sm">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox iconbox-lg">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox iconbox-xl">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox iconbox-xxl">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <br>
                                            <br>

                                            <span class="iconbox iconbox-xs">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox iconbox-sm button outline-danger circle">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox iconbox-lg button danger">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox iconbox-xl button outline-danger circle">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                            <span class="iconbox iconbox-xxl">
                                                <i class="icon-feather-tv"></i>
                                            </span>

                                        </div>



                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Available-Icons" uk-scroll> Available Icons </a></li>
                                    <li> <a href="#Icon-size" uk-scroll> Icon-size </a></li>
                                    <li> <a href="#Button-icons" uk-scroll> Button icons </a></li>
                                    <li> <a href="#Button-animation" uk-scroll> Button animation </a></li>
                                    <li> <a href="#Button-with-icon" uk-scroll> Button with icon </a></li>
                                </ul>

                            </div>

                        </div>

                    </li>



                    <!-- List -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> List</h2>
                                <p class="mb-4"> Easily create nice looking lists, which come in different styles. </p>

                                <p id="Introduction" class="mb-4"> To apply this component, add the
                                    <code>.uk-list</code>
                                    class to
                                    an unordered or ordered list. The list will now display without any spacing or
                                    list-style.
                                </p>

                                <ul class="uk-list">
                                    <li>List item 1</li>
                                    <li>List item 2</li>
                                    <li>List item 3</li>
                                </ul>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #list"> MARKUP</button>

                                    <div id="list" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0fu66q" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-list"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>



                                    </div>
                                </div>
                                <h3 class="uk-margin-medium-top" id="Bullet-modifier">Bullet modifier </h3>


                                <p class="mb-4"> Add the <code> .uk-list-bullet</code> class to display
                                    bullets in
                                    front of the list items.
                                </p>

                                <div class="uk-width-1-2@m">

                                    <ul class="uk-list uk-list-bullet">
                                        <li>List item 1</li>
                                        <li>List item 2</li>
                                        <li>List item 3</li>
                                    </ul>

                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Bullet"> MARKUP</button>

                                    <div id="Bullet" aria-hidden="true" class="uk-margin-small-top" hidden>



                                        <pre><code id="code-jw0fu66r" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-list uk-list-bullet"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>


                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="Divider-modifier">Divider modifier </h3>

                                <p class="mb-4">Add the <code>.uk-list-divider</code> class to separate
                                    list items
                                    with lines.
                                </p>

                                <div class="uk-width-1-2@m">

                                    <ul class="uk-list uk-list-divider">
                                        <li>List item 1</li>
                                        <li>List item 2</li>
                                        <li>List item 3</li>
                                    </ul>

                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Divider"> MARKUP</button>

                                    <div id="Divider" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fu66s" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-list uk-list-divider"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>



                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="Striped-modifier">Striped modifier </h3>

                                <p class="mb-4">Add the <code>.uk-list-divider</code> class to separate
                                    list items
                                    with lines.
                                </p>

                                <div class="uk-width-1-2@m">

                                    <ul class="uk-list uk-list-striped">
                                        <li>List item 1</li>
                                        <li>List item 2</li>
                                        <li>List item 3</li>
                                    </ul>

                                </div>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Striped"> MARKUP</button>

                                    <div id="Striped" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fu66t" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-list uk-list-striped"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>


                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Large-modifier">Large modifier </h3>

                                <p class="mb-4">Add the <code>.uk-list-large</code> class to increase the
                                    spacing
                                    between list items. You can combine this with any of the other list modifiers.
                                </p>
                                <div class="uk-child-width-expand@m uk-child-width-1-2 uk-grid-small" uk-grid>

                                    <div>
                                        <h4>Default</h4>
                                        <ul class="uk-list uk-list-large">
                                            <li>List item 1</li>
                                            <li>List item 2</li>
                                            <li>List item 3</li>
                                        </ul>
                                    </div>

                                    <div>
                                        <h4>Divider</h4>
                                        <ul class="uk-list uk-list-large uk-list-divider">
                                            <li>List item 1</li>
                                            <li>List item 2</li>
                                            <li>List item 3</li>
                                        </ul>
                                    </div>

                                    <div>
                                        <h4>Striped</h4>
                                        <ul class="uk-list uk-list-large uk-list-striped">
                                            <li>List item 1</li>
                                            <li>List item 2</li>
                                            <li>List item 3</li>
                                        </ul>
                                    </div>

                                    <div>
                                        <h4>Bullet</h4>
                                        <ul class="uk-list uk-list-large uk-list-bullet">
                                            <li>List item 1</li>
                                            <li>List item 2</li>
                                            <li>List item 3</li>
                                        </ul>
                                    </div>

                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Accordion"> MARKUP</button>

                                    <div id="Accordion" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fu66u" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-expand@s"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Default<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-list uk-list-large"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Divider<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-list uk-list-large uk-list-divider"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Striped<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-list uk-list-large uk-list-striped"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">h4</span>&gt;</span>Bullet<span class="hljs-tag">&lt;/<span class="hljs-name">h4</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-list uk-list-large uk-list-bullet"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 1<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 2<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>List item 3<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>



                                    </div>
                                </div>


                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Introduction" uk-scroll> Introduction </a></li>
                                    <li> <a href="#Bullet-modifier" uk-scroll> Bullet modifier </a></li>
                                    <li> <a href="#Divider-modifier" uk-scroll> Divider modifier </a></li>
                                    <li> <a href="#Striped-modifier" uk-scroll> Striped modifier </a></li>
                                    <li> <a href="#Large-modifier" uk-scroll> Large modifier </a></li>
                                </ul>

                            </div>

                        </div>

                    </li>



                    <!-- pagination -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> pagination</h2>
                                <p class="mb-4"> Easily create a nice looking pagination to navigate through pages. </p>


                                <p class="Introduction">The Pagination component consists of button-like styled links,
                                    that are aligned side by side in a horizontal list.</p>
                                <h6> PREVIEW</h6>
                                <ul class="uk-pagination" uk-margin>
                                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="uk-disabled"><span>...</span></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="uk-active"><span>7</span></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">9</a></li>
                                    <li><a href="#">10</a></li>
                                    <li class="uk-disabled"><span>...</span></li>
                                    <li><a href="#">20</a></li>
                                    <li><a href="#"><span uk-pagination-next></span></a></li>
                                </ul>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Pagination"> MARKUP</button>

                                    <div id="Pagination" aria-hidden="true" class=" uk-margin-small-top" hidden="">
                                        <pre><code id="code-k0p3uwie" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-pagination"</span> <span class="hljs-attr">uk-margin</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">uk-pagination-previous</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-disabled"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>4<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>9<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>10<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-disabled"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>20<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">uk-pagination-next</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>
                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Alignment"> Alignment </h3>
                                <p> The pagination component utilizes flexbox, so navigations can easily be aligned with
                                    the <a href="flex.html"> Flex component</a> .</p>
                                <pre><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-pagination uk-flex-center"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>
                                <h6> PREVIEW</h6>

                                <ul class="uk-pagination" uk-margin>
                                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="uk-disabled"><span>...</span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="uk-active"><span>7</span></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#"><span uk-pagination-next></span></a></li>
                                </ul>

                                <ul class="uk-pagination uk-flex-center uk-margin-medium-top" uk-margin>
                                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="uk-disabled"><span>...</span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="uk-active"><span>7</span></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#"><span uk-pagination-next></span></a></li>
                                </ul>

                                <ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
                                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="uk-disabled"><span>...</span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="uk-active"><span>7</span></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#"><span uk-pagination-next></span></a></li>
                                </ul>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Pagination-Alignment"> MARKUP</button>

                                    <div id="Pagination-Alignment" aria-hidden="true" class=" uk-margin-small-top"
                                        hidden="">
                                        <pre><code id="code-jnprsyhu" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-pagination"</span> <span class="hljs-attr">uk-margin</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">uk-pagination-previous</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-disabled"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">uk-pagination-next</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-pagination uk-flex-center"</span> <span class="hljs-attr">uk-margin</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">uk-pagination-previous</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-disabled"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">uk-pagination-next</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-pagination uk-flex-right uk-margin-medium-top"</span> <span class="hljs-attr">uk-margin</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">uk-pagination-previous</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-disabled"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>5<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>6<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span>&gt;</span>7<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>8<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">uk-pagination-next</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>
                                    </div>
                                </div>



                                <h3 class="uk-margin-medium-top" id="Previous-and-next"> Previous and next </h3>
                                <p>To apply a previous and next button, add the <code>uk-pagination-previous</code> or
                                    <code>uk-pagination-next</code> attribute to a <code>&lt;span&gt;</code> element
                                    inside a pagination item.</p>
                                <h6> PREVIEW</h6>
                                <ul class="uk-pagination">
                                    <li><a href="#"><span class="uk-margin-small-right" uk-pagination-previous></span>
                                            Previous</a></li>
                                    <li class="uk-margin-auto-left"><a href="#">Next <span class="uk-margin-small-left"
                                                uk-pagination-next></span></a></li>
                                </ul>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Pagination-Previous-next"> MARKUP</button>

                                    <div id="Pagination-Previous-next" aria-hidden="true" class=" uk-margin-small-top"
                                        hidden="">
                                        <pre><code id="code-jnprsyhv" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-pagination"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin-small-right"</span> <span class="hljs-attr">uk-pagination-previous</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> Previous<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin-auto-left"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Next <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin-small-left"</span> <span class="hljs-attr">uk-pagination-next</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>
                                    </div>
                                </div>










                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Introduction" uk-scroll> Introduction </a></li>
                                    <li> <a href="#Alignment" uk-scroll> Alignment </a></li>
                                    <li> <a href="#Previous-and-next" uk-scroll> Previous and next </a></li>
                                </ul>

                            </div>

                        </div>

                    </li>


                    <!-- Position -->

                    <li>

                        <h2> Position</h2>
                        <p class="mb-4"> A collection of utility classes to position content</p>

                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <p>To apply this component, add one of the <code>.uk-position-*</code> classes to a
                                    block element.
                                    When using this component to place content on top of an image, add the
                                    <code>.uk-inline</code>
                                    class from the <a href="https://getuikit.com/docs/utility">Utility component</a> to
                                    a container
                                    element around the image and the element to create a position context.</p>

                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-position-top</code></td>
                                                <td align="left">Positions the element at the top.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-position-left</code></td>
                                                <td align="left">Positions the element at the left.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-position-right</code></td>
                                                <td align="left">Positions the element at the right.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-position-bottom</code></td>
                                                <td align="left">Positions the element at the bottom.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="uk-inline uk-margin">

                                    <img src="../assets/images/demos/elements/image.jpg" alt="">

                                    <div class="uk-position-top uk-overlay uk-overlay-default uk-text-center">Top</div>
                                    <div class="uk-position-bottom uk-overlay uk-overlay-default uk-text-center">Bottom
                                    </div>
                                    <div class="uk-position-left uk-overlay uk-overlay-default uk-flex uk-flex-middle">
                                        Left
                                    </div>
                                    <div class="uk-position-right uk-overlay uk-overlay-default uk-flex uk-flex-middle">
                                        Right</div>

                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #basic"> MARKUP</button>

                                    <div id="basic" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0fzy4l" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-inline uk-margin"</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/photo.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-top uk-overlay uk-overlay-default uk-text-center"</span>&gt;</span>Top<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-bottom uk-overlay uk-overlay-default uk-text-center"</span>&gt;</span>Bottom<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-left uk-overlay uk-overlay-default uk-flex uk-flex-middle"</span>&gt;</span>Left<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-right uk-overlay uk-overlay-default uk-flex uk-flex-middle"</span>&gt;</span>Right<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>


                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="directions">X and Y directions </h3>


                                <p>You can also apply more specific positions that won't
                                    spread over
                                    one side of the parent container by adding one of the following classes. </p>


                                <div class="uk-inline">

                                    <img src="../assets/images/demos/elements/image.jpg" alt="">

                                    <div class="uk-position-top-left uk-overlay uk-overlay-default">Top Left</div>
                                    <div class="uk-position-top-center uk-overlay uk-overlay-default">Top Center</div>
                                    <div class="uk-position-top-right uk-overlay uk-overlay-default">Top Right</div>
                                    <div class="uk-position-center-left uk-overlay uk-overlay-default">Center Left</div>
                                    <div class="uk-position-center uk-overlay uk-overlay-default">Center</div>
                                    <div class="uk-position-center-right uk-overlay uk-overlay-default">Center Right
                                    </div>
                                    <div class="uk-position-bottom-left uk-overlay uk-overlay-default">Bottom Left</div>
                                    <div class="uk-position-bottom-center uk-overlay uk-overlay-default">Bottom Center
                                    </div>
                                    <div class="uk-position-bottom-right uk-overlay uk-overlay-default">Bottom Right
                                    </div>

                                </div>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #directions"> MARKUP</button>

                                    <div id="directions" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fzy4m" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-inline"</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/photo.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-top-left uk-overlay uk-overlay-default"</span>&gt;</span>Top Left<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-top-center uk-overlay uk-overlay-default"</span>&gt;</span>Top Center<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-top-right uk-overlay uk-overlay-default"</span>&gt;</span>Top Right<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-center-left uk-overlay uk-overlay-default"</span>&gt;</span>Center Left<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-center uk-overlay uk-overlay-default"</span>&gt;</span>Center<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-center-right uk-overlay uk-overlay-default"</span>&gt;</span>Center Right<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-bottom-left uk-overlay uk-overlay-default"</span>&gt;</span>Bottom Left<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-bottom-center uk-overlay uk-overlay-default"</span>&gt;</span>Bottom Center<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-bottom-right uk-overlay uk-overlay-default"</span>&gt;</span>Bottom Right<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>


                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="Cover">Cover </h3>
                                <p>If you want a position element to cover its container,
                                    just add
                                    the <code>.uk-position-cover</code> class. </p>

                                <div class="uk-inline">

                                    <img src="../assets/images/demos/elements/image.jpg" alt="">

                                    <div
                                        class="uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                        Cover</div>

                                </div>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Cover"> MARKUP</button>

                                    <div id="Cover" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fzy4n" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-inline"</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/photo.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle"</span>&gt;</span>Cover<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>


                                    </div>
                                </div>
                                <h3 class="uk-margin-medium-top" id="Small-modifier">Small modifier </h3>
                                <p> To apply a small margin to positioned elements, add the
                                    <code>.uk-position-small</code> or <code>.uk-position-medium</code> and
                                    <code>.uk-position-large</code> class. </p>

                                <div class="uk-inline uk-margin">

                                    <img src="../assets/images/demos/elements/image.jpg" alt="">

                                    <div class="uk-position-small uk-position-top-left uk-overlay uk-overlay-default">
                                        Top
                                        Left</div>
                                    <div class="uk-position-small uk-position-top-center uk-overlay uk-overlay-default">
                                        Top
                                        Center
                                    </div>
                                    <div class="uk-position-small uk-position-top-right uk-overlay uk-overlay-default">
                                        Top
                                        Right
                                    </div>
                                    <div
                                        class="uk-position-small uk-position-center-left uk-overlay uk-overlay-default">
                                        Center Left
                                    </div>
                                    <div class="uk-position-small uk-position-center uk-overlay uk-overlay-default">
                                        Center
                                    </div>
                                    <div
                                        class="uk-position-small uk-position-center-right uk-overlay uk-overlay-default">
                                        Center
                                        Right</div>
                                    <div
                                        class="uk-position-small uk-position-bottom-left uk-overlay uk-overlay-default">
                                        Bottom Left
                                    </div>
                                    <div
                                        class="uk-position-small uk-position-bottom-center uk-overlay uk-overlay-default">
                                        Bottom
                                        Center</div>
                                    <div
                                        class="uk-position-small uk-position-bottom-right uk-overlay uk-overlay-default">
                                        Bottom
                                        Right</div>

                                </div>

                                <div class="uk-inline uk-margin">

                                    <img src="../assets/images/demos/elements/image.jpg" alt="">

                                    <div
                                        class="uk-position-small uk-position-top uk-overlay uk-overlay-default uk-text-center">
                                        Top
                                    </div>
                                    <div
                                        class="uk-position-small uk-position-bottom uk-overlay uk-overlay-default uk-text-center">
                                        Bottom</div>
                                    <div
                                        class="uk-position-small uk-position-left uk-overlay uk-overlay-default uk-flex uk-flex-middle">
                                        Left</div>
                                    <div
                                        class="uk-position-small uk-position-right uk-overlay uk-overlay-default uk-flex uk-flex-middle">
                                        Right</div>

                                </div>

                                <div class="uk-inline uk-margin">

                                    <img src="../assets/images/demos/elements/image.jpg" alt="">

                                    <div
                                        class="uk-position-small uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                        Cover</div>

                                </div>

                                <div class="uk-width-2-3@m mt-md m-auto">
                                    <div class="uk-inline-block uk-width-large">

                                        <img src="../assets/images/demos/elements/image.jpg" alt="">

                                        <div
                                            class="uk-position-small uk-position-center-left-out uk-overlay uk-overlay-primary uk-visible@s">
                                            Out</div>
                                        <div
                                            class="uk-position-small uk-position-center-right-out uk-overlay uk-overlay-primary uk-visible@s">
                                            Out</div>

                                    </div>
                                </div>



                                <h3 class="uk-margin-medium-top" id="Utility-classes">Utility classes </h3>

                                <p>This component features a number of general position
                                    utility
                                    classes: </p>

                                <div class="uk-overflow-auto uk-margin-medium">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-position-relative</code></td>
                                                <td align="left">Add this class to apply relative positioning.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-position-absolute</code></td>
                                                <td align="left">Add this class to apply absolute positioning.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-position-fixed</code></td>
                                                <td align="left">Add this class to apply fixed positioning.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-position-z-index</code></td>
                                                <td align="left">Add this class to apply a z-index of 1.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <h3 class="uk-margin-medium-top" id="Outside">Outside</h3>


                                <p>There are two classes to center elements outside on the left and right of the parent
                                    container.
                                    This is useful to
                                    position the Slidenav component outside of an <a href="slideshow.html">Slideshow</a>
                                    or <a href="slider.html">Slider</a> component.</p>

                                <div class="uk-inline">

                                    <img src="../assets/images/demos/elements/image.jpg" alt="">

                                    <div class="uk-position-center-left-out uk-overlay uk-overlay-primary uk-visible@s">
                                        Out</div>
                                    <div
                                        class="uk-position-center-right-out uk-overlay uk-overlay-primary uk-visible@s">
                                        Out</div>

                                </div>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Outside"> MARKUP</button>

                                    <div id="Outside" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0fzy4o" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-inline"</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/photo.jpg"</span> <span class="hljs-attr">alt</span>=<span class="hljs-string">""</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-center-left-out uk-overlay uk-overlay-primary uk-visible@s"</span>&gt;</span>Out<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-position-center-right-out uk-overlay uk-overlay-primary uk-visible@s"</span>&gt;</span>Out<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>



                                    </div>
                                </div>
                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Introduction" uk-scroll> Introduction </a></li>
                                    <li> <a href="#directions" uk-scroll> directions </a></li>
                                    <li> <a href="#Cover" uk-scroll> Cover </a></li>
                                    <li> <a href="#Small-modifier" uk-scroll> Small modifier </a></li>
                                    <li> <a href="#Utility-classes" uk-scroll> Utility classes </a></li>
                                    <li> <a href="#Outside" uk-scroll> Outside </a></li>
                                </ul>
                            </div>

                        </div>

                    </li>


                    <!-- Table -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> Table</h2>
                                <p class="mb-4"> Easily create nice looking tables, which come in different styles.</p>


                                <p id="Introduction"> To apply this component, add the <code>.uk-table</code> class
                                    to a <code>&lt;table&gt;</code> element. element. </p>


                                <table class="uk-table">
                                    <thead>
                                        <tr>
                                            <th>Table Heading</th>
                                            <th>Table Heading</th>
                                            <th>Table Heading</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Table Footer</td>
                                            <td>Table Footer</td>
                                            <td>Table Footer</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #basic"> MARKUP</button>

                                    <div id="basic" aria-hidden="true" class="uk-margin-small-top" hidden>



                                        <pre><code id="code-jw0g6qet" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-table"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">caption</span>&gt;</span>Table Caption<span class="hljs-tag">&lt;/<span class="hljs-name">caption</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tfoot</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Footer<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Footer<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Footer<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tfoot</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>


                                    </div>
                                </div>
                                <h3 class="uk-margin-medium-top " id="Divider modifier"> Divider modifier </h3>

                                <div class="uk-margin-medium">
                                    <pre><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-table uk-table-divider"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                                </div>

                                <p> Add the <code>.uk-table-divider</code> class to display a
                                    divider
                                    between table rows. </p>

                                <table class="uk-table uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th>Table Heading</th>
                                            <th>Table Heading</th>
                                            <th>Table Heading</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                    </tbody>
                                </table>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #divider"> MARKUP</button>

                                    <div id="divider" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0g6qeu" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-table uk-table-divider"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>


                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top " id="Striped modifier"> Striped modifier </h3>

                                <div class="uk-margin-medium">
                                    <pre><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-table uk-table-striped"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>
                                </div>

                                <p>Add zebra-striping to a table by adding the <code>
                                        .uk-table-striped</code> class.
                                </p>

                                <table class="uk-table uk-table-striped">
                                    <thead>
                                        <tr>
                                            <th>Table Heading</th>
                                            <th>Table Heading</th>
                                            <th>Table Heading</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                    </tbody>
                                </table>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Striped"> MARKUP</button>

                                    <div id="Striped" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0g6qev" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-table uk-table-striped"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span></code></pre>



                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top " id="Responsive-table"> Responsive table</h3>




                                <div class="uk-margin-medium">
                                    <pre><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-overflow-auto"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-table"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
                                </div>



                                <p>If your table happens to be wider than its container element
                                    or
                                    would eventually get too big on a specific viewport width, just wrap it inside a
                                    <code>&lt;div&gt;</code> element and add the <code>.uk-overflow-auto</code> class ..
                                    This
                                    creates a container that provides a
                                    horizontal scrollbar whenever the elements inside it are wider than the container
                                    itself
                                </p>

                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-small uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                                <th>Table Heading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                            </tr>
                                            <tr>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                            </tr>
                                            <tr>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Accordion"> MARKUP</button>

                                    <div id="Accordion" aria-hidden="true" class="uk-margin-small-top" hidden>




                                        <pre><code id="code-jw0g6qf0" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-overflow-auto"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-table uk-table-small uk-table-divider"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">th</span>&gt;</span>Table Heading<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span>Table Data<span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>



                                    </div>
                                </div>


                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Introduction" uk-scroll> Basic </a></li>
                                    <li> <a href="#Divider modifier" uk-scroll> Divider modifier </a></li>
                                    <li> <a href="#Striped modifier" uk-scroll> Striped modifier </a></li>
                                    <li> <a href="#Responsive-table" uk-scroll> Responsive table </a></li>
                                </ul>

                            </div>

                        </div>

                    </li>


                    <!-- Tab -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> Tab</h2>
                                <p class="mb-4"> Create a tabbed navigation with different styles. </p>


                                <p> The tab component consists of clickable tabs, that are
                                    aligned side by side in a list. Its JavaScript functionality extends the <a
                                        href="https://getuikit.com/docs/switcher">Switcher component</a> and is
                                    necessary to
                                    dynamically transition through different contents using the tabbed navigation.</p>

                                <ul uk-tab>
                                    <li class="uk-active"><a href="#">Left</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-disabled"><a>Disabled</a></li>
                                </ul>

                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #basic"> MARKUP</button>

                                    <div id="basic" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0g6dd8" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">uk-tab</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Left<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-disabled"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span>&gt;</span>Disabled<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>

                                    </div>
                                </div>


                                <h3 class=" uk-margin-medium-top " id="Bottom-modifier"> Bottom modifier </h3>


                                <p> Add the <code>.uk-tab-bottom</code> class to flip tab items
                                    to the bottom. </p>

                                <ul class="uk-tab-bottom" uk-tab>
                                    <li class="uk-active"><a href="#">Left</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>


                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Bottom-modifier"> MARKUP</button>

                                    <div id="Bottom-modifier" aria-hidden="true" class="uk-margin-small-top" hidden>

                                        <pre><code id="code-jw0g6dd9" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-tab-bottom"</span> <span class="hljs-attr">uk-tab</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Left<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>

                                    </div>
                                </div>



                                <h3 class=" uk-margin-medium-top " id="Left/Right-modifier"> Left/Right modifier </h3>

                                <p class="mb-sm"> Add the <code>.uk-tab-left</code> or
                                    <code>.uk-tab-right</code> class to align tabs vertically to the left or right side.
                                    To
                                    save space, the alignment automatically switches back to horizontal when the
                                    viewport
                                    width goes below 960px. </p>

                                <div class="uk-width-1-2@s m-auto">
                                    <div class="uk-child-width-1-2@s" uk-grid>
                                        <div>
                                            <ul class="uk-tab-left" uk-tab>
                                                <li class="uk-active"><a href="#">Left</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>

                                        <div>
                                            <ul class="uk-tab-right" uk-tab>
                                                <li class="uk-active"><a href="#">Right</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Left-and-Right-modifier"> MARKUP</button>

                                    <div id="Left-and-Right-modifier" aria-hidden="true" class="uk-margin-small-top"
                                        hidden>


                                        <pre><code id="code-jw0g6dda" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-2@s"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-tab-left"</span> <span class="hljs-attr">uk-tab</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Left<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-tab-right"</span> <span class="hljs-attr">uk-tab</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Right<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>


                                    </div>
                                </div>


                                <h3 class=" uk-margin-medium-top " id="Alignment">Alignment </h3>

                                <p> You can combine tabs with the <a href="flex.html">Flex
                                        component</a> or the <a href="grid.html">Width component</a> to modify the
                                    alignment
                                    of the navigations. </p>

                                <div class="uk-margin-medium-top">
                                    <ul class="uk-flex-center" uk-tab>
                                        <li class="uk-active"><a href="#">Center</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>

                                <div class="uk-margin-medium-top">

                                    <ul class="uk-flex-right" uk-tab>
                                        <li class="uk-active"><a href="#">Right</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>

                                <div class="uk-margin-medium-top">

                                    <ul class="uk-child-width-expand" uk-tab>
                                        <li class="uk-active"><a href="#">Justify</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>




                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Alignment"> MARKUP</button>

                                    <div id="Alignment" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0g6ddb" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin-medium-top"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-flex-center"</span> <span class="hljs-attr">uk-tab</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Center<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-flex-right"</span> <span class="hljs-attr">uk-tab</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Right<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-expand"</span> <span class="hljs-attr">uk-tab</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Justify<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>




                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top " id="Tabs-and-Dropdown">Tabs and Dropdown </h3>


                                <p> Tabs can be used to trigger a dropdown menu from the <a
                                        href="https://getuikit.com/docs/dropdown">Dropdown component</a></p>

                                <ul uk-tab>
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li>
                                        <a href="#" class="dropdown-arrow">More <span class="uk-margin-small-left"
                                                uk-icon="icon: triangle-down"></span></a>
                                        <div uk-dropdown="mode: click">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li class="uk-active"><a href="#">Active</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li class="uk-nav-header">Header</li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Tabs-and-Dropdown"> MARKUP</button>

                                    <div id="Tabs-and-Dropdown" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0g6ddc" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">uk-tab</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Active<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>More <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-margin-small-left"</span> <span class="hljs-attr">uk-icon</span>=<span class="hljs-string">"icon: triangle-down"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">uk-dropdown</span>=<span class="hljs-string">"mode: click"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">ul</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-nav uk-dropdown-nav"</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Active<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-nav-header"</span>&gt;</span>Header<span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-nav-divider"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Item<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">ul</span>&gt;</span></code></pre>



                                    </div>
                                </div>

                                <h3 class="uk-margin-medium-top" id="light-Tabs"> light Tabs</h3>

                                <p> <code>.uk-light</code> to change your tabs to light and <a href="colors.html">
                                        background
                                        compunents </a> </p>

                                <div class="uk-light bg-grey">
                                    <ul class="uk-tab uk-light"
                                        uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                                        <li class="uk-active"><a href="#">Code Quality</a></li>
                                        <li><a href="#">Code convention</a></li>
                                        <li><a href="#">Code Quality</a></li>
                                    </ul>

                                    <ul class="uk-switcher uk-margin uk-padding-small pt-0">
                                        <!-- tab 1 -->
                                        <li>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh
                                                euismod
                                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                minim
                                                veniam, quis
                                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                                                ea commodo
                                                consequat.
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                                doming id
                                                qsuod
                                                mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                                                consectetuer
                                                adipiscing elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat. Ut
                                                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit lobortis
                                                nisl ut
                                                aliquip ex ea commodo consequat.</p>

                                            <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit
                                                lobortis nisl
                                                ut aliquip ex ea commodo consequat </p>
                                        </li>

                                        <!-- tab 2 -->
                                        <li>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh
                                                euismod
                                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                minim
                                                veniam, quis
                                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                                                ea commodo
                                                consequat.
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                                doming id
                                                qsuod
                                                mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                                                consectetuer
                                                adipiscing elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat. Ut
                                                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit lobortis
                                                nisl ut
                                                aliquip ex ea commodo consequat.</p>

                                            <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit
                                                lobortis nisl
                                                ut aliquip ex ea commodo consequat </p>

                                        </li>

                                        <!-- tab 3 -->
                                        <li>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh
                                                euismod
                                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                minim
                                                veniam, quis
                                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                                                ea commodo
                                                consequat.
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                                doming id
                                                qsuod
                                                mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                                                consectetuer
                                                adipiscing elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat. Ut
                                                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit lobortis
                                                nisl ut
                                                aliquip ex ea commodo consequat.</p>

                                            <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit
                                                lobortis nisl
                                                ut aliquip ex ea commodo consequat </p>
                                        </li>

                                        <!-- tab 4 -->
                                        <li>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh
                                                euismod
                                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                minim
                                                veniam, quis
                                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                                                ea commodo
                                                consequat.
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                                doming id
                                                qsuod
                                                mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                                                consectetuer
                                                adipiscing elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat. Ut
                                                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit lobortis
                                                nisl ut
                                                aliquip ex ea commodo consequat.</p>

                                            <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                suscipit
                                                lobortis nisl
                                                ut aliquip ex ea commodo consequat </p>

                                        </li>
                                    </ul>
                                </div>
                                <h3 class="uk-margin-medium-top " id="Advance-tab"> Advance tab</h3>


                                <p> Tabs can be used to trigger a dropdown menu from the <a
                                        href="dropdown.html">Dropdown
                                        component</a></p>

                                <div class="bg-grey uk-light uk-padding pb-0 rounded shadow">
                                    <h2>Awesome Title</h2>
                                    <p> With supporting text below as a natural lead-in to additional content. </p>

                                    <ul class="uk-tab"
                                        uk-switcher="connect: #component-tab-left; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                                        <li class="uk-active"><a href="#"> <i
                                                    class="icon-feather-home mr-2"></i>Home</a>
                                        </li>
                                        <li><a href="#"> <i class="icon-feather-message-square mr-2"></i> convention</a>
                                        </li>
                                        <li><a href="#"> <i class="icon-feather-settings mr-2"></i> settings</a></li>
                                    </ul>
                                </div>


                                <ul class="uk-switcher uk-margin" id="component-tab-left">
                                    <!-- tab 1 -->
                                    <li>
                                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                            minim veniam,
                                            quis
                                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                            commodo
                                            consequat.
                                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                            doming id qsuod
                                            mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing
                                            elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat.
                                            Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl
                                            ut
                                            aliquip ex ea commodo consequat.</p>

                                        <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                            suscipit lobortis
                                            nisl
                                            ut aliquip ex ea commodo consequat </p>
                                    </li>

                                    <!-- tab 2 -->
                                    <li>
                                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                            minim veniam,
                                            quis
                                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                            commodo
                                            consequat.
                                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                            doming id qsuod
                                            mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing
                                            elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat.
                                            Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl
                                            ut
                                            aliquip ex ea commodo consequat.</p>

                                        <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                            suscipit lobortis
                                            nisl
                                            ut aliquip ex ea commodo consequat </p>

                                    </li>

                                    <!-- tab 3 -->
                                    <li>
                                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                            minim veniam,
                                            quis
                                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                            commodo
                                            consequat.
                                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                            doming id qsuod
                                            mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing
                                            elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat.
                                            Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl
                                            ut
                                            aliquip ex ea commodo consequat.</p>

                                        <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                            suscipit lobortis
                                            nisl
                                            ut aliquip ex ea commodo consequat </p>
                                    </li>

                                    <!-- tab 4 -->
                                    <li>
                                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                            minim veniam,
                                            quis
                                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                            commodo
                                            consequat.
                                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                            doming id qsuod
                                            mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing
                                            elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat.
                                            Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl
                                            ut
                                            aliquip ex ea commodo consequat.</p>

                                        <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                            suscipit lobortis
                                            nisl
                                            ut aliquip ex ea commodo consequat </p>

                                    </li>
                                </ul>


                                <h3 class="uk-margin-medium-top " id="tab-width-icon"> tab width icon</h3>

                                <div uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <ul class="uk-tab-right shadow p-3 pl-0"
                                            uk-tab="connect: #component-tab-right; animation: uk-animation-fade">
                                            <li class="uk-active"><a href="#"> <i
                                                        class="icon-feather-home mr-2"></i>Home</a>
                                            </li>
                                            <li><a href="#"> <i class="icon-feather-message-square mr-2"></i>
                                                    convention</a></li>
                                            <li><a href="#"> <i class="icon-feather-settings mr-2"></i> settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="uk-width-expand@m">
                                        <ul id="component-tab-right" class="uk-switcher">
                                            <!-- tab 1 -->
                                            <li>
                                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad minim
                                                    veniam, quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex ea
                                                    commodo
                                                    consequat.
                                                    Nam liber tempor cum soluta nobis. <br> Eleifend option congue nihil
                                                    imperdiet
                                                    doming id qsuod
                                                    mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                                                    consectetuer
                                                    adipiscing elit,
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat
                                                    volutpat. Ut
                                                    wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis
                                                    nisl ut
                                                    aliquip ex ea commodo consequat.</p>

                                                <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis nisl
                                                    ut aliquip ex ea commodo consequat </p>

                                            </li>

                                            <!-- tab 2 -->
                                            <li>
                                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad minim
                                                    veniam, quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex ea
                                                    commodo
                                                    consequat.
                                                    Nam liber tempor cum soluta nobis. <br> Eleifend option congue nihil
                                                    imperdiet
                                                    doming id qsuod
                                                    mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                                                    consectetuer
                                                    adipiscing elit,
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat
                                                    volutpat. Ut
                                                    wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis
                                                    nisl ut
                                                    aliquip ex ea commodo consequat.</p>

                                                <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis nisl
                                                    ut aliquip ex ea commodo consequat </p>
                                            </li>

                                            <!-- tab 3 -->
                                            <li>
                                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad minim
                                                    veniam, quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex ea
                                                    commodo
                                                    consequat.
                                                    Nam liber tempor cum soluta nobis. <br> Eleifend option congue nihil
                                                    imperdiet
                                                    doming id qsuod
                                                    mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                                                    consectetuer
                                                    adipiscing elit,
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat
                                                    volutpat. Ut
                                                    wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis
                                                    nisl ut
                                                    aliquip ex ea commodo consequat.</p>

                                                <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis nisl
                                                    ut aliquip ex ea commodo consequat </p>
                                            </li>

                                            <!-- tab 4 -->
                                            <li>
                                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad minim
                                                    veniam, quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex ea
                                                    commodo
                                                    consequat.
                                                    Nam liber tempor cum soluta nobis. <br> Eleifend option congue nihil
                                                    imperdiet
                                                    doming id qsuod
                                                    mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                                                    consectetuer
                                                    adipiscing elit,
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat
                                                    volutpat. Ut
                                                    wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis
                                                    nisl ut
                                                    aliquip ex ea commodo consequat.</p>

                                                <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis nisl
                                                    ut aliquip ex ea commodo consequat </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                                <h3 class="uk-margin-medium-top " id="tab-responsive"> Responsive Tabs </h3>
                                <br>

                                <nav class="responsive-tab">
                                    <ul>
                                        <li class="uk-active"><a href="#">JavaScript</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">Freebie</a></li>
                                        <li><a href="#">Resources</a></li>
                                    </ul>
                                </nav>


                                <br>
                                <br>

                                <nav class="responsive-tab style-1">
                                    <ul>
                                        <li class="uk-active"><a href="#">JavaScript</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">Freebie</a></li>
                                        <li><a href="#">Resources</a></li>
                                    </ul>
                                </nav>

                                <br>
                                <br>


                                <nav class="responsive-tab style-2">
                                    <ul>
                                        <li class="uk-active"><a href="#">JavaScript</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">Freebie</a></li>
                                        <li><a href="#">Resources</a></li>
                                    </ul>
                                </nav>


                                <br>
                                <br>

                                <nav class="responsive-tab style-4">
                                    <ul>
                                        <li class="uk-active"><a href="#">JavaScript</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">Freebie</a></li>
                                        <li><a href="#">Resources</a></li>
                                    </ul>
                                </nav>

                                <br>
                                <br>


                                <div class="bg-grey uk-light uk-padding pb-0 rounded shadow">
                                        <h1>Awesome Title</h1>
                                        <p> With supporting text below as a natural lead-in to additional content. </p>
    
                                <nav class="responsive-tab style-5">
                                    <ul>
                                        <li class="uk-active"><a href="#">JavaScript</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">Freebie</a></li>
                                        <li><a href="#">Resources</a></li>
                                    </ul>
                                </nav>
                                </div>
                                <br>
                                <br>

                                </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Introduction" uk-scroll> backgrounds </a></li>
                                    <li> <a href="#Bottom-modifier" uk-scroll> Bottom modifier </a></li>
                                    <li> <a href="#Left/Right-modifier" uk-scroll> Left/Right modifier </a></li>
                                    <li> <a href="#Alignment" uk-scroll> Alignment </a></li>
                                    <li> <a href="#Tabs-and-Dropdown" uk-scroll> backgrounds </a></li>
                                    <li> <a href="#light-Tabs" uk-scroll>light Tabs </a></li>
                                    <li> <a href="#Advance-tab" uk-scroll> Advance tab </a></li>
                                    <li> <a href="#tab-width-icon" uk-scroll> tab width icon </a></li>
                                    <li> <a href="#tab-responisve" uk-scroll> tab width icon </a></li>
                                </ul>
                            </div>

                        </div>

                    </li>


                    <!-- Text -->

                    <li>


                        <div class="mt-4 uk-grid-large" uk-grid>

                            <div class="uk-width-3-4@s">

                                <h2> Text</h2>
                                <p class="mb-4"> A collection of useful text utility classes to style your content. </p>


                                <p>UIkit offers various text utilities to style your text. </p>


                                <table class="uk-table uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th align="left">Class</th>
                                            <th align="left">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="left"><code>.uk-text-lead</code></td>
                                            <td align="left"><span class="uk-text-lead">Add this class to highlight
                                                    text, for
                                                    example in article subtitles.</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><code>.uk-text-meta</code></td>
                                            <td align="left"><span class="uk-text-meta">Add this class to a paragraph
                                                    which
                                                    contains
                                                    meta data about an article or similar.</span></td>
                                        </tr>
                                    </tbody>
                                </table>




                                <h3 class="uk-margin-medium-top " id="Font-size"> Font size </h3>


                                <p> The following classes will modify the font size of your
                                    text..
                                </p>

                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-text-small</code></td>
                                                <td align="left"><span class="uk-text-small">Add this class to decrease
                                                        the font
                                                        size.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-large</code></td>
                                                <td align="left"><span class="uk-text-large">Add this class to increase
                                                        the font
                                                        size.</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>



                                <h3 class="uk-margin-medium-top " id="Text-wrapping"> Text wrapping </h3>

                                <p>Add one of these useful classes to wrap your text. </p>

                                <div class="uk-overflow-auto uk-margin-bottom">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-text-truncate</code></td>
                                                <td align="left">Prevents text from wrapping into multiple lines,
                                                    truncating it and
                                                    displaying an ellipsis instead.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-break</code></td>
                                                <td align="left">Breaks strings, if their length exceeds the width of
                                                    their container.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-nowrap</code></td>
                                                <td align="left">Prevents text from wrapping into multiple lines.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="uk-child-width-1-2@s" uk-grid>
                                    <div>
                                        <div class="uk-panel uk-panel-box uk-text-truncate">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua.</div>
                                    </div>
                                    <div>
                                        <div class="uk-panel uk-panel-box uk-text-break">
                                            Loremipsumdolorsitamet,consecteturadipiscingelit,seddoeiusmodtemporincididuntutlaboreetdoloremagnaaliqua.
                                        </div>
                                    </div>
                                </div>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Text-wrapping"> MARKUP</button>

                                    <div id="Text-wrapping" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0g6xg8" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-2@s"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-panel uk-panel-box uk-text-truncate"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-panel uk-panel-box uk-text-break"</span>&gt;</span>Loremipsumdolorsitamet,consecteturadipiscingelit,seddoeiusmodtemporincididuntutlaboreetdoloremagnaaliqua.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top " id="Text-transform"> Text transform </h3>

                                <p> The following classes will transform text into uppercased,
                                    capitalized or lowercased characters. </p>

                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-text-uppercase</code></td>
                                                <td align="left"><span class="uk-text-uppercase">Add this class to
                                                        transform
                                                        your
                                                        text to uppercase.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-capitalize</code></td>
                                                <td align="left"><span class="uk-text-capitalize">Add this class to
                                                        transform
                                                        your
                                                        text to capitalize.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-lowercase</code></td>
                                                <td align="left"><span class="uk-text-lowercase">Add this class to
                                                        transform
                                                        your
                                                        text to lowercase.</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <h3 class="uk-margin-medium-top " id="Text-Colour"> Text Colour </h3>


                                <p>Use one of these classes to apply a different color to text
                                    elements. </p>

                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-text-muted</code></td>
                                                <td align="left"><span class="uk-text-muted">Add this class to mute
                                                        text.</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-emphasis</code></td>
                                                <td align="left"><span class="uk-text-emphasis">Add this class to
                                                        emphasize
                                                        text.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-primary</code></td>
                                                <td align="left"><span class="uk-text-primary">Add this class to
                                                        emphasize text
                                                        with
                                                        the primary color.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-secondary</code></td>
                                                <td align="left"><span class="uk-text-secondary">Add this class to
                                                        emphasize
                                                        text
                                                        with the secondary color.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-success</code></td>
                                                <td align="left"><span class="uk-text-success">Add this class to
                                                        indicate
                                                        success.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-warning</code></td>
                                                <td align="left"><span class="uk-text-warning">Add this class to
                                                        indicate a
                                                        warning.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-danger</code></td>
                                                <td align="left"><span class="uk-text-danger">Add this class to indicate
                                                        danger.</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-info</code></td>
                                                <td align="left"><span class="uk-text-info">Add this class to indicate
                                                        informations.</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h3 class="uk-margin-medium-top " id="Text-alignment"> Text alignment </h3>

                                <p> Add one of these useful classes to align your text. </p>

                                <div class="uk-overflow-auto uk-margin-bottom">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-text-left</code></td>
                                                <td align="left">Aligns text to the left.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-right</code></td>
                                                <td align="left">Aligns text to the right.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-center</code></td>
                                                <td align="left">Centers text horizontally.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-justify</code></td>
                                                <td align="left">Justifies text.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="uk-child-width-1-3@s uk-grid-small" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small">
                                            <div class="uk-text-left uk-card-body">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                                <code>.uk-text-left</code>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small">
                                            <div class="uk-text-right uk-card-body">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                                <code>.uk-text-right</code>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small">
                                            <div class="uk-text-center uk-card-body">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                                <code>.uk-text-center</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <h3 class="uk-margin-medium-top " id="Vertical-alignment"> Vertical alignment </h3>

                                <p> Add one of these classes to vertically align text to an
                                    object.
                                </p>

                                <div class="uk-overflow-auto uk-margin-bottom">
                                    <table class="uk-table uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th align="left">Class</th>
                                                <th align="left">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="left"><code>.uk-text-top</code></td>
                                                <td align="left">Aligns text to the top.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-middle</code></td>
                                                <td align="left">Centers text vertically.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-bottom</code></td>
                                                <td align="left">Aligns text to the bottom.</td>
                                            </tr>
                                            <tr>
                                                <td align="left"><code>.uk-text-baseline</code></td>
                                                <td align="left">Aligns text to the baseline.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="uk-child-width-1-3@m uk-child-width-1-2@s mt-3" uk-grid>
                                    <div>
                                        <img src="../assets/images/avatars/avatar-1.jpg" width="50" height="50">
                                        <span class="uk-text-top">Lorem ipsum.</span>
                                    </div>
                                    <div>
                                        <img src="../assets/images/avatars/avatar-2.jpg" width="50" height="50">
                                        <span class="uk-text-middle">Lorem ipsum.</span>
                                    </div>
                                    <div>
                                        <img src="../assets/images/avatars/avatar-3.jpg" width="50" height="50">
                                        <span class="uk-text-bottom">Lorem ipsum.</span>
                                    </div>
                                </div>



                                <div>
                                    <button class="Markup-botton btn uk-margin-small-top" type="button"
                                        uk-toggle="target: #Vertical-alignment"> MARKUP</button>

                                    <div id="Vertical-alignment" aria-hidden="true" class="uk-margin-small-top" hidden>


                                        <pre><code id="code-jw0g6xg7" class="lang-html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-child-width-1-3@m uk-child-width-1-2@s"</span> <span class="hljs-attr">uk-grid</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/avatar.jpg"</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"50"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"50"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-text-top"</span>&gt;</span>Lorem ipsum.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/avatar.jpg"</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"50"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"50"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-text-middle"</span>&gt;</span>Lorem ipsum.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"images/avatar.jpg"</span> <span class="hljs-attr">width</span>=<span class="hljs-string">"50"</span> <span class="hljs-attr">height</span>=<span class="hljs-string">"50"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"uk-text-bottom"</span>&gt;</span>Lorem ipsum.<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>


                                    </div>
                                </div>



                                <h3 class="uk-margin-medium-top " id="Text-background"> Text background </h3>

                                <p> To apply a gradient or background image to text, add the
                                    <code>.uk-text-background</code> class to a <code>&lt;span&gt;</code> element inside
                                    the text element. Styles that don't define a <code>background-image</code>, will
                                    apply the primary color.</p>

                                <h1><span class="uk-text-background">Text background</span></h1>

                                <div class="mt-sm">

                                    <div>
                                        <button class="Markup-botton btn uk-margin-small-top" type="button"
                                            uk-toggle="target: #text-bg"> MARKUP</button>

                                        <div id="text-bg" aria-hidden="true" class="uk-margin-small-top" hidden>
                                            <span><code class="lang-html hljs xml"><span class="hljs-tag">&lt;<span
                                                            class="hljs-name">h1</span>&gt;</span><span
                                                        class="hljs-tag">&lt;<span class="hljs-name">span</span> <span
                                                            class="hljs-attr">class</span>=<span
                                                            class="hljs-string">"uk-text-background"</span>&gt;</span><span
                                                        class="hljs-tag">&lt;/<span
                                                            class="hljs-name">span</span>&gt;</span><span
                                                        class="hljs-tag">&lt;/<span
                                                            class="hljs-name">h1</span>&gt;</span></code></span>
                                        </div>

                                    </div>
                                </div>




                            </div>

                            <div class="uk-width-1-4@s uk-visible@s">
                                <ul class="uk-list docs-list" uk-sticky="offset:100;media : @m; top:20">
                                    <li> <a href="#Uikit" uk-scroll> Style modifiers </a></li>
                                    <li> <a href="#Font-size" uk-scroll>Font size </a></li>
                                    <li> <a href="#Text-wrapping" uk-scroll> Text wrapping </a></li>
                                    <li> <a href="#Text-transform" uk-scroll> Text transform </a></li>
                                    <li> <a href="#Text-Colour" uk-scroll> Text Colour </a></li>
                                    <li> <a href="#Text-alignment" uk-scroll> Text alignment </a></li>
                                    <li> <a href="#Vertical-alignment" uk-scroll> Vertical alignment </a></li>
                                    <li> <a href="#Text-background" uk-scroll> Text backgrounds </a></li>
                                </ul>

                            </div>

                        </div>

                    </li>


                </ul>



                <!-- footer
               ================================================== -->
                <div class="footer">
                    <div class="uk-grid-collapse" uk-grid>
                        <div class="uk-width-expand@s uk-first-column">
                            <p>© 2019 <strong>Courseplus</strong>. All Rights Reserved. </p>
                        </div>
                        <div class="uk-width-auto@s">
                            <nav class="footer-nav-icon">
                                <ul>
                                    <li><a href="#"><i class="icon-brand-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-brand-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icon-brand-youtube"></i></a></li>
                                    <li><a href="#"><i class="icon-brand-twitter"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>





    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>


    <!-- javaScripts
    ================================================== -->
    <script src="../assets/js/framework.js"></script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/simplebar.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>


</body>


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/development-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:59:02 GMT -->
</html>