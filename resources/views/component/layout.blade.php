<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Realshed/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:26:07 GMT -->

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
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->



        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('images/logo/logo.png') }}"
                            alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Flat , Block D,Millenium Plaza Enugu-Onitsha Express way, Awka, Anambra State</li>
                        <li><a href="+2348184007752">+234 818-4007-752</a></li>
                        <li><a href="infostelconic@gmail.com">infostelconic@gmail.com</a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
        {{-- view output --}}
        @yield('content');
        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url({{ asset('web/images/shape/shape-2.png') }});">
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Subscribe</span>
                            <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="http://azim.commonsupport.com/Realshed/contact.html" method="post"
                                class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="text">
                                    <p>
                                        We are dedicated to transforming the real estate landscape with our dynamic and
                                        innovative approach. As a leading real estate agency, we specialize in providing
                                        comprehensive services across residential, commercial, and industrial sectors.
                                        With our passionate team of experienced professionals, cutting-edge technology,
                                        and commitment to exceptional customer service.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li><a>Property Developemt and investment</a></li>
                                        <li><a>Real Estate Management</a></li>
                                        <li><a>General Contracts</a></li>
                                        <li><a>Land Surveying</a></li>
                                        <li><a>Property Consultancy</a></li>
                                        <li><a>Furnishing</a></li>
                                        <li><a>Roofing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="far fa-map-marker-alt"></i>Flat , Block D,Millenium Plaza
                                            Enugu-Onitsha Express way, Awka, Anambra State</li>
                                        <li><i class="far fa-phone"></i><a href="+2348184007752">+234 818-4007-752</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <figure class="footer-logo"><a href="index.html"><img style="width:50px; height:50px"
                                    src="{{ asset('images/logo/favicon.png') }}" alt=""></a></figure>
                        <div class="copyright pull-left">
                            <p><a href="index.html">Stelconic</a> &copy; 2021 All Right Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->
        {{-- <x-flash-message/> --}}



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
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

<!-- Mirrored from azim.commonsupport.com/Realshed/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:27:05 GMT -->

</html>
