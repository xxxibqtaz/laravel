<!doctype html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/episode-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:46 GMT -->
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

    <div id="wrapper" class="menu-small">

        <!-- Header Container
        ================================================== -->
        <header class="header">

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
                                <li><a href="#">Episodes</a></li>
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


            <div class="container pt-4">

                <div uk-grid>
                    <div class="uk-width-3-4@m">

                        <div class="embed-video">
                            <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0"
                                uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                        </div>

                        <div class="p-3">

                            <h2 class="mt-lg-5 "> HTML Full Course - Build a Website Tutorial </h2>

                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">

                                    <span>299 views </span> • <span> Sep 18, 2019 </span>

                                </div>
                                <div class="uk-width-expand">

                                    <nav class="responsive-tab">
                                        <ul class="text-right">
                                            <li><a href="#"> <i class="uil-cloud-download"></i> <span
                                                        class="uk-visible@s"> Download </span></a></li>
                                            <li><a href="#" uk-toggle="target: #code">
                                                    <i class="icon-feather-code">
                                                    </i> <span class="uk-visible@s"> Source code </span> </a></li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>

                            <div class="uk-card-default rounded px-3 pb-md-3"
                                uk-toggle="cls: uk-flex uk-flex-between@m uk-flex-middle; mode: media; media: @m">
                                <div class="user-details-card">
                                    <div class="user-details-card-avatar">
                                        <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="user-details-card-name">
                                        Stella Johnson <span> Developer <span> 1 year ago </span> </span>
                                    </div>
                                </div>
                                <div>
                                    <strong class="mx-3 uk-visible@s"> Share on </strong>

                                    <a href="#"
                                        class="btn btn-facebook  rounded-circle btn-icon-only transition-3d-hover">
                                        <span class="btn-inner--icon">
                                            <i class="icon-brand-facebook-f"></i>
                                        </span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-twitter rounded-circle btn-icon-only transition-3d-hover">
                                        <span class="btn-inner--icon">
                                            <i class="icon-brand-twitter"></i>
                                        </span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-google-plus rounded-circle btn-icon-only transition-3d-hover">
                                        <span class="btn-inner--icon">
                                            <i class="icon-brand-google-plus-g"></i>
                                        </span>
                                    </a>

                                </div>
                            </div>

                            <h4 class="mt-3"> Description</h4>
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

                                        <div class="uk-flex uk-flex-between">
                                            <nav class="mb-0">
                                                <ul uk-switcher="connect : #code-snipt ; animation: uk-animation-fade"
                                                    class="mb-0" uk-tab>
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
                                                    <i class="uil-cloud-download"></i>
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



                    </div>
                    <div class="uk-width-expand@m">

                        <div uk-sticky="media :@m ; bottom: true ; offset:16">

                            <h4> Related Tutorials </h4>

                            <a href="#">
                                <div class="course-card episode-card animate-this mb-3">
                                    <div class="course-card-thumbnail ">
                                        <span class="item-tag">HTML</span>
                                        <span class="duration">2:39</span>
                                        <img src="../assets/images/episodes/2.png">
                                        <span class="play-button-trigger"></span>
                                    </div>
                                    <div class="course-card-body">
                                        <h4 class="mb-0"> Creating sticky in HTML </h4>
                                    </div>
                                </div>
                            </a>


                            <a href="#">
                                <div class="course-card episode-card animate-this mb-3">
                                    <div class="course-card-thumbnail ">
                                        <span class="item-tag">Tips</span>
                                        <span class="duration">5:39</span>
                                        <img src="../assets/images/episodes/3.png">
                                        <span class="play-button-trigger"></span>
                                    </div>
                                    <div class="course-card-body">
                                        <h4 class="mb-0"> er Creating a Laravel Package </h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="course-card episode-card animate-this mb-3">
                                    <div class="course-card-thumbnail ">
                                        <span class="item-tag">PHP</span>
                                        <span class="duration">5:39</span>
                                        <img src="../assets/images/episodes/1.png">
                                        <span class="play-button-trigger"></span>
                                    </div>
                                    <div class="course-card-body">
                                        <h4 class="mb-0"> The PHP Singleton class </h4>
                                    </div>
                                </div>
                            </a>
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


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/episode-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:46 GMT -->
</html>