@extends('component.layout')

@section('content')
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
                                <li class=""><a href="/"><span>Home</span></a>
                                </li>
                                <li ><a href="properties"><span>Property</span></a>
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
<!-- ragister-section -->
<section class="ragister-section centred sec-pad">
    <div class="auto-container">
        <div class="row justify-content-center clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="sec-title">
                    <h5>Sign up</h5>
                    <p>Create an agency account with stelconic</p>
                </div>
                <div>
                    <div class="inner-box">
                        <h4>Sign up</h4>
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="post" class="default-form">
                            @csrf
                            <div class="form-group">
                                <label>Agent name</label>
                                <input type="text" name="name" required="">
                            </div>
                            <input type="text" name="usertype" value="agent" hidden>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password" required="">
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn btn-one">Sign up</button>
                            </div>
                        </form>
                        <div class="othre-text">
                            <p>Already have an account? <a href="login">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ragister-section end -->
@endsection
