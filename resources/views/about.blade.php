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
                                <h2>Stelconic Properties Limited</h2>
                            </div>
                            <div class="text">
                                <p>Stelconic Properties Limited is a wholly indiginous and dynamic company directed by a team of experienced experts and creative minds. It is duly incorporated with Cooperate Affairs Commission (CAC) of the Federal Republic of Nigeria under the companies and allied matters with our head office.</p>
                                <p>(@flat2,Block D) Millenium Plaza, Enugu-Onitsha Expressway, behind UBA and Total Fuel Station Awka, Anambra State</p>
                            </div>
                            <ul class="list clearfix">
                                <li>Profitability</li>
                                <li>Good Initiatives</li>
                            </ul>
                            <div class="btn-box">
                                <a href="/contact" class="theme-btn btn-one">Contact Us</a>
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
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-block my-3">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-32"></i></div>
                        <h5 class="text-capitalize">Sources Of Landed Property</h5>
                        <p>
                            We help our client to source and secure lands or buildings in case they want to buy empty and genuine land or building in any part of the state of country
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block my-3">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-33"></i></div>
                        <h5>Consultancy Services</h5>
                        <p>
                            We help land owner seek for compensation from government. We also give advice on investment,negotiation, legal implication of property
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block my-3">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-34"></i></div>
                        <h5>Architectural Design</h5>
                        <p>
                            We design, redesign building/structures to the taste and modernity of our client at a particular point in time, ranging from plan to modelling.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block my-3">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-32"></i></div>
                        <h5 class="text-capitalize">Sales and Purchase of Landed Properties</h5>
                        <p>We helpour clients to sell their landed properties such as: Empty land, uncompleted or completed structure. we also buy land or building from those that want to sell and sell to those willing to buy</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block my-3">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-33"></i></div>
                        <h5>Estate Agency and Property Management</h5>
                        <p>
                            We act as agents or auctioneers in a purchaseand also help safeguarging the interest of the owner as well as selection of profitable tenants and maintenance of contractual relatonship
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block my-3">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-34"></i></div>
                        <h5>Property Development</h5>
                        <p>
                            At stelconic we undertake comtract of building houses, drainages and other civil works for our client as suggested by the clients request.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block my-3">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-30"></i></div>
                        <h5>Furnishing</h5>
                        <p>
                            We undertake contracts of interior and exterior design such as House painting, Marble effects, Wallpapper, Stucco, Tiling, POP, Decoration.
                        </p>
                    </div>
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
            <a href="contact" class="theme-btn btn-three">Contact Us</a>
        </div>
    </div>
</div>
</section>
<!-- cta-section end -->

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



@endsection
