@extends('component.layout')

@section('content')
 <!-- main header -->
 <header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="top-inner clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
                    <li><i class="far fa-map-marker-alt"></i>Flat , Block D,Millenium Plaza Enugu-Onitsha Express way, Awka, Anambra State</li>
                    <li><i class="far fa-phone"></i><a href="+2348184007752">+234 818-4007-752</a></li>
                </ul>
            </div>
            <div class="right-column pull-right">
                 @auth
                 <div class="menu-right-content">
                    <span class="text-lowercase mx-3">
                        <a href="/dashboard" class="text-light">{{ auth()->user()->email }}</a>
                    </span>
                    </li>
                    {{-- <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <div class="sign-box">
                            <button class="btn rounded-pill btn-warning" type="submit"><i class="fas fa-arrow-right text-light"></i></button>
                        </div>
                    </form> --}}
                </div>
                @else
                <div class="sign-box">
                    <a href="signin"><i class="fas fa-user"></i>Sign In</a>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="/"><img src="{{ asset('images/logo/logo.png') }}" alt=""></a></figure>
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
                                <li class="current"><a href="about"><span>About</span></a></li>

                                <li class=""><a href="properties"><span>Property</span></a>
                                </li>
                                <li class=""><a href="blogs"><span>Blog</span></a>
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
                    <figure class="logo"><a href="/"><img src="{{ asset('images/logo/logo.png') }}" alt=""></a></figure>
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


<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset("web/images/background/page-title-3.jpg") }});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- about-section -->
<section class="about-section about-page pb-0">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_2">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset("web/images/resource/about-1.jpg") }}" alt=""></figure>
                            <div class="text wow fadeInLeft animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <h2>20</h2>
                                <h4>Years of <br />Experience</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_3">
                        <div class="content-box">
                            <div class="sec-title">
                                <h5>About</h5>
                                <h2>Hi, I’m Jessica Blake</h2>
                            </div>
                            <div class="text">
                                <p>Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore et
                                    dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco
                                    laboris aliquip ex ea commodo consequat duis aute irure.</p>
                                <p>dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur excepteur sint occaecat.</p>
                            </div>
                            <ul class="list clearfix">
                                <li>consectetur elit sed do eius</li>
                                <li>consectetur elit sed</li>
                            </ul>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-one">Contact With Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->

<!-- feature-style-three -->
<section class="feature-style-three centred pb-110">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Our Services</h5>
            <h2>Property Services</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-1"></i></div>
                    <h4>Excellent Reputation</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-26"></i></div>
                    <h4>Best Local Agents</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-21"></i></div>
                    <h4>Personalized Service</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-1"></i></div>
                    <h4>Excellent Reputation</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-26"></i></div>
                    <h4>Best Local Agents</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-21"></i></div>
                    <h4>Personalized Service</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-1"></i></div>
                    <h4>Excellent Reputation</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-26"></i></div>
                    <h4>Best Local Agents</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-21"></i></div>
                    <h4>Personalized Service</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-three end -->
<!-- cta-section -->
<section class="cta-section alternate-2 pb-240 centred"
style="background-image: url({{ asset("web/images/background/cta-1.jpg") }});">
<div class="auto-container">
    <div class="inner-box clearfix">
        <div class="text">
            <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
        </div>
        <div class="btn-box">
            <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
            <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
        </div>
    </div>
</div>
</section>
<!-- cta-section end -->

<!-- team-section -->
<section class="team-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Our Agents</h5>
            <h2>Meet Our Excellent Agents</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset("web/images/team/team-6.jpg") }}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">Jennifer Lawrence</a></h4>
                                <span class="designation">Senior Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset("web/images/team/team-7.jpg") }}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">Benedict Cumberbatch</a></h4>
                                <span class="designation">Senior Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset("web/images/team/team-8.jpg") }}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">Elizabeth Winstead</a></h4>
                                <span class="designation">Senior Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->



@endsection
