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
</div>
@endsection
