@extends('component.adminLayout')

@section('content')
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto  d-lg-block">
                <h2 class="text-black font-w600">Dashboard</h2>
                <p class="mb-0">Welcome {{ auth()->user()->name }}</p>
            </div>
            <a href="index.html" class="btn btn-primary rounded light me-3">Refresh</a>
            <a href="javascript:void(0);" class="btn btn-primary rounded"><i class="fas fa-plus me-0"></i></a>
        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-primary">
                                <div class="card-body  p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <i class="la la-users"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Total users</p>
                                            <h3 class="text-white">3280</h3>
                                            <div class="progress mb-2 bg-secondary">
                                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                            </div>
                                            <small>80% Increase in 20 Days</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-warning">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <i class="la la-user"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Properties</p>
                                            <h3 class="text-white">245</h3>
                                            <div class="progress mb-2 bg-primary">
                                                <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                            </div>
                                            <small>50% Increase in 25 Days</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-secondary">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <i class="la la-graduation-cap"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Articles</p>
                                            <h3 class="text-white">28</h3>
                                            <div class="progress mb-2 bg-primary">
                                                <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                            </div>
                                            <small>76% Increase in 20 Days</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-danger ">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <i class="la la-dollar"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1">Fees Collect</p>
                                            <h3 class="text-white">250$</h3>
                                            <div class="progress mb-2 bg-secondary">
                                                <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                            </div>
                                            <small>30% Increase in 30 Days</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
