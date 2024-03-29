@extends('component.adminLayout')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto  d-lg-block">
                <h2 class="text-black font-w600">Write Article</h2>
                <p class="mb-0">{{ auth()->user()->name }}</p>
            </div>
            <a href="index.html" class="btn btn-primary rounded light me-3">Refresh</a>
            <a href="create-property" class="btn btn-primary rounded"><i class="fas fa-pencil me-0"></i></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-11">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Write new article</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <label class="me-sm-2">Article Title</label>
                                        <div class="mb-3">
                                            <input type="text" name="title" class="form-control input-rounded "
                                                placeholder="e.g : Nature of land in the south east">
                                            @error('title')
                                                <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label class="me-sm-2">Category</label>
                                        <select name="category_id"
                                            class="me-sm-2 default-select-rounded input form-control wide"
                                            id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="land">Land</option>
                                            <option value="luxury">Luxury</option>
                                            <option value="House">House</option>
                                        </select>
                                        @error('category_id')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="me-sm-2">Cover photo</label>
                                    <input type="file" name="image" class="form-control input-rounded"">
                                </div>
                                <div class="mb-3">
                                    <label class="me-sm-2">Content</label>
                                    <textarea name="content" class="form-control" rows="6" id="content" placeholder="Lorem Ipsum..."></textarea>
                                    @error('content')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Generate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection