@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option value="">select a category</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" required placeholder="Enter product Name" id="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" required placeholder="Enter product slug" id="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="original_price">Original Price</label>
                        <input type="number" min="0" class="form-control" required name="original_price" id="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="selling_price">Selling Price</label>
                        <input type="number" class="form-control" min="0" required name="selling_price" id="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="qty">QTY</label>
                        <input type="number" class="form-control" required min="0" name="qty" id="qty" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tax">TAX</label>
                        <input type="text" name="tax" id="tax" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" required name="meta_title" placeholder="Enter meta_title" id="meta_title" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="image">Upload Image</label>
                        <input type="file" required name="image" id="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="small_description">Small Description</label>
                        <textarea name="small_description" required id="small_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" required id="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea rows="3" required name="meta_description" id="meta_description" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_keyword">Meta Keywords</label>
                        <textarea rows="3" required name="meta_keywords" id="meta_keyword" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" id="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="trending">Trending</label>
                        <input type="checkbox" name="trending" id="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
