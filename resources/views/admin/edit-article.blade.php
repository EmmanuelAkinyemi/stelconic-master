@extends('component.adminLayout')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto  d-lg-block">
                <h2 class="text-black font-w600">Update Article</h2>
                <p class="mb-0">{{ auth()->user()->name }}</p>
            </div>
            <a href="create-property" class="btn btn-primary rounded"><i class="fas fa-plus me-0"></i></a>
        </div>


        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-11">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit <span class="text-info font-weight-bold">{{ $blog->title }}</span></h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="/articles/{{ $blog->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <label class="me-sm-2">blog Title</label>
                                        <div class="mb-3">
                                            <input type="text" name="title" class="form-control input-rounded "
                                                value="{{ $blog->title }}">
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
                                            <option selected>{{ $blog->category_id }}</option>
                                            <option value="land">Land</option>
                                            <option value="luxury">Luxury</option>
                                            <option value="House">House</option>
                                        </select>
                                        @error('category_id')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-xl-6 col-lg-6 my-1">
                                        <label class="me-sm-2">Cover photo</label>
                                        <input type="file" name="image" class="form-control input-rounded">
                                    </div>
                                </div>
                                <div class="mb-3">

                                    <img
                                    style="height:200px; width:200px"
                                    class="img-fluid img-thumbnail rounded mx-auto d-block"
                                    src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('images/no-image.jpeg') }}"
                                    alt=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label class="me-sm-2">Content</label>
                                    <textarea name="content" class="form-control" rows="6" id="description">{{ $blog->content }}</textarea>
                                    @error('description')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update Article</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
