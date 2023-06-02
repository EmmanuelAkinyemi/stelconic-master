@extends('component.adminLayout')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto  d-lg-block">
                <h2 class="text-black font-w600">Team Member Control Center</h2>
                <p class="mb-0">{{ auth()->user()->name }}</p>
            </div>
            <a href="create-team" class="btn btn-primary rounded"><i class="fas fa-plus me-0"></i></a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-11">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List new property</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <label class="me-sm-2">Full Name</label>
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control input-rounded "
                                            placeholder="e.g : John Doe">
                                        @error('name')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label class="me-sm-2">Role</label>
                                    <div class="mb-3">
                                        <input type="text" name="role" class="form-control input-rounded"
                                            placeholder="e.g Managing Director">
                                        @error('role')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="me-sm-2">Image</label>
                                <input type="file" name="image" class="form-control input-rounded">
                            </div>
                            <div class="row justify-content-center my-2">
                                <div class="col-xl-6 col-sm-12 col-xs-12">
                                    <div>
                                        <label class="me-sm-2">Email Address(optional)</label>
                                        <input type="email" name="email" class="form-control input-rounded" placeholder="eg: jdow@gmail.com">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-xs-12">
                                    <div>
                                        <label class="me-sm-2">facebok handle(optional)</label>
                                        <input type="text" name="facebook" class="form-control input-rounded" placeholder="https://web.facebook.com/johndoe">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="me-sm-2">facebok handle(optional)</label>
                                <input type="text" name="twitter" class="form-control input-rounded" placeholder="@jdoexperia">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
