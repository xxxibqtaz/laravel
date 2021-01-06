<!doctype html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/course-lesson-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:41 GMT -->
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




    <!-- Syntax Highlighter -->
    <link rel="stylesheet" type="text/css" href="../assets/syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="../assets/syntax-highlighter/styles/shCoreMidnight.css" media="all">
    <style>
        .gutter,
        .toolbar {
            display: none
        }

        .syntaxhighlighter {
            padding: 15px 20px;
        }

        .syntaxhighlighter {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            padding: 0 !important;
            padding-top: 18px !important;
        }
    </style>
</head>

<body>

    <!-- class ( is-open ) is activated sidebar video lists on small devices -->
    <div id="wrapper">


       <!-- Header Container
        ================================================== -->
        <header class="header uk-hidden@l" uk-sticky="top:20 ; cls-active:header-sticky">

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
                                <li><a href="#">Courses</a></li>
                                <li>Browse Web Development</li>
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

            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-width-3-4@m bg-white">

                    <ul id="video-slider" class="uk-switcher">

                        <li>
                            <!-- to autoplay video uk-video="automute: true" -->
                            <div class="embed-video">
                                <iframe src="https://www.youtube.com/embed/9gTw2EDkaDQ" frameborder="0"
                                    uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                            </div>

                        </li>
                        <li>
                            <div class="embed-video">
                                <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                                    uk-responsive></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="embed-video">
                                <iframe src="https://www.youtube.com/embed/CGSdK7FI9MY" frameborder="0" allowfullscreen
                                    uk-responsive></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="embed-video">
                                <iframe src="https://www.youtube.com/embed/4I1WgJz_lmA" frameborder="0" allowfullscreen
                                    uk-responsive></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="embed-video">
                                <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                                    uk-responsive></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="embed-video">
                                <iframe src="https://www.youtube.com/embed/CPcS4HtrUEU" frameborder="0" allowfullscreen
                                    uk-responsive></iframe>
                            </div>
                        </li>

                    </ul>



                    <!-- video description contents -->
                    <div class="p-lg-5 p-3">

                        <h2> HTML Full Course - Build a Website Tutorial </h2>

                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <span>299 views </span> • <span> Sep 18, 2019 </span>
                            </div>
                            <div class="uk-width-expand">

                                <nav class="responsive-tab">
                                    <ul class="text-right">
                                        <li><a href="#" uk-tooltip="title: Download; pos: top">
                                                <i class="icon-feather-download"></i>
                                                <span class="uk-visible@s">Download </span> </a>
                                        </li>
                                        <li><a href="#" uk-toggle="target: #code"
                                                uk-tooltip="title: Source code; pos: top">
                                                <i class="icon-feather-code"> </i>
                                                <span class="uk-visible@s">Source code </span> </a>
                                        </li>
                                    </ul>
                                </nav>


                            </div>
                        </div>

                        <hr class="my-2">

                        <div  uk-toggle="cls: uk-flex uk-flex-between@m uk-flex-middle; mode: media; media: @m">
                            <div class="user-details-card">
                                <div class="user-details-card-avatar py-0">
                                    <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-details-card-name">
                                    Stella Johnson <span> Developer <span> 1 year ago </span> </span>
                                </div>
                            </div>
                            <div>
                                <strong class="mx-3 uk-visible@s"> Share on </strong>

                                <a href="#"
                                    class="btn btn-facebook  rounded-circle btn-icon-only uk-margin-small-top">
                                    <span class="btn-inner--icon">
                                        <i class="icon-brand-facebook-f"></i>
                                    </span>
                                </a>

                                <a href="#"
                                    class="btn btn-twitter  rounded-circle btn-icon-only uk-margin-small-top">
                                    <span class="btn-inner--icon">
                                        <i class="icon-brand-twitter"></i>
                                    </span>
                                </a>

                                <a href="#"
                                    class="btn btn-google-plus rounded-circle btn-icon-only uk-margin-small-top">
                                    <span class="btn-inner--icon">
                                        <i class="icon-brand-google-plus-g"></i>
                                    </span>
                                </a>
                                
                            </div>
                        </div>

                        <h4 class="mt-4"> Description</h4>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod
                            tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                            consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                            doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <p> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                            ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet.</p>
                        <h4>Elementum tellus id mauris faucibus</h4>
                        <p> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                            ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                            consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                            doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <h4> Interdum et malesuada fames ipsum</h4>
                        <p> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                            ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet.</p>
                        <h4>Maecenas dolor</h4>
                        <ul class="uk-list uk-list-bullet">
                            <li>At vero eos et accusam et justo</li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</li>
                            <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</li>
                        </ul>



                        <!--  off canvas  code-->
                        <div id="code" uk-offcanvas="flip: true; overlay: true">
                            <div class="uk-offcanvas-bar uk-width-xlarge p-0">

                                <div class="p-4 pb-0">
                                    <button class="uk-offcanvas-close" type="button" uk-close></button>

                                    <h3>Source code</h3>

                                    <div class="uk-flex">
                                        <nav class="responsive-tab mb-0 style-4">
                                            <ul uk-switcher="connect : #code-snipt ; animation: uk-animation-fade">
                                                <li class="uk-active"><a href="#">JavaScript</a></li>
                                                <li><a href="#">Html</a></li>
                                                <li><a href="#">Css </a></li>
                                            </ul>
                                        </nav>
                                        <div class="uk-flex">

                                            <a href="#" class="iconbox iconbox-sm button circle mr-2"
                                                uk-tooltip="title: Preview; pos: top">
                                                <i class="icon-feather-eye"></i>
                                            </a>

                                            <a href="#" class="iconbox iconbox-sm button circle"
                                                uk-tooltip="title: Downlaod; pos: top">
                                                <i class="icon-feather-download"></i>
                                            </a>

                                        </div>
                                    </div>

                                </div>





                                <ul class="uk-switcher" id="code-snipt">


                                    <!-- javascript-->
                                    <li>

                                        <pre class="brush: javascript" id="starter-page">

                                                    var cont_slc = 0;

                                                    function open_select(idx) {
                                                        var idx1 = idx.getAttribute('data-n-select');
                                                        var ul_cont_li = document.querySelectorAll("[data-indx-select='" + idx1 + "'] .cont_select_int > li");
                                                        var hg = 0;
                                                        var slect_open = document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].getAttribute(
                                                            'data-selec-open');
                                                        var slect_element_open = document.querySelectorAll("[data-indx-select='" + idx1 + "'] select")[0];
                                                        if (Mobile_ || FirfoxMobile) {
                                                            if (window.document.createEvent) { // All
                                                                var evt = window.document.createEvent("MouseEvents");
                                                                evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false,
                                                                    0,
                                                                    null);
                                                                slect_element_open.dispatchEvent(evt);
                                                            } else if (slect_element_open.fireEvent) { // IE
                                                                slect_element_open.fireEvent("onmousedown");
                                                            }
                                                        } else {
                                            
                                            
                                                            for (var i = 0; i < ul_cont_li.length; i++) {
                                                                hg += ul_cont_li[i].offsetHeight;
                                                            };
                                                            if (slect_open == 'false') {
                                                                document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].setAttribute(
                                                                    'data-selec-open',
                                                                    'true');
                                                                document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .cont_list_select_mate > ul")[0]
                                                                    .style.height = hg + "px";
                                                                document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .icon_select_mate")[0].style
                                                                    .transform = 'rotate(180deg)';
                                                            } else {
                                                                document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].setAttribute(
                                                                    'data-selec-open',
                                                                    'false');
                                                                document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .icon_select_mate")[0].style
                                                                    .transform = 'rotate(0deg)';
                                                                document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .cont_list_select_mate > ul")[0]
                                                                    .style.height = "0px";
                                                            }
                                                        }
                                            
                                                    } // fin function open_select
            
         </pre>

                                    </li>


                                    <li>

                                        <pre class="brush: html" id="starter-page">

