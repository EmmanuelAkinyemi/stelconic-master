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

    <!-- property-page-section -->
    <section class="property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix justify-content-center">
                <div class="col-lg-10 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">
                                <h5>Search Reasults: <span>Showing 1-5 of 20 Properties</span></h5>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="short-menu clearfix">
                                    <button class="list-view on"><i class="icon-35"></i></button>
                                    <button class="grid-view"><i class="icon-36"></i></button>
                                </div>
                            </div>
                        </div>
                        @unless (count($properties) == 0)
                            <div class="wrapper list">

                                <div class="deals-list-content list-item">
                                    @foreach ($properties as $property)
                                        <div class="deals-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image">
                                                        <img
                                                            style="height:350px; width:100%"
                                                            src="{{ $property->images ? asset('storage/' . $property->images) : asset('images/no-image.jpeg') }}"
                                                            alt="{{ $property->title }}"
                                                        />
                                                    </figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">{{ $property->category }}</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="title-text">
                                                        <h4 class="text-capitalize"><a href="/properties/{{ $property->id }}">{{ $property->title }}</a></h4>
                                                    </div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4># {{ $property->price }}</h4>
                                                        </div>
                                                    </div>
                                                    <p
                                                        style="width: 100%; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"
                                                        >
                                                        {{ $property->description }}
                                                    </p>
                                                    <div class="other-info-box clearfix">
                                                        <div class="btn-box pull-left">
                                                            <a 
                                                                href="/properties/{{ $property->id}}"
                                                                class="theme-btn btn-two">See Details
                                                            </a>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><span><i class="icon-12"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="property-list.html" class="current">1</a></li>
                                    <li><a href="property-list.html">2</a></li>
                                    <li><a href="property-list.html">3</a></li>
                                    <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        @else
                            <p style="text-align:center">The property page is currrently empty</p>
                        @endunless
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property-page-section end -->
@endsection
