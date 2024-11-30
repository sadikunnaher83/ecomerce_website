@extends('layouts.main', ['title' => 'Categories Management'])

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @session('success')
            <div class="alert alert-success">
            @else
                {{ session('success') }}
            @endsession
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Categores List</h3>
                    <a href="{{ url('categories/create') }}" class="btn btn-primary" float-end>Add Category</a>
                </div>
                <div class="card-body" class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->image }}</td>
                                <td>{{ $category->status == 1 ? 'Active' : 'Not Active' }}</td>
                                <td>{{ $category->Created_at }}</td>
                                <td>{{ $category->Updated_at }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">Show</a>

                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                       @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
