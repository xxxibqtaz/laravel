<!doctype html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/specialty-comming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:17 GMT -->
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




    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Content
        ================================================== -->

        <!-- Content / End -->

        <div uk-height-viewport="offset-top: true; offset-bottom: true"
            class="uk-flex uk-flex-middle bg-gradient-grey uk-text-center  px-4">
            <div class="container-small m-auto ">

                <div class="uk-light mb-lg-8">
                    <h1>We're coming <strong>soon</strong></h1>
                    <p class="mb-0"> We apologize for the inconvenience but Masterkit is currently <br
                            class="uk-visible@s">
                        undergoing
                        planned maintenance.</p>
                </div>

                <div class="uk-grid-small uk-child-width-auto@s uk-child-width-1-4 uk-margin countdown" uk-grid
                    uk-countdown="date: 2020-10-07T08:32:06+00:00">
                    <div>
                        <div class="box">
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="countdown-text">
                                <p> DAYS</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box">
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                            <div class="countdown-text">
                                <p> HOURS</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box">
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                            <div class="countdown-text">
                                <p> MINUTES</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box">
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                            <div class="countdown-text">
                                <p> SECONDS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="uk-grid-small uk-width-4-5@m m-auto mt-lg-6  mt-4 countdown-form" uk-grid>
                    <div class="uk-width-expand  pl-0">
                        <input type="text" class="uk-input uk-form-small" style="border:0" placeholder="Your email address">
                    </div>
                    <div class="uk-width-1-3@s uk-width-auto pl-1">
                        <input type="submit" value="Subscribe" class="button circle block">
                    </div>
                </form>

            </div>
        </div>
        <!-- Footer
        ================================================== -->



    </div>
    <!-- Wrapper / End -->

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


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/specialty-comming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:17 GMT -->
</html>