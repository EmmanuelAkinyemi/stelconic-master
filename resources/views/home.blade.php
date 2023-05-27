@extends('component.layout')

@section('content')
    <!-- main header -->
    <header class="main-header header-style-two">
        <!-- header-lower -->
        <div class="header-lower">
            <div class="outer-box">
                <div class="main-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="/"><img src="{{ asset('web/images/logo-light.png') }}" alt=""></a></figure>
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
                                    <li class="current"><a href="/"><span>Home</span></a>
                                    </li>

                                    <li class=""><a href="property"><span>Property</span></a>
                                    </li>
                                    <li class=""><a href="blog"><span>Blog</span></a>
                                    </li>
                                    <li><a href="contact"><span>Contact</span></a></li>
                                    <li><a href="create"><span>Create</span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content clearfix">
                        <div class="sign-box">
                            <a href="/login"><i class="fas fa-user"></i>Sign In</a>
                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="sign-box">
                            <button class="btn btn-danger" type="submit"><i class="fas fa-arrow-left"></i>Logout</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="outer-box">
                <div class="main-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.html"><img src="{{ asset('web/images/logo.png') }}"
                                    alt=""></a></figure>
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
    <!-- banner-style-two -->
    <section class="banner-style-two centred">
        <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('web/images/banner/banner-2.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Search Properties for Sale and To Rent</h2>
                        <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('web/images/banner/banner-3.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Search Properties for Sale and To Rent</h2>
                        <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('web/images/banner/banner-4.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Search Properties for Sale and To Rent</h2>
                        <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-style-two end -->


    <!-- search-field-section -->
    <section class="search-field-section">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="inner-container">
                    <div class="search-field">
                        <div class="inner-box">
                            <div class="top-search">
                                <form action="http://azim.commonsupport.com/Realshed/index.html" method="post"
                                    class="search-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Search Property</label>
                                                <div class="field-input">
                                                    <i class="fas fa-search"></i>
                                                    <input type="search" name="search-field"
                                                        placeholder="Search by Property, Location or Landmark..."
                                                        required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <div class="select-box">
                                                    <i class="far fa-compass"></i>
                                                    <select class="wide">
                                                        <option data-display="Input location">Input
                                                            location</option>
                                                        <option value="1">New York</option>
                                                        <option value="2">California</option>
                                                        <option value="3">London</option>
                                                        <option value="4">Maxico</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <label>Property Type</label>
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="All Type">All Type</option>
                                                        <option value="1">Laxury</option>
                                                        <option value="2">Classic</option>
                                                        <option value="3">Modern</option>
                                                        <option value="4">New</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button type="submit"><i class="fas fa-search"></i>Search</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search-field-section end -->
 <!-- chooseus-section -->
 <section style="margin-top:-90px" class="chooseus-section alternate-2 bg-color-1">
    <div class="auto-container">
        <div class="upper-box clearfix">
            <div class="sec-title">
                <h5>What we do we offer?</h5>
                <h2>Our Services</h2>
            </div>
            <div class="btn-box">
                <a href="#" class="theme-btn btn-one">All Categories</a>
            </div>
        </div>
        <div class="lower-box">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-19"></i></div>
                            <h4>Excellent Reputation</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Best Local Agents</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <h4>Personalized Service</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->
    <!-- cta-section -->
    <section class="cta-section alternate-2 centred"
        style="background-image: url({{ asset('web/images/background/cta-1.jpg') }});">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="text">
                    <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
                </div>
                <div class="btn-box">
                    <a href="property-details.html" class="theme-btn btn-three">Contact Us Now!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- deals-style-two -->
    <section class="deals-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Properties</h5>
                <h2>Our Best Deals</h2>
            </div>
            @unless (count($properties) == 0)
            <div class="deals-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                @foreach ($properties as $property)
                <div class="single-item">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('web/images/resource/deals-2.jpg') }}"
                                        alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">{{ $property->category }}</span>
                                <div class="buy-btn"><a href="contact">For Buy</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="title-text">
                                            <h4><a href="property">{{ $property->title }}</a></h4>
                                        </div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>#{{ $property->price }}</h4>
                                            </div>
                                            <div class="author-box pull-right">
                                                <figure class="author-thumb">
                                                    <img src="{{ asset('web/images/feature/author-1.jpg') }}"
                                                        alt="">
                                                    <span>Michael Bean</span>
                                                </figure>
                                            </div>
                                        </div>
                                        <p>{{ $property->price }}</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <div class="btn-box pull-left"><a href="property"
                                                    class="theme-btn btn-one">See Details</a></div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property"><i class="icon-12"></i></a>
                                                </li>
                                                <li><a href="property"><i class="icon-13"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
                <p style="text-align:center">Deals are currently offline</p>
            @endunless
        </div>
    </section>
    <!-- deals-style-two end -->

    <!-- team-section -->
    <section class="team-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title">
                <h5>Our Team</h5>
                <h2>Meet Our Amazing Team</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('web/images/team/team-6.jpg') }}"
                                    alt=""></figure>
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
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('web/images/team/team-7.jpg') }}"
                                    alt=""></figure>
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
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('web/images/team/team-8.jpg') }}"
                                    alt=""></figure>
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


    <!-- testimonial-style-two -->
    <section class="testimonial-style-two"
        style="background-image: url({{ asset('web/images/background/testimonial-1.jpg') }});">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 inner-column">
                    <div class="single-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <div class="text">
                                    <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met
                                        but exceeded To make that happen we are committed to providing an
                                        environment.”</h3>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg"
                                            alt="">
                                    </figure>
                                    <h4>Rebeka Dawson</h4>
                                    <span class="designation">Instructor</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <div class="text">
                                    <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met
                                        but exceeded To make that happen we are committed to providing an
                                        environment.”</h3>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img
                                            src="{{ asset('web/images/resource/testimonial-2.jpg') }}" alt="">
                                    </figure>
                                    <h4>Marc Kenneth</h4>
                                    <span class="designation">Founder CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <div class="text">
                                    <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met
                                        but exceeded To make that happen we are committed to providing an
                                        environment.”</h3>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img
                                            src="{{ asset('web/images/resource/testimonial-1.jpg') }}" alt="">
                                    </figure>
                                    <h4>Owen Lester</h4>
                                    <span class="designation">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-two end -->


    <!-- place-style-two -->
    <section class="place-style-two sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_2">
                        <div class="content-box">
                            <div class="sec-title">
                                <h5>Top Places</h5>
                                <h2>Most Popular Places</h2>
                                <p>Below are list of popular places you might love to explore</p>
                            </div>
                            <ul class="place-list clearfix">
                                <li><a href="categories.html">
                                        <h5>Agwu-Awka</h5><span>(02)</span>
                                    </a></li>
                                <li><a href="categories.html">
                                        <h5>Amenyi</h5><span>(13)</span>
                                    </a></li>
                                <li><a href="categories.html">
                                        <h5>Ifite</h5><span>(05)</span>
                                    </a></li>
                                <li><a href="categories.html">
                                        <h5>Amansea</h5><span>(04)</span>
                                    </a></li>
                                <li><a href="categories.html">
                                        <h5>Ngozi-ka</h5><span>(07)</span>
                                    </a></li>
                            </ul>
                            <div class="btn-box">
                                <a href="categories.html" class="theme-btn btn-one">View All Places</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_1">
                        <div class="image-box">
                            <figure class="image image-1 paroller"><img
                                    src="{{ asset('web/images/resource/place-5.jpg') }}" alt=""></figure>
                            <figure class="image image-2 paroller-2"><img
                                    src="{{ asset('web/images/resource/place-6.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- place-style-two end -->

    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>News & Article</h5>
                <h2>Stay Update With Stelconic</h2>
                <p>Stay upclose by reading through our blogs and articles to get help yourself get more clues on your
                    <br>preferences, also if you'll have anything to contribute or share
                </p>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('web/images/news/news-1.jpg') }}" alt=""></a>
                                </figure>
                                <span class="category">Featured</span>
                            </div>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">Including Animation In Your Design System</a></h4>
                                <ul class="post-info clearfix">
                                    <li class="author-box">
                                        <figure class="author-thumb"><img
                                                src="{{ asset('web/images/news/author-1.jpg') }}" alt="">
                                        </figure>
                                        <h5><a href="blog-details.html">Eva Green</a></h5>
                                    </li>
                                    <li>April 10, 2020</li>
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
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('web/images/news/news-2.jpg') }}" alt=""></a>
                                </figure>
                                <span class="category">Featured</span>
                            </div>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">Taking The Pattern Library To The Next Level</a>
                                </h4>
                                <ul class="post-info clearfix">
                                    <li class="author-box">
                                        <figure class="author-thumb"><img
                                                src="{{ asset('web/images/news/author-2.jpg') }}" alt="">
                                        </figure>
                                        <h5><a href="blog-details.html">George Clooney</a></h5>
                                    </li>
                                    <li>April 09, 2020</li>
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
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('web/images/news/news-3.jpg') }}" alt=""></a>
                                </figure>
                                <span class="category">Featured</span>
                            </div>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">How New Font Technologies Will Improve The Web</a>
                                </h4>
                                <ul class="post-info clearfix">
                                    <li class="author-box">
                                        <figure class="author-thumb"><img
                                                src="{{ asset('web/images/news/author-3.jpg') }}" alt="">
                                        </figure>
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
        </div>
    </section>
    <!-- news-section end -->
@endsection
