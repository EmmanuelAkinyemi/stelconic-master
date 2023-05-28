@extends('component.adminLayout')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto  d-lg-block">
                <h2 class="text-black font-w600">Create Properties</h2>
                <p class="mb-0">{{ auth()->user()->name }}</p>
            </div>
            <a href="index.html" class="btn btn-primary rounded light me-3">Refresh</a>
            <a href="create-property" class="btn btn-primary rounded"><i class="fas fa-plus me-0"></i></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-11">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List new property</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" name="title" class="form-control input-rounded "
                                                placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="mb-3">
                                            <input type="number" name="price" class="form-control input-rounded"
                                                placeholder="#300,000">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-xl-6 col-lg-6 my-1">
                                        <label class="me-sm-2">Category</label>
                                        <select name="category" class="me-sm-2 default-select-rounded input form-control wide"
                                            id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">Rent</option>
                                            <option value="2">Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 my-1">
                                        <label class="me-sm-2">Location</label>
                                        <div class="me-sm-2">
                                            <input type="text" name="location" class="form-control input-rounded"
                                                placeholder="e.g :Agu awka">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea name="description" class="form-control" rows="6" id="description" placeholder="Lorem Ipsum..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection