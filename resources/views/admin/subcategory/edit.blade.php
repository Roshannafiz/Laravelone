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
                <h3 class="card-title">Update Sub Category</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('update-sub-category/' . $subcategory->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Sub Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $subcategory->name }}" class="form-control" name="name"
                                placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"
                                rows="3">{{ $subcategory->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="select_category" class="col-sm-3 col-form-label">Select Category</label>
                        <div class="col-sm-9">
                            <select name="category" class="form-control">
                                <option disabled>Select Category</option>
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Sub Category</button>
                    <a href="{{ url('/subcategories') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
