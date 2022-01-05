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
                <h3 class="card-title">Update Product</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('/products/' . $product->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="sku" class="col-sm-3 col-form-label">Product SKU</label>
                        <div class="col-sm-9">
                            <input value="{{ $product->SKU }}" type="text" class="form-control" name="sku"
                                placeholder="Product Code">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input value="{{ $product->name }}" type="text" class="form-control" id="name" name="name"
                                placeholder="Product Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="slug" class="col-sm-3 col-form-label">Product Slug</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $product->slug }}" class="form-control" id="slug" name="slug"
                                placeholder="Product Slug">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="regular_price" class="col-sm-3 col-form-label">Ragular Price</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{ $product->regular_price }}" class="form-control"
                                name="regular_price" placeholder="Regular Price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="seal_price" class="col-sm-3 col-form-label">Seal Price</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{ $product->seal_price }}" class="form-control"
                                name="seal_price" placeholder="Seal Price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="quantity" class="col-sm-3 col-form-label">Product Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{ $product->quantity }}" class="form-control" name="quantity"
                                placeholder="Product Quantity">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label">Select Category</label>
                        <div class="col-sm-9">
                            <select name="category" class="form-control">
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}"
                                        {{ $categorie->id == $product->cat_id ? 'selected' : '' }}>
                                        {{ $categorie->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="sub_category" class="col-sm-3 col-form-label">Select Sub Category</label>
                        <div class="col-sm-9">
                            <select name="subcategory" class="form-control">
                                @foreach ($subcategories as $subcategorie)
                                    <option value="{{ $subcategorie->id }}"
                                        {{ $subcategorie->id == $product->subcat_id ? 'selected' : '' }}>
                                        {{ $subcategorie->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="brand" class="col-sm-3 col-form-label">Select Brand</label>
                        <div class="col-sm-9">
                            <select name="brand" class="form-control">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}"
                                        {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                                        {{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="unit" class="col-sm-3 col-form-label">Select Unit</label>
                        <div class="col-sm-9">
                            <select name="unit" class="form-control">
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}"
                                        {{ $unit->id == $product->unit_id ? 'selected' : '' }}>
                                        {{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="size" class="col-sm-3 col-form-label">Select Size</label>
                        <div class="col-sm-9">
                            <select name="size" class="form-control">
                                @foreach ($sizes as $size)
                                    <option value="{{ $size->id }}"
                                        {{ $size->id == $product->size_id ? 'selected' : '' }}>
                                        {{ implode(',', Json_decode($size->size)) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="color" class="col-sm-3 col-form-label">Select Color</label>
                        <div class="col-sm-9">
                            <select name="color" class="form-control">
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}"
                                        {{ $color->id == $product->color_id ? 'selected' : '' }}>
                                        {{ implode(',', Json_decode($color->color)) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="featured" class="col-sm-3 col-form-label">Featured</label>
                        <div class="col-sm-9">
                            <select name="featured" class="form-control">
                                <option value="0" {{ $product->featured == 0 ? 'selected' : '' }}>No</option>
                                <option value="1" {{ $product->featured == 1 ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="short_description" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="short_description" rows="3"
                                required>{!! $product->short_description !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" rows="3"
                                required>{!! $product->description !!}</textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        @if ($product->product_image)
                            <img style="width: 90px; height: 90px;"
                                src="{{ asset('admin/upload-product/' . $product->product_image) }}" alt="Product Image">
                        @endif
                    </div>


                    <div class="form-group row">
                        <label for="product_image" class="col-sm-3 col-form-label">Product Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="product_image" class="dropify">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gallery_image" class="col-sm-3 col-form-label">Gallery Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="gallery_image[]" multiple>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Product</button>

                    <a href="{{ url('/products') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>


@endsection
