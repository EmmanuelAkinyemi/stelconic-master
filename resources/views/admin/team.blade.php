@extends('component.adminLayout')

@section('content')
<div class="container-fluid">
    <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
        <div class="me-auto  d-lg-block">
            <h2 class="text-black font-w600">Team Member Control Center</h2>
            <p class="mb-0">{{ auth()->user()->name }}</p>
        </div>
        <a href="create-property" class="btn btn-primary rounded"><i class="fas fa-plus me-0"></i></a>
    </div>

    <div class="row">
        @unless (count($teams) == 0)
            @foreach ($teams as $teams)
                <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid w-100 h-75 relative" src="{{ asset("admin/images/profile/pic1.jpg") }}" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4>{{ $team->name }}</h4>
                                    <p><span class="text-small fw-light">{{ $team->role }}</span></p>
                                    <div class="row clearfix">
                                        <div class="col-6">
                                            <li><a href=""><i class="fa fa-pen text-success"></i></a></li>
                                        </div>
                                        <div class="col-6">
                                            <li><a href=""><i class="fa fa-trash text-danger"></i></a></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            @else
                <p>Team members are yet to be listed</p>
            @endunless
        </div>
    </div>
</div>
@endsection
