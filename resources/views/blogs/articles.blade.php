@extends('component.layout')

@section('content')
    @include('partials._header')
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
                                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><a href="blog-details.html"><img
                                                        src="{{ asset('web/images/news/news-9.jpg') }}" alt=""></a>
                                            </figure>
                                            <span class="category">Featured</span>
                                        </div>
                                        <div class="lower-content">
                                            <h4><a href="blog-details.html">Reader’s Look On An Important Steps Needed.</a>
                                            </h4>
                                            <ul class="post-info clearfix">
                                                <li class="author-box">
                                                    <figure class="author-thumb"><img
                                                            src="{{ asset('web/images/news/author-1.jpg') }}"
                                                            alt=""></figure>
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
                                <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><a href="#"><img
                                                        src="{{ asset('web/images/news/news-12.jpg') }}" alt=""></a>
                                            </figure>
                                            <span class="category">Featured</span>
                                        </div>
                                        <div class="lower-content">
                                            <h4><a href="blog-details.html">A Digital Prescription For The Pharma
                                                    Industry.</a></h4>
                                            <ul class="post-info clearfix">
                                                <li class="author-box">
                                                    <figure class="author-thumb"><img
                                                            src="{{ asset('web/images/news/author-3.jpg') }}"
                                                            alt=""></figure>
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
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="{{ asset('web/images/news/post-1.jpg') }}" alt=""></a>
                                    </figure>
                                    <h5><a href="blog-details.html">Best interior design idea for your home.</a></h5>
                                    <span class="post-date">April 10, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container -->
@endsection
