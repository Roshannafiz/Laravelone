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
                <h3 class="card-title">Add Product</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('/products/') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="sku" class="col-sm-3 col-form-label">Product SKU</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sku" placeholder="Product SKU"
                                autocomplete="chrome-off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="slug" class="col-sm-3 col-form-label">Product Slug</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Product Slug">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="regular_price" class="col-sm-3 col-form-label">Ragular Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="regular_price" placeholder="Regular Price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="seal_price" class="col-sm-3 col-form-label">Seal Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="seal_price" placeholder="Seal Price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="quantity" class="col-sm-3 col-form-label">Product Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="quantity" placeholder="Product Quantity">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label">Select Category</label>
                        <div class="col-sm-9">
                            <select name="category" class="form-control">
                                <option>Select Category</option>
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="sub_category" class="col-sm-3 col-form-label">Select Sub Category</label>
                        <div class="col-sm-9">
                            <select name="subcategory" class="form-control">
                                <option>Sub Category</option>
                                @foreach ($subcategories as $subcategorie)
                                    <option value="{{ $subcategorie->id }}">{{ $subcategorie->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="brand" class="col-sm-3 col-form-label">Select Brand</label>
                        <div class="col-sm-9">
                            <select name="brand" class="form-control">
                                <option>Select Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="unit" class="col-sm-3 col-form-label">Select Unit</label>
                        <div class="col-sm-9">
                            <select name="unit" class="form-control">
                                <option>Select Unit</option>
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="size" class="col-sm-3 col-form-label">Select Size</label>
                        <div class="col-sm-9">
                            <select name="size" class="form-control">
                                <option>Select Size</option>
                                @foreach ($sizes as $size)

                                    <option value="{{ $size->id }}">
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
                                <option>Select Color</option>
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">
                                        {{ implode(',', Json_decode($color->color)) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="stock_status" class="col-sm-3 col-form-label">Stock</label>
                        <div class="col-sm-9">
                            <select name="stock_status" class="form-control">
                                <option value="instock">In Stock</option>
                                <option value="outofstock">Out Of Stock</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="featured" class="col-sm-3 col-form-label">Featured</label>
                        <div class="col-sm-9">
                            <select name="featured" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="short_description" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="short_description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" rows="6" required></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="product_image" class="col-sm-3 col-form-label">Product Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="product_image" required class="dropify">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="gallery_image" class="col-sm-3 col-form-label">Gallery Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="gallery_image[]" multiple required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Add Product</button>

                    <a href="{{ url('/products') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>


    <script>
        $('#name').keyup(function(e) {
            $.get('{{ route('checkSlug') }}', {
                'name': $(this).val()
            }, function(data) {
                $('#slug').val(data.slug);
            })
        });
    </script>
@endsection
