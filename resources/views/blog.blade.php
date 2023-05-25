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
<section class="page-title centred" style="background-image: url({{ asset('web/images/background/page-title-5.jpg') }});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Blog</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-grid sec-pad-2">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{ asset('web/images/news/news-9.jpg') }}" alt=""></a></figure>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="blog-details.html">Reader’s Look On An Important Steps Needed.</a></h4>
                                        <ul class="post-info clearfix">
                                            <li class="author-box">
                                                <figure class="author-thumb"><img src="{{ asset('web/images/news/author-1.jpg') }}" alt=""></figure>
                                                <h5><a href="#">Eva Green</a></h5>
                                            </li>
                                            <li>April 10, 2020</li>
                                        </ul>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="#" class="theme-btn btn-two">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="#"><img src="{{ asset('web/images/news/news-12.jpg') }}" alt=""></a></figure>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="blog-details.html">A Digital Prescription For The Pharma Industry.</a></h4>
                                        <ul class="post-info clearfix">
                                            <li class="author-box">
                                                <figure class="author-thumb"><img src="{{ asset('web/images/news/author-3.jpg') }}" alt=""></figure>
                                                <h5><a href="blog-details.html">Simon Baker</a></h5>
                                            </li>
                                            <li>April 28, 2020</li>
                                        </ul>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper">
                        <ul class="pagination clearfix">
                            <li><a href="blog-1.html" class="current">1</a></li>
                            <li><a href="blog-1.html">2</a></li>
                            <li><a href="blog-1.html">3</a></li>
                            <li><a href="blog-1.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-sidebar">
                    <div class="sidebar-widget search-widget">
                        <div class="widget-title">
                            <h4>Search</h4>
                        </div>
                        <div class="search-inner">
                            <form action="http://azim.commonsupport.com/Realshed/blog-1.html" method="post">
                                <div class="form-group">
                                    <input type="search" name="search_field" placeholder="Search" required="">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget social-widget">
                        <div class="widget-title">
                            <h4>Follow Us On</h4>
                        </div>
                        <ul class="social-links clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget category-widget">
                        <div class="widget-title">
                            <h4>Category</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <li><a href="#">Home improvement<span>(9)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="{{ asset('web/images/news/post-1.jpg') }}" alt=""></a></figure>
                                <h5><a href="blog-details.html">Best interior design idea for your home.</a></h5>
                                <span class="post-date">April 10, 2020</span>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget tags-widget">
                        <div class="widget-title">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="tags-list clearfix">
                                <li><a href="blog-details.html">Real Estate</a></li>
                                <li><a href="blog-details.html">HouseHunting</a></li>
                                <li><a href="blog-details.html">Architecture</a></li>
                                <li><a href="blog-details.html">Interior</a></li>
                                <li><a href="blog-details.html">Sale</a></li>
                                <li><a href="blog-details.html">Rent Home</a></li>
                                <li><a href="blog-details.html">Listing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container -->
@endsection
