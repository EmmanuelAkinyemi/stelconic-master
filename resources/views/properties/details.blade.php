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
                        <li><i class="far fa-clock"></i>Mon - Sat 9.00 - 18.00</li>
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
                        <figure class="logo"><a href="/"><img src="{{ asset('web/images/logo.png') }}"
                                    alt=""></a></figure>
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
                                    <li class="current"><a href="property"><span>Property</span></a>
                                    </li>
                                    <li class=""><a href="blog"><span>Blog</span></a>
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
                        <figure class="logo"><a href="/"><img src="{{ asset('web/images/logo.png') }}"
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

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="{{ asset('web/images/logo-2.png') }}" alt=""
                        title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
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
    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('web/images/shape/shape-9.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('web/images/shape/shape-10.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Property</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Property</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- property-details -->
    <section class="property-details property-details-one">
        <div class="auto-container">
            <div class="top-details clearfix">
                <div class="left-column pull-left clearfix">
                    <h3>The Citizen Apartment</h3>
                    <div class="author-info clearfix">
                        <div class="author-box pull-left">
                            <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt="">
                            </figure>
                            <h6>Michael Bean</h6>
                        </div>
                        <ul class="rating clearfix pull-left">
                            <li><i class="icon-39"></i></li>
                            <li><i class="icon-39"></i></li>
                            <li><i class="icon-39"></i></li>
                            <li><i class="icon-39"></i></li>
                            <li><i class="icon-40"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="right-column pull-right clearfix">
                    <div class="price-inner clearfix">
                        <ul class="category clearfix pull-left">
                            <li><a href="property-details.html">Building</a></li>
                            <li><a href="property-details.html">For Buy</a></li>
                        </ul>
                        <div class="price-box pull-right">
                            <h3>$30,000.00</h3>
                        </div>
                    </div>
                    <ul class="other-option pull-right clearfix">
                        <li><a href="property-details.html"><i class="icon-37"></i></a></li>
                        <li><a href="property-details.html"><i class="icon-38"></i></a></li>
                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-details-content">
                        <div class="carousel-inner">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <figure class="image-box"><img src="assets/images/resource/property-details-1.jpg"
                                        alt=""></figure>
                                <figure class="image-box"><img src="assets/images/resource/property-details-1.jpg"
                                        alt=""></figure>
                                <figure class="image-box"><img src="assets/images/resource/property-details-1.jpg"
                                        alt=""></figure>
                            </div>
                        </div>
                        <div class="discription-box content-widget">
                            <div class="title-box">
                                <h4>Property Description</h4>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt
                                    labore dolore magna aliqua enim minim veniam quis nostrud exercitation laboris
                                    nisi ut aliquip ea commodo consequat duis aute irure dolor in reprehenderit in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat</p>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt
                                    mollit anim est laborum. Sed perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium dolore mque laudantium totam rem aperiam.</p>
                            </div>
                        </div>
                        <div class="details-box content-widget">
                            <div class="title-box">
                                <h4>Property Details</h4>
                            </div>
                            <ul class="list clearfix">
                                <li>Property ID: <span>ZOP251C</span></li>
                                <li>Rooms: <span>06</span></li>
                                <li>Garage Size: <span>200 Sq Ft</span></li>
                                <li>Property Price: <span>$30,000</span></li>
                                <li>Bedrooms: <span>04</span></li>
                                <li>Year Built: <span>01 April, 2019</span></li>
                                <li>Property Type: <span>Apertment</span></li>
                                <li>Bathrooms: <span>03</span></li>
                                <li>Property Status: <span>For Sale</span></li>
                                <li>Property Size: <span>2024 Sq Ft</span></li>
                                <li>Garage: <span>01</span></li>
                            </ul>
                        </div>
                        <div class="amenities-box content-widget">
                            <div class="title-box">
                                <h4>Amenities</h4>
                            </div>
                            <ul class="list clearfix">
                                <li>Air Conditioning</li>
                                <li>Cleaning Service</li>
                                <li>Dishwasher</li>
                                <li>Hardwood Flows</li>
                                <li>Swimming Pool</li>
                                <li>Outdoor Shower</li>
                                <li>Microwave</li>
                                <li>Pet Friendly</li>
                                <li>Basketball Court</li>
                                <li>Refrigerator</li>
                                <li>Gym</li>
                            </ul>
                        </div>
                        <div class="floorplan-inner content-widget">
                            <div class="title-box">
                                <h4>Floor Plan</h4>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>First Floor</h5>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content-box">
                                            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                                                officia deserunt mollit anim est laborum. Sed perspiciatis unde
                                                omnis iste natus error sit voluptatem accusa dolore mque laudant.
                                            </p>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/floor-1.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>Second Floor</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content-box">
                                            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                                                officia deserunt mollit anim est laborum. Sed perspiciatis unde
                                                omnis iste natus error sit voluptatem accusa dolore mque laudant.
                                            </p>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/floor-1.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>Third Floor</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content-box">
                                            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                                                officia deserunt mollit anim est laborum. Sed perspiciatis unde
                                                omnis iste natus error sit voluptatem accusa dolore mque laudant.
                                            </p>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/floor-1.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="location-box content-widget">
                            <div class="title-box">
                                <h4>Location</h4>
                            </div>
                            <ul class="info clearfix">
                                <li><span>Address:</span> Virginia temple hills</li>
                                <li><span>Country:</span> United State</li>
                                <li><span>State/county:</span> California</li>
                                <li><span>Neighborhood:</span> Andersonville</li>
                                <li><span>Zip/Postal Code:</span> 2403</li>
                                <li><span>City:</span> Brooklyn</li>
                            </ul>
                            <div class="google-map-area">
                                <div class="google-map" id="contact-google-map" data-map-lat="40.712776"
                                    data-map-lng="-74.005974" data-icon-path="assets/images/icons/map-marker.png"
                                    data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="12"
                                    data-markers='{
                                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                    }'>

                                </div>
                            </div>
                        </div>
                        <div class="nearby-box content-widget">
                            <div class="title-box">
                                <h4>What’s Nearby?</h4>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="fas fa-book-reader"></i></div>
                                    <div class="inner">
                                        <h5>Education:</h5>
                                        <div class="box clearfix">
                                            <div class="text pull-left">
                                                <h6>Western Reserve University <span>(2.10 km)</span></h6>
                                            </div>
                                            <ul class="rating pull-right clearfix">
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-40"></i></li>
                                            </ul>
                                        </div>
                                        <div class="box clearfix">
                                            <div class="text pull-left">
                                                <h6>Georgia Institute of Technology <span>(1.42 km)</span></h6>
                                            </div>
                                            <ul class="rating pull-right clearfix">
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-40"></i></li>
                                            </ul>
                                        </div>
                                        <div class="box clearfix">
                                            <div class="text pull-left">
                                                <h6>Harvey Mudd College <span>(2.10 km)</span></h6>
                                            </div>
                                            <ul class="rating pull-right clearfix">
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-40"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fas fa-coffee"></i></div>
                                    <div class="inner">
                                        <h5>Restaurant:</h5>
                                        <div class="box clearfix">
                                            <div class="text pull-left">
                                                <h6>SC Ranch Market <span>(3.10 km)</span></h6>
                                            </div>
                                            <ul class="rating pull-right clearfix">
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-40"></i></li>
                                            </ul>
                                        </div>
                                        <div class="box clearfix">
                                            <div class="text pull-left">
                                                <h6>Chill On The Hill <span>(2.42 km)</span></h6>
                                            </div>
                                            <ul class="rating pull-right clearfix">
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-40"></i></li>
                                            </ul>
                                        </div>
                                        <div class="box clearfix">
                                            <div class="text pull-left">
                                                <h6>Gordon Ramsay Hell's Kitchen <span>(1.22 km)</span></h6>
                                            </div>
                                            <ul class="rating pull-right clearfix">
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-40"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fas fa-capsules"></i></div>
                                    <div class="inner">
                                        <h5>Health & Medical:</h5>
                                        <div class="box clearfix">
                                            <div class="text pull-left">
                                                <h6>North Star Medical Clinic <span> (2.10 km)</span></h6>
                                            </div>
                                            <ul class="rating pull-right clearfix">
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-40"></i></li>
                                            </ul>
                                        </div>
                                        <div class="box clearfix">
                                            <div class="text pull-left">
                                                <h6>Clairvoyant Healing <span>(1.42 km)</span></h6>
                                            </div>
                                            <ul class="rating pull-right clearfix">
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-39"></i></li>
                                                <li><i class="icon-40"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="statistics-box content-widget">
                            <div class="title-box">
                                <h4>Page Statistics</h4>
                            </div>
                            <figure class="image-box">
                                <a href="assets/images/resource/statistics-1.png" class="lightbox-image"
                                    data-fancybox="gallery"><img src="assets/images/resource/statistics-1.png"
                                        alt=""></a>
                            </figure>
                        </div>
                        <div class="schedule-box content-widget">
                            <div class="title-box">
                                <h4>Schedule A Tour</h4>
                            </div>
                            <div class="form-inner">
                                <form action="http://azim.commonsupport.com/Realshed/property-details.html"
                                    method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <i class="far fa-calendar-alt"></i>
                                                <input type="text" name="date" placeholder="Tour Date"
                                                    id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <i class="far fa-clock"></i>
                                                <input type="text" name="time" placeholder="Any Time">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Your Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Your Email"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="tel" name="phone" placeholder="Your Phone" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="property-sidebar default-sidebar">
                        <div class="author-widget sidebar-widget">
                            <div class="author-box">
                                <figure class="author-thumb"><img src="assets/images/resource/author-1.jpg" alt="">
                                </figure>
                                <div class="inner">
                                    <h4>Michael Bean</h4>
                                    <ul class="info clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>84 St. John Wood High Street,
                                            St Johns Wood</li>
                                        <li><i class="fas fa-phone"></i><a href="tel:03030571965">030 3057 1965</a>
                                        </li>
                                    </ul>
                                    <div class="btn-box"><a href="agents-details.html">View Listing</a></div>
                                </div>
                            </div>
                            <div class="form-inner">
                                <form action="http://azim.commonsupport.com/Realshed/property-details.html"
                                    method="post" class="default-form">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="calculator-widget sidebar-widget">
                            <div class="calculate-inner">
                                <div class="widget-title">
                                    <h4>Mortgage Calculator</h4>
                                </div>
                                <form method="post"
                                    action="http://azim.commonsupport.com/Realshed/mortgage-calculator.html"
                                    class="default-form">
                                    <div class="form-group">
                                        <i class="fas fa-dollar-sign"></i>
                                        <input type="number" name="total_amount" placeholder="Total Amount">
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-dollar-sign"></i>
                                        <input type="number" name="down_payment" placeholder="Down Payment">
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-percent"></i>
                                        <input type="number" name="interest_rate" placeholder="Interest Rate">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-calendar-alt"></i>
                                        <input type="number" name="loan" placeholder="Loan Terms(Years)">
                                    </div>
                                    <div class="form-group">
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Monthly">Monthly</option>
                                                <option value="1">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Calculate Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
