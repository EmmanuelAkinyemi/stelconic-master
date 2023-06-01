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

    <!-- article-page-container -->
    <section class="sidebar-page-container blog-grid sec-pad-2">
        <div class="auto-container">
            <div class="row justify-content-center clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 content-side">
                    <div class="blog-grid-content">
                        <div class="row justify-content-center clearfix">
                        @unless (count($blogs) == 0)
                            @foreach ($blogs as $blog)
                            <div class="col-lg-5 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="blog-details.html">
                                                    <img
                                                        style="height:300px; width:100%; position:relative"
                                                        src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('images/no-image.jpeg') }}" 
                                                        alt="{{ $blog->title }}"
                                                    />
                                                </a>
                                            </figure>
                                            <span class="category">{{ $blog->category }}</span>
                                        </div>
                                        <div class="lower-content">
                                            <h4><a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a>
                                            </h4>
                                            <div class="text">
                                                <p style="width: 100%; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">{{ $blog->content }}</p>
                                            </div>
                                            <div class="btn-box">
                                                <a href="/blogs/{{ $blog->id }}" class="theme-btn btn-two">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center">No article yet written</p>
                        @endunless
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- article-page-container -->
@endsection
