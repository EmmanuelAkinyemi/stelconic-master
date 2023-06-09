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
                                    <li class="current"><a href="properties"><span>Property</span></a>
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
            <div class="nav-logo"><a href="/"><img src="{{ asset('images/logo/logo.png') }}" alt=""
                        title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul class="info clearfix">
                    <li><i class="far fa-map-marker-alt"></i>Flat , Block D,Millenium Plaza Enugu-Onitsha Express way,
                        Awka, Anambra State</li>
                    <li><i class="far fa-phone"></i><a href="+2348184007752">+234 818-4007-752</a></li>
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
                    <h3 class="text-capitalize">{{ $property->title }}</h3>
                </div>
                <div class="right-column pull-right clearfix">
                    <div class="price-inner clearfix">
                        <ul class="category clearfix pull-left">
                            <li><span class="bg-warning p-2 rounded text-light">{{ $property->category }}</span></li>
                        </ul>
                        <div class="price-box pull-right">
                            <h3><span style="font-size: 35px" class="text-secondary">#</span> {{ $property->price }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="property-details-content">
                        <img
                            style="height: 700px; width: 100%; position:relative"
                            class="rounded img-fluid shadow-lg mb-2"
                            src="{{ $property->images ? asset('storage/' . $property->images) : asset('images/no-image.jpeg') }}"
                            alt="{{ $property->title }}"
                        />
                        <div class="discription-box content-widget">
                            <div class="title-box">
                                <h4>Property Description</h4>
                            </div>
                            <div class="text">
                                <p>{{ $property->description }}</p>
                            </div>
                        </div>
                        <div class="location-box content-widget">
                            <div class="title-box">
                                <h4>Location</h4>
                            </div>
                            <ul class="info clearfix">
                                <li><span>Address:</span> {{ $property->location }}</li>
                            </ul>

                        </div>
                        <div class="schedule-box content-widget">
                            <div class="title-box">
                                <h4>Contact us </h4>
                            </div>
                            <div class="form-inner">
                                <form action=""
                                    method="post">
                                    <div class="row clearfix">
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
                                                <button type="submit" class="theme-btn btn-one">contact us</button>
                                            </div>
                                        </div>
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