&lt;html lang="en">

&lt;head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
 
<link rel="stylesheet" href="style.html">

&lt;/head>
&lt;body>

<!-- Wrapper -->
<div id="wrapper">


    <!-- Header   -->

    <div class="contets">
        <h1> Hello world </h1>
        <p> Lorem ipsum dolor sit amet,   ut labore et   </p> 
        <p> nostrud exercitation ullamco laboris nisi ut </p>
        <br>
        <a href="#">Custom <link rel="stylesheet" href="#"></a>
    </div>
    <!-- Content  -->

    <!-- Footer -->


&lt;/div>  <!-- Wrapper / End -->
    
   <!-- javaScripts
   ================================================== -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script> 

&lt;/body>
&lt;/html>	
    
 </pre>

                                    </li>




                                    <!-- css tab -->

                                    <li>

                                        <pre class="brush: html" id="starter-page">

body{
    background:white;
    font-size:16px;
    color:black ;
    line-height:1.3px ;

}

h1 {
    font-size:2rem;
    line-height:1.3
}

.button {
    background:#f43453;
    color:white;
    font-size:12px;
    padding: 20px 10px
}


 </pre>

                                    </li>



                                </ul>


                            </div>
                        </div>

                    </div>




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

                <!-- sidebar -->
                <div class="uk-width-1-4@m uk-overflow-hidden vidlist-3-container">


                    <div uk-sticky>

                        <h5 class="bg-gradient-grey text-white py-4 p-3 mb-0"> HTML Basics</h5>

                        <ul class="uk-child-width-expand mb-0"
                            uk-switcher="animation: uk-animation-slide-right-small, uk-animation-slide-left-small"
                            uk-tab>
                            <li class="uk-active"><a href="#"> Contents</a></li>
                            <li><a href="#"> Details</a></li>
                        </ul>

                        <ul class="uk-switcher uk-overflow-hidden">

                            <!-- first tab -->

                            <li>

                                <div class="vidlist-3-content" data-simplebar>

                                    <ul class="vidlist-3-section" uk-accordion>


                                        <!--  section 1  -->
                                        <li class="uk-open">
                                            <a class="uk-accordion-title" href="#"> Your First webpage </a>
                                            <div class="uk-accordion-content">
                                                <!-- vidlist -->
                                                <ul class="vidlist-3"
                                                    uk-switcher="connect: #video-slider ; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                                    <li class="uk-active">
                                                        <a href="#"> Creating First Page <span> 23 min </span> </a>
                                                    </li>
                                                    <li> <a href="#"> Headings in HTML <span> 23 min </span> </a> </li>
                                                    <li> <a href="#"> The paragraph tag <span> 23 min </span> </a> </li>
                                                    <li> <a href="#"> Emphasis and Strong Tag <span> 23 min </span> </a>
                                                    </li>
                                                    <li> <a href="#"> Text Formatting <span> 23 min </span> </a> </li>
                                                    <li> <a href="#"> Working with Images <span> 23 min </span> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <!--  section 2  -->

                                        <li>
                                            <a class="uk-accordion-title" href="#"> Getting Started with HTML5 </a>
                                            <div class="uk-accordion-content">
                                                <!-- vidlist -->
                                                <ul class="vidlist-3">
                                                    <li> <a href="course-lesson-3.html"> What Is HTML? <span> 2 min
                                                            </span>
                                                        </a> </li>
                                                    <li> <a href="course-lesson-3.html"> Introduction to HTML5 <span> 3
                                                                min
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li> <a href="course-lesson-3.html"> Getting the Browser <span> 5
                                                                min
                                                            </span> </a>
                                                    </li>
                                                    <li> <a href="course-lesson-3.html"> Setting Up the Editor <span> 2
                                                                min
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <!--  section 3  -->

                                        <li>
                                            <a class="uk-accordion-title" href="#"> Some Special Tags </a>
                                            <div class="uk-accordion-content">
                                                <!-- vidlist -->
                                                <ul class="vidlist-3">
                                                    <li> <a href="course-lesson-3.html"> Inserting Images <span> 23 min
                                                            </span> </a> </li>
                                                    <li> <a href="course-lesson-3.html"> Constructing Lists <span> 23
                                                                min </span> </a>
                                                    </li>
                                                    <li> <a href="course-lesson-3.html"> Horizontal Rule Tag <span> 23
                                                                min </span> </a>
                                                    </li>
                                                    <li> <a href="course-lesson-3.html"> Validation <span> 23 min
                                                            </span> </a> </li>
                                                    <li> <a href="course-lesson-3.html"> Comments Tag <span> 23 min
                                                            </span> </a> </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <!--  section 4  -->

                                        <li>
                                            <a class="uk-accordion-title" href="#"> HTML Advanced level </a>
                                            <div class="uk-accordion-content">
                                                <!-- vidlist -->
                                                <ul class="vidlist-3">
                                                    <li> <a href="course-lesson-3.html"> The Basics of Forms<span> 23
                                                                min </span> </a>
                                                    </li>
                                                    <li> <a href="course-lesson-3.html"> Link Targets <span> 23 min
                                                            </span> </a> </li>
                                                    <li> <a href="course-lesson-3.html"> HTML Iframes <span> 23 min
                                                            </span> </a> </li>
                                                    <li> <a href="course-lesson-3.html"> The End <span> 23 min </span>
                                                        </a> </li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>

                                </div>


                            </li>


                            <!-- seccond tab -->

                            <li>

                                <img src="../assets/images/course/8.png" alt="">
                                <div class="p-3">

                                    <ul class="uk-list">
                                        <li> <i class="icon-feather-clock"></i> 2 Hours and 8 minutes </li>
                                        <li> <i class="icon-feather-users"></i> Eneroled 13 students </li>
                                    </ul>

                                    <br>

                                    <h6> Description</h6>
                                    <p>HTML is the building blocks of the web. It gives pages structure and applies
                                        meaning to content. Take this course to learn how it all works and create your
                                        own pages!</p>

                                </div>

                            </li>


                        </ul>


                    </div>

                </div>


                <!-- small device icon video sidebar -->
                <span class="btn-vidlist-3" uk-toggle="target: #wrapper; cls: is-open"></span>

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



    <!-- Essential JavaScript Libraries
	==============================================-->
    <script type="text/javascript" src="../assets/syntax-highlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="../assets/syntax-highlighter/scripts/shBrushJScript.js"></script>
    <script type="text/javascript" src="../assets/syntax-highlighter/scripts/shBrushXml.js"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>



</body>


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/course-lesson-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:46 GMT -->
</html>