@extends('component.adminLayout')

@section('content')
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto  d-lg-block">
                <h2 class="text-black font-w600">Properties</h2>
                <p class="mb-0">{{ auth()->user()->name }}</p>
            </div>
            <a href="index.html" class="btn btn-primary rounded light me-3">Refresh</a>
            <a href="create-property" class="btn btn-primary rounded"><i class="fas fa-plus me-0"></i></a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Properties</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="display">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th colspan="2">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @unless ($properties->isEmpty())
                                    @foreach ($properties as $property)
                                    
                                        <tr>
                                            <td>1</td>
                                            <td><a href="/properties/{{ $property->id }}">
                                                {{ $property->title }}
                                            </a></td>
                                            <td>System Architect</td>
                                            <td>Rent</td>
                                            <td><span class="badge light badge-success">{{ $property->status }}</span></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="/admin/{{ $property->id }}/edit" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                            class="fas fa-pencil-alt"></i></a>

                                                    <form action="/admin/{{ $property->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        <button href="#" class="btn btn-danger shadow btn-xs sharp"><i
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
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
