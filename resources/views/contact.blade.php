@extends('component.layout')

@section('content')
 <!-- main header -->
 <header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="top-inner clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
                    <li><i class="far fa-map-marker-alt"></i>Discover St, New York, NY 10012, USA</li>
                    <li><i class="far fa-clock"></i>Mon - Sat  9.00 - 18.00</li>
                    <li><i class="far fa-phone"></i><a href="tel:2512353256">+251-235-3256</a></li>
                </ul>
            </div>
            <div class="right-column pull-right">
                <ul class="social-links clearfix">
                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                </ul>
                <div class="sign-box">
                    <a href="signin"><i class="fas fa-user"></i>Sign In</a>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="/"><img src="{{ asset('web/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class=""><a href="/"><span>Home</span></a>
                                </li>
                                <li class=""><a href="property"><span>Property</span></a>
                                </li>
                                <li class="current"><a href="blog"><span>Blog</span></a>
                                </li>
                                <li><a href="contact"><span>Contact</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="/"><img src="{{ asset('web/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="/"><img src="{{ asset('web/images/logo-2.png') }}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Zions plaze, Awka</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->

<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('web/images/background/page-title.jpg') }});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- contact-info-section -->
<section class="contact-info-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Contact us</h5>
            <h2>Get In Touch</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-32"></i></div>
                        <h4>Email Address</h4>
                        <p><a href="mailto:info@example.com">info@example.com</a><br /><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-33"></i></div>
                        <h4>Phone Number</h4>
                        <p><a href="tel:+23055873407">+2(305) 587-3407</a><br /><a href="tel:+23055873408">+2(305) 587-3408</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-34"></i></div>
                        <h4>Office Address</h4>
                        <p>214 West Arnold St. New York, <br />NY 10002</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->


<!-- contact-section -->
<section style="margin-bottom:0px" class="contact-section bg-color-1">
    <div class="auto-container">
        <div class="row align-items-center clearfix ">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <h5>Contact</h5>
                        <h2>Contact Us</h2>
                    </div>
                    <div class="form-inner">
                        <form method="post" action="http://azim.commonsupport.com/Realshed/sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                <div class="google-map-area">
                    <div
                        class="google-map"
                        id="contact-google-map"
                        data-map-lat="40.712776"
                        data-map-lng="-74.005974"
                        data-icon-path="{{ asset('web/images/icons/map-marker.png') }}"
                        data-map-title="Brooklyn, New York, United Kingdom"
                        data-map-zoom="12"
                        data-markers='{
                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","{{ asset('web/images/icons/map-marker.png') }}"]
                        }'>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->
@endsection
