    @extends('component.layout')

    @section('content')
        <!-- main header -->
        <header class="main-header header-style-two">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{ asset('images/logo/logo.png') }}"
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
                                        <li class="current"><a href="/" ><span style="color: rgb(31, 216, 31)">Home</span></a>
                                        </li>
                                        <li><a href="about"><span>About</span></a>
                                        </li>
                                        <li class=""><a href="properties"><span>Property</span></a>
                                        </li>
                                        <li class=""><a href="blogs"><span>Blog</span></a>
                                        </li>
                                        <li><a href="contact"><span>Contact</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                            {{-- @auth
                                <div class="menu-right-content">
                                    <span class="text-lowercase mx-3">
                                        <a href="/dashboard" class="text-light">{{ auth()->user()->email }}</a>
                                    </span>
                                    </li>

                                </div>
                            @else
                                <div class="menu-right-content clearfix">
                                    <div class="sign-box">
                                        <a href="/login"><i class="fas fa-user"></i>Sign In</a>
                                    </div>
                                </div>
                            @endauth --}}
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{ asset('images/logo/logo.png') }}"
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
                            <p>we offer you one of the best properties and land offer.</p>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset('web/images/banner/banner-3.jpg') }})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>Dive into the world of real estate</h2>
                            <p>We offer you great offer on commision and percentage.</p>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset('web/images/banner/banner-4.jpg') }})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>Houses with aesthetic design </h2>
                            <p>We are into ultra modern design models.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-style-two end -->


        <!-- search-field-section -->
        <section class="search-field-section">
            <div class="auto-container">
                <div class="">
                    <div class="inner-container">
                        <div class="search-field">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="/properties" method="get"
                                        class="search-form">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Search Property</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search"
                                                            placeholder="Search by Property, Location or Landmark..."
                                                            required="">
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
                        <h5>What we do?</h5>
                        <h2>Our Services</h2>
                    </div>
                    <div class="btn-box">
                        <span class="theme-btn btn-one">See More</span>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-19"></i></div>
                                    <h4>Property Development</h4>
                                    <p>When it comes to development of land to landed properties think stelconic</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-26"></i></div>
                                    <h4>Real Estate Management</h4>
                                    <p>We assist in the monitoring and maintenace of real estate properties</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-21"></i></div>
                                    <h4>Furnishing</h4>
                                    <p>We help in giving aesthetic designs to house both indoor and outdoor</p>
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
                        <a href="contact" class="theme-btn btn-three">Contact Us Now!</a>
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
                                            <figure class="image">
                                                <img
                                                class="image"
                                                style="height:350px; position:relative"
                                                src="{{ $property->images ? asset('storage/' . $property->images) : asset('images/no-image.jpeg') }}"
                                                alt="{{ $property->title }}"
                                                />
                                            </figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">{{ $property->category }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                        <div class="deals-block-one">
                                            <div class="inner-box">
                                                <div class="lower-content">
                                                    <div class="title-text">
                                                        <h4 class="text-capitalize"><a href="/properties/{{ $property->id }}">{{ $property->title }}</a></h4>
                                                    </div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>#{{ $property->price }}</h4>
                                                        </div>
                                                    </div>
                                                    <p style="width: 100%; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">{{ $property->description }}</p>
                                                    <div class="other-info-box clearfix">
                                                        <div class="btn-box pull-left">
                                                            <a
                                                                href="/properties/{{ $property->id }}"
                                                                class="theme-btn btn-one"
                                                                >
                                                                See Details
                                                            </a>
                                                        </div>
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
                @unless (count($teams) == 0)
                <div class="row clearfix">
                    @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img
                                        style="height: 350px; position:relative"
                                        src="{{ $team->image ? asset('storage/' . $team->image) : asset('images/no-image.jpeg') }}"
                                        alt="{{ $team->name }}"
                                    />
                                </figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a>{{ $team->name }}</a></h4>
                                        <span class="designation">{{ $team->role }}</span>
                                        <ul class="social-links clearfix">
                                            <li><a target="_blank" href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a target="_blank" href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="{{ $team->email }}"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p>Team Members are currently Offline</p>
                @endunless
            </div>
        </section>
        <!-- team-section end -->

        <!-- place-style-two -->
        <section class="place-style-two sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h5>Our Mission</h5>
                                    <h2>Our Pivotal Standpoint</h2>

                                </div>
                                <ul class="place-list clearfix">
                                    <li><a>
                                            <h5>Valuation of landed properties</h5>
                                        </a></li>
                                    <li><a>
                                            <h5>Management of properties</h5>
                                        </a></li>
                                    <li><a>
                                            <h5>Development of properties</h5>
                                        </a></li>
                                    <li><a>
                                            <h5>Skilled up to date analysis</h5>
                                        </a></li>
                                    <li><a>
                                            <h5>Consultancy</h5>
                                        </a></li>
                                </ul>
                                <div class="btn-box">
                                    <a href="About" class="theme-btn btn-one">About</a>
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

        <!-- blog-section -->
        <section class="deals-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Articles</h5>
                    <h2>Our Top Articles</h2>
                </div>
                @unless (count($blogs) == 0)
                    <div class="deals-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                        @foreach ($blogs as $blog)
                            <div class="single-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                        <div class="image-box">
                                            <figure class="image">
                                                <img
                                                class="image"
                                                style="height:350px; position:relative"
                                                src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('images/no-image.jpeg') }}"
                                                alt="{{ $blog->title }}"
                                                />
                                            </figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">{{ $blog->category_id }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                        <div class="deals-block-one">
                                            <div class="inner-box">
                                                <div class="lower-content">
                                                    <div class="title-text">
                                                        <h4 class="text-capitalize"><a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a></h4>
                                                    </div>
                                                    <p style="width: 100%; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">{{ $blog->content }}</p>
                                                    <div class="other-info-box clearfix">
                                                        <div class="btn-box pull-left">
                                                            <a
                                                                href="/blogs/{{ $blog->id }}"
                                                                class="theme-btn btn-one"
                                                                >
                                                                See Details
                                                            </a>
                                                        </div>

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
                    <p style="text-align:center">No Articles Yet Written</p>
                @endunless
            </div>
        </section>
        <!-- blog-section -->
    @endsection
