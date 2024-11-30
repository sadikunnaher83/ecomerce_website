



@extends('layouts.main', ['title' => 'Categories Management'])

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">show Category List</div>

                <div class="card-body">
                    <h1>Show Categories Details
                        <a href="{{ url('/categories') }}" class="btn btn-primary">Back</a>
                    </h1>
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <p>
                                    {{ $category->name }}
                                </p>

                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <p>
                                    {{ $category->slug }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                               <p>
                                {{ $category->description }}
                               </p>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <p>
                                    {{ $category->image }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                               <p>
                                {{ $category->status }}
                               </p>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



