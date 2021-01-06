<!doctype html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/page-pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:57:25 GMT -->
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


</head>

<body>

    <div id="wrapper">
        

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

        <!-- menu -->
        <div class="page-menu">
            <!-- btn close on small devices -->
            <span class="btn-menu-close" uk-toggle="target: #wrapper ; cls: mobile-active"></span>
            <!-- traiger btn -->
            <span class="btn-menu-trigger" uk-toggle="target: .page-menu ; cls: menu-large"></span>

            <!-- logo -->
            <div class="logo uk-visible@s">
                <a href="dashboard.html"> <i class=" uil-graduation-hat"></i> <span> Courseplus</span> </a>
            </div>
            <div class="page-menu-inner" data-simplebar>
                <ul data-submenu-title="Browse">
                    <li><a href="courses.html"><i class="uil-play-circle"></i> <span> Courses</span></a> </li>
                    <li><a href="course-path.html"><i class="uil-rss-interface"></i> <span> Paths</span></a> </li>
                    <li><a href="episode.html"><i class="uil-youtube-alt"></i> <span> Tutorial</span></a> </li>
                    <li><a href="book.html"><i class="uil-book-alt"></i> <span> Book</span></a> </li>
                    <li><a href="blog-1.html"><i class="uil-file-alt"></i> <span> Blog</span></a> </li>
                </ul>

                <ul data-submenu-title="Pages">
                    <li><a href="page-pricing.html"><i class="uil-bill"></i> <span> Pricing</span> </a>
                    </li>
                    <li><a href="page-faq.html"><i class="uil-comment-dots"></i> <span> Faq </span></a></li>
                    <li><a href="page-term.html"><i class="uil-info-circle"></i> <span>Terms</span> </a></li>
                    <li><a href="page-privacy.html"><i class="uil-shield-question"></i><span>Privecy</span> </a>
                    </li>
                </ul>

                <ul data-submenu-title="Development">
                    <li><a href="development-elements.html"><i class="uil-layers"></i><span> Elements </span></a></li>
                    <li><a href="development-compounents.html"><i class="uil-layer-group"></i><span> Compounents</span>
                        </a>
                    </li>
                    <li><a href="development-icons.html"><i class="icon-feather-flag"></i><span> Icons </span></a></li>
                </ul>

                <ul data-submenu-title="User Account">
                    <li><a href="user-profile.html"><i class="uil-user-circle"></i><span> Profile </span></a></li>
                    <li><a href="user-profile-edit.html"><i class="uil-edit-alt"></i> <span>Account</span> </a>
                    </li>
                    <li><a href="#"><i class="uil-check-circle"></i> <span>Forms</span> </a>
                        <ul>
                            <li>
                                <a href="form-login.html"> Login </a>
                                <a href="form-register.html"> Register </a>
                                <a href="form-modern-login.html"> Simple Register</a>
                                <a href="form-modern-singup.html"> Simple Register</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul data-submenu-title="Specialty pages">
                    <li><a href="specialty-comming-soon.html"><i class="icon-material-outline-dashboard"></i>
                            <span> Comming-soon</span> </a></li>
                    <li><a href="specialty-maintanence.html"><i
                                class="icon-feather-help-circle"></i><span>Maintanence</span>
                        </a></li>
                </ul>
            </div>
        </div>



        <!-- content -->
        <div class="page-content">

            <!-- Header Container
        ================================================== -->
        <header class="header" uk-sticky="top:20 ; cls-active:header-sticky">

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

                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#"> Dashboard </a></li>
                                <li><a href="#">Page </a></li>
                                <li>Pricing page</li>
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
        

            <div class="page-content-inner">

                    <h2> Pricing Plans </h2>


                <ul class="uk-subnav pricing-swicher my-4"
                    uk-switcher="connect: #change-plan ;animation: uk-animation-slide-top-medium, uk-animation-scale-up">
                    <li><a href="#">Monthly</a></li>
                    <li><a href="#">Yearly <span>Save 10%</span> </a></li>
                </ul>


                <!-- Pricing Plans Container -->
                <div class="pricing-plans-container">

                    <!-- Plan -->
                    <div class="pricing-plan">
                        <h3>Basic Plan</h3>
                        <p>To start your learning to day you will get free 10 Course .</p>
                        <ul class="uk-switcher" id="change-plan">
                            <li>
                                <div class="pricing-plan-label"><strong>$29</strong>/ monthly</div>
                            </li>
                            <li>
                                <div class="pricing-plan-label"><strong>$199</strong>/ yearly</div>
                            </li>
                        </ul>
                        <div class="pricing-plan-features">
                            <strong>Features of Basic Plan</strong>
                            <ul>
                                <li>Exercise files </li>
                                <li>Interactive tools</li>
                                <li>On-demand learning</li>
                            </ul>
                        </div>
                        <a href="pages-checkout-page.html" class="btns">Buy Now</a>
                    </div>

                    <!-- Plan -->
                    <div class="pricing-plan recommended">
                        <div class="recommended-badge">Recommended</div>
                        <h3>Pro Plan</h3>
                        <p>To start your learning to day you will get free 10 Course .</p>
                        <ul class="uk-switcher" id="change-plan">
                            <li>
                                <div class="pricing-plan-label billed-monthly-label"><strong>$69</strong>/ monthly
                                </div>
                            </li>
                            <li>
                                <div class="pricing-plan-label billed-yearly-label"><strong>$499</strong>/ yearly
                                </div>
                            </li>
                        </ul>
                        <div class="pricing-plan-features">
                            <strong>Features of Pro Plan</strong>
                            <ul>
                                <li>Exercise files </li>
                                <li>Access entire course library </li>
                                <li>99+ High Quality Video Courses</li>
                            </ul>
                        </div>
                        <a href="pages-checkout-page.html" class="btns">Buy Now</a>
                    </div>

                    <!-- Plan -->
                    <div class="pricing-plan">
                        <h3>For Teams</h3>
                        <p>To start your learning to day you will get free 10 Course .</p>
                        <ul class="uk-switcher" id="change-plan">
                            <li>
                                <div class="pricing-plan-label billed-monthly-label"><strong>$99</strong>/ monthly
                                </div>
                            </li>
                            <li>
                                <div class="pricing-plan-label billed-yearly-label"><strong>$690</strong>/ yearly
                                </div>
                            </li>
                        </ul>
                        <div class="pricing-plan-features">
                            <strong>Features of For Teams</strong>
                            <ul>
                                <li>Certification exams</li>
                                <li>Dedicated success team</li>
                                <li>1000+ High Quality Video Courses</li>
                            </ul>
                        </div>
                        <a href="pages-checkout-page.html" class="btns">Buy Now</a>
                    </div>
                </div>


                <div class="section">
                    <div class="text-center mb-lg-5 pb-2 delimiter-bottom">
                        <span class=" ">Faq</span>
                        <h2 class="mt-3">Frequently asked question :</h2>
                    </div>

                    <div class="uk-child-width-1-2@s" uk-grid>

                        <div>
                            <h4>How to get started with Courseplus?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>

                        <div>
                            <h4>Can I cancel my subscription?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                magna
                                aliquam erat volutpat.</p>
                        </div>

                        <div>
                            <h4>How can I create new course?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>

                        <div>
                            <h4>Can I cancel at anytime?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>

                        <div>
                            <h4>How to Choose a plan first?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetue aoreet dolore magna aliquam erat volutpat.
                            </p>


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


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/page-pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:57:25 GMT -->
</html>