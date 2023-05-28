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
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card bg-danger property-bx text-white">
                            <div class="card-body">
                                <div class="media d-sm-flex d-block align-items-center">
                                    <span class="me-4 d-block mb-sm-0 mb-3">
                                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                            xmlns="../../www.w3.org/2000/svg.html">
                                            <path
                                                d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z"
                                                fill="white" />
                                            <path
                                                d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z"
                                                fill="white" />
                                            <path
                                                d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    <div class="media-body mb-sm-0 mb-3 me-5">
                                        <h4 class="fs-22 text-white">Total Properties</h4>
                                        <div class="progress mt-3 mb-2" style="height:8px;">
                                            <div class="progress-bar bg-white progress-animated"
                                                style="width: 86%; height:8px;" role="progressbar">
                                                <span class="sr-only">86% Complete</span>
                                            </div>
                                        </div>
                                        <span class="fs-14">Properties on your record</span>
                                    </div>
                                    <span class="fs-46 font-w500">4,562</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 class="fs-36 text-black font-w600">2,356</h2>
                                        <p class="fs-18 mb-0 text-black font-w500">Articles Available</p>
                                        <span class="fs-13"></span>
                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1"
                                            data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                        <small class="text-primary"><i class="fas fas-user"></i></small>
                                        <span class="circle bgl-primary"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 class="fs-36 text-black font-w600">2,206</h2>
                                        <p class="fs-18 mb-0 text-black font-w500">Total Users</p>
                                    </div>
                                    <div>
                                        <i class="fas fas-user text-black"></i>
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
