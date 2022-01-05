@extends('admin.admin_master')

@section('admin_content')
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Products</h4>
                <div class="row">
                    <div class="col-12">
                        <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="SKU #: activate to sort column descending"
                                                    style="width: 112.734px;">SKU #</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 184.438px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Category: activate to sort column ascending"
                                                    style="width: 206.984px;">Category</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Price: activate to sort column ascending"
                                                    style="width: 107.078px;">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Brand: activate to sort column ascending"
                                                    style="width: 135.281px;">Brand</th>

                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Product Image: activate to sort column ascending"
                                                    style="width: 147.25px;">Product Image</th>

                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 121.688px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 115.547px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $product->SKU }}</td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->category->name }}</td>
                                                    <td>${{ $product->regular_price }}</td>
                                                    <td>{{ $product->brand->name }}</td>
                                                    <td>
                                                        {{-- Show Gallery
                                                        @php
                                                            $product['gallery_image'] = explode('|', $product->gallery_image);
                                                        @endphp
                                                        Image @foreach ($product->gallery_image as $images)
                                                        <img style="width: 70px; height: 70px;"
                                                            src="{{ asset('admin/upload-product/gallery/' . $images) }}"
                                                        alt="Product Image">
                                                    @endforeach --}}
                                                        <img style="width: 100px; height: 100px;"
                                                            src="{{ asset('admin/upload-product/' . $product->product_image) }}"
                                                            alt="Product Image">
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $product->id }}" class="toggle-class-product"
                                                            type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle-product" data-on="Active"
                                                            data-off="Inactive" {{ $product->status ? 'checked' : '' }}>
                                                    </td>

                                                    <td class="row mt-4">
                                                        <a href="{{ url('products/' . $product->id . '/edit') }}"
                                                            class="btn m-1" style="background-color: #007BFF">
                                                            <i class="far fa-edit text-light"></i>
                                                        </a>

                                                        <form action="{{ url('products/' . $product->id) }}" method="POST"
                                                            class="mt-1">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn"
                                                                style="background-color: #C82333">
                                                                <i class="far fa-trash-alt text-light"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
