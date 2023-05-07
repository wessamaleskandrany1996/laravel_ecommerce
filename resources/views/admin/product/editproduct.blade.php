@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select">
                            <option value="{{ $product->cate_id }}">{{ $product->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" value="{{ $product->name }}" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">slug</label>
                        <input type="text" value="{{ $product->slug }}" name="slug" id="slug" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="original_price">Original Price</label>
                        <input type="number" min="0" value="{{ $product->original_price }}" name="original_price" id="original_price" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="selling_price">Selling Price</label>
                        <input type="number" min="0" value="{{ $product->selling_price }}" name="selling_price" id="selling_price" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="qty">Qty</label>
                        <input type="number" min="0" value="{{ $product->qty }}" name="qty" id="qty" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tax">TAX</label>
                        <input type="text" value="{{ $product->tax }}" name="tax" id="tax" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" value="{{ $product->meta_title }}" name="meta_title" id="meta_title" class="form-control">
                    </div>
                    @if ($product->image)
                        <img src="{{ asset('assets/uploads/product/'.$product->image) }}" height="200px" alt="product image">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="small_description">Small Description</label>
                        <textarea name="small_description" id="small_description" rows="3" class="form-control">{{ $product->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="3" class="form-control">{{ $product->description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea rows="3" name="meta_description" id="meta_description" class="form-control">{{ $product->meta_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_keyword">Meta Keywords</label>
                        <textarea rows="3" name="meta_keywords" id="meta_keyword" class="form-control">{{ $product->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" {{ $product->status == '1'?'checked':'' }} name="status" id="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="trending">Trending</label>
                        <input type="checkbox" {{ $product->trending == '1'?'checked':'' }} name="trending" id="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" name="update_product_btn">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
