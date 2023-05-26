@extends('component.layout')

@section('content')
<section style="margin-bottom:0px" class="contact-section bg-color-1">
    <div class="auto-container">
        <div class="row align-items-center clearfix ">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <h5>Create</h5>
                        <h2>Create</h2>
                    </div>
                    <div class="form-inner">
                        <form method="post" action={{ route('store') }} id="contact-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="title" placeholder="title" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="price" placeholder="Price" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="category" placeholder="Category" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="description" placeholder="Property Description"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                <div class="google-map-area">
                    <div
                        class="google-map"
                        id="contact-google-map"
                        data-map-lat="40.712776"
                        data-map-lng="-74.005974"
                        data-icon-path="{{ asset('web/images/icons/map-marker.png') }}"
                        data-map-title="Brooklyn, New York, United Kingdom"
                        data-map-zoom="12"
                        data-markers='{
                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","{{ asset('web/images/icons/map-marker.png') }}"]
                        }'>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
