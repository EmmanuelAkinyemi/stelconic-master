
@extends('component.adminLayout')

@section('content')
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto  d-lg-block">
                <h2 class="text-black font-w600">Articles</h2>
                <p class="mb-0">{{ auth()->user()->name }}</p>
            </div>
            <a href="viewArticles" class="btn btn-primary rounded light me-3">Refresh</a>
            <a href="create-articles" class="btn btn-primary rounded"><i class="fas fa-plus me-0"></i></a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Articles</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="display">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th colspan="2">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @unless ($blogs->isEmpty())
                                    @foreach ($blogs as $blog)

                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>
                                                <img
                                                    style="width:100px; height: 100px"
                                                    class="img-fluid img-thumbnail rounded"
                                                    src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('images/no-image.jpeg') }}" alt=""
                                                />
                                            </td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->category_id }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="admin/{{ $blog->id }}/edit-article" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                            class="fas fa-pencil-alt"></i></a>

                                                    <form action="/articles/{{ $blog->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        <button class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="border-gray-300">
                                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                            <p class="text-center">No properties found</p>
                                        </td>
                                    </tr>
                                @endunless
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th colspan="2">action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
