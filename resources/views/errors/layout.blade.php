<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Realshed/error.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:30:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Stelconic - Unlock real estate potential with Stelconic</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('web/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('web/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/responsive.css') }}" rel="stylesheet">
</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset("web/images/shape/shape-9.png") }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset("web/images/shape/shape-10.png") }});"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>@yield('code')</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>@yield('code')</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- error-section -->
        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h1>@yield('code')</h1>
                    <h2 class="text-capitalize">@yield('message')</h2>
                    <a href="/" class="theme-btn btn-one">Go To Home</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('web/js/jquery.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/owl.js') }}"></script>
    <script src="{{ asset('web/js/wow.js') }}"></script>
    <script src="{{ asset('web/js/validation.js') }}"></script>
    <script src="{{ asset('web/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('web/js/appear.js') }}"></script>
    <script src="{{ asset('web/js/scrollbar.js') }}"></script>
    <script src="{{ asset('web/js/isotope.js') }}"></script>
    <script src="{{ asset('web/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('web/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('web/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('web/js/nav-tool.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('web/js/script.js') }}"></script>


</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Realshed/error.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:30:24 GMT -->

</html>
