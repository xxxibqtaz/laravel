<!doctype html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/specialty-maintanence.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:30 GMT -->
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


        <!-- Header Container
        ================================================== -->

        <div class="uk-card-default bg-gradient-grey py-4 uk-light">
            <div class="uk-flex uk-flex-center uk-flex-middle">
                <i class=" uil-graduation-hat icon-medium"></i>
                <h4 class="mb-0 ml-3"> Courseplus</h3>
            </div>
        </div>

        <!-- Content
        ================================================== -->

        <!-- Content / End -->

        <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
            <div class="uk-width-1-2@m uk-width-1-2@s m-auto text-center">

                <img src="http://demo.foxthemes.net/courseplusv3.3/assets/images/maintenance.svg" alt="" class="my-3">

                <h3>We're making some improvements</h3>
                <p class="mb-0"> We apologize for the inconvenience but Masterkit is currently <br> undergoing planned
                    maintenance.</p>
                <a href="#modal-close-default" class="button grey transition-3d-hover my-4 small" uk-toggle>
                    <i class="icon-feather-clock mr-2"></i> Notify me</a>

            </div>
        </div>




        <!-- This is the modal with the default close button -->
        <div id="modal-close-default" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-width-1-3@m uk-text-center bg-gradient-grey uk-light rounded">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="my-3">
                    <i class="icon-feather-mail icon-large"></i>
                </div>
                <h4>Notify me when is lanch</h4>
                <p class="mb-4"> Become first one know when we Lanch our site </p>

                <form action="#">

                    <input type="text" class="uk-input mb-4" placeholder="Your name">
                    <input type="email" class="uk-input mb-4" placeholder="Email Address">
                    <input type="submit" class="button white block large mb-0" value="Subscribe">
                    <p class="uk-text-small mt-2">No Spam, we promise .</p>

                </form>


            </div>
        </div>

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


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/specialty-maintanence.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:30 GMT -->
</html>