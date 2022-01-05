@extends('admin.admin_master')

@section('admin_content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Update Category</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('update-category/' . $category->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $category->name }}" class="form-control" name="name"
                                placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"
                                rows="3">{{ $category->description }}</textarea>
                        </div>
                    </div>

                    <div>
                        @if ($category->image)
                            <img style="width: 80px; height: 80px;"
                                src="{{ asset('admin/upload-category/' . $category->image) }}" alt="">
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="dropify">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="featured" class="col-sm-3 col-form-label">Featured</label>
                        <div class="col-sm-9">
                            <select name="featured" class="form-control">
                                <option value="0" {{ $category->featured == 0 ? 'selected' : '' }}>No</option>
                                <option value="1" {{ $category->featured == 1 ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Category</button>

                    <a href="{{ url('/categories') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
