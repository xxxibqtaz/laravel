<!doctype html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:17 GMT -->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Learning HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="{{asset('frontend/images/favicon.png')}}" rel="icon" type="image/png">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/night-mode.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/framework.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('frontend/css/icons.css')}}">


</head>


<body>



<!-- Content
 ================================================== -->
<div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
    <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
        <div class="uk-card-default p-5 rounded">
            <div class="mb-4 uk-text-center">
                <h3 class="mb-0"> Create new Account</h3>
                <p class="my-2">Login to manage your account.</p>
            </div>
            <form class="uk-child-width-1-1 uk-grid-small" action="signup" method="POST"uk-grid>
                @csrf
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Name</label>

                        <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                            <input class="uk-input" type="text" name="name" placeholder="Full name">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Email</label>

                        <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-mail"></i>
                                </span>
                            <input class="uk-input" type="email" name="email" placeholder="name@example.com">
                        </div>

                    </div>
                </div>


                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Username</label>

                        <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                            <input class="uk-input" type="text" name="user"placeholder="blablabla">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Password</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                            </span>
                            <input class="uk-input" type="password" name="pass" placeholder="**********">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Phone</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                    <i class="icon-feather-phone"></i>
                            </span>
                            <input class="uk-input" type="text"name="phone" placeholder="098765321">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Address</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                    <i class="icon-feather-home"></i>
                            </span>
                            <input class="uk-input" type="text"name="address" placeholder="123 Aloola">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Birthday</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                    <i class="icon-feather-phone"></i>
                            </span>
                            <input class="uk-input" type="date"name="birthday">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Image</label>

                        <div class="uk-position-relative w-100">

                            <input class="uk-input" type="file" name="img">
                        </div>

                    </div>
                </div>

                <div>
                    <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand@s">
                            <p> Dont have account <a href="#">Sign up</a></p>
                        </div>
                        <div class="uk-width-auto@s">
                            <input type="submit" class="btn btn-default" value="Get Started"></input>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- Content -End
================================================== -->


<script>
    (function(window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);


    (function(window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function(event) {
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
<script src="{{asset('frontend/js/framework.js')}}"></script>
<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/js/simplebar.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>

</body>


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:17 GMT -->

</html>
