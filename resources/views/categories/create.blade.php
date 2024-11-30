@extends('layouts.main', ['title' => 'Categories Management'])

@section('content')

 {{-- <div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Categores Table</h3>

                </div>
                <div class="card-body" class="table-responsive">

                    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                          <input type="text" name="name" class="form control" placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" id="slug" name="slug" placeholder="Enter slug">
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" placeholder="Enter description" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Image URL</label>
                            <input type="url" id="image" name="image" placeholder="Enter image URL">
                        </div>
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select id="status" name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<h1>Create Categories
    <a href="{{ url('/categories') }}" class="btn btn-primary">Back</a>
</h1>

    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
            @error('slug')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description"></textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*;capture=camera">
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            {{-- <input type="text" class="form-control" name="status" id="status"> --}}
            <select name="status" id="status" class="form-select">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            @error('status')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection

