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
                <h3 class="card-title">Update Brand</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('update-brand/' . $brand->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Brand Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $brand->name }}" class="form-control" name="name"
                                placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"
                                rows="3">{{ $brand->description }}</textarea>
                        </div>
                    </div>

                    <div>
                        @if ($brand->image)
                            <img style="width: 80px; height: 80px;"
                                src="{{ asset('admin/upload-brand/' . $brand->image) }}" alt="">
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="Image" class="col-sm-3 col-form-label">Brand Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="dropify">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Brand</button>
                    <a href="{{ url('/brands') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>


@endsection
