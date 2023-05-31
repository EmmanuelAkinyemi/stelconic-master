@extends('component.layout')

@section('content')
    @include('partials._header')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{ asset('web/images/background/page-title-5.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Blog</h1>
                <p class="text-light lead"> stay up to date with our seasoned articles on properties</p>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details sec-pad-2">
        <div class="auto-container">
            <div class="row justify-content-center clearfix">
                <div class="col-lg-11 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img 
                                            style="height: 500px; width: 100%; position:relative"
                                            class="rounded img-fluid shadow-lg mb-2"
                                            src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('images/no-image.jpeg') }}"
                                            alt="{{ $blog->title }}" alt="" />
                                    </figure>
                                    <span class="category bg-success">{{ $blog->category_id }}</span>
                                </div>
                                <div class="lower-content">
                                    <h3>{{ $blog->title }}</h3>
                                    <div class="text">
                                        <p>{{ $blog->content }}</p>
                                        <blockquote>
                                            <h4>“{{ $blog->title }}”</h4>
                                        </blockquote>
                                    </div>
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
