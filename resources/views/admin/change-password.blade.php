@extends('component.adminLayout')

@section('content')
<div class="container-fluid">
    <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
        <div class="me-auto  d-lg-block">
            <h2 class="text-black font-w600">Change Default Password</span></h2>
            <p class="mb-0">{{ auth()->user()->name }}</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-11">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Change Current Password</h4>
                </div>
                @foreach ($errors->all() as $error)
                            <p class="text-center text-danger">{{ $error }}</p>
                         @endforeach
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('change.password') }}" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('put') --}}

                                    <label class="me-sm-2">Current Password</label>
                                    <div class="mb-3">
                                        <input type="text" name="current_password" class="form-control input-rounded "
                                            placeholder="********">
                                        @error('currrent_password')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <label class="me-sm-2">New Password</label>
                                    <div class="mb-3">
                                        <input type="text" name="new_password" class="form-control input-rounded "
                                            placeholder="*******">
                                        @error('new_password')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <label class="me-sm-2">Confirm New Password</label>
                                    <div class="mb-3">
                                        <input type="text" name="new_confirm_password" class="form-control input-rounded "
                                            placeholder="*******">
                                        @error('new_confirm_password')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>


                            <button type="submit" class="btn btn-primary rounded">Set Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
