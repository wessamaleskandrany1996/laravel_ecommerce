@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Category Name" id="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">slug</label>
                        <input type="text" name="slug" placeholder="Enter Slug" id="slug" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" placeholder="Enter meta_title" id="meta_title" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea rows="3" name="meta_description" placeholder="Enter Category Meta Description" id="meta_description" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_keyword">Meta Keywords</label>
                        <textarea rows="3" name="meta_keywords" placeholder="Enter Category Meta Keywords" id="meta_keyword" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" id="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="popular">Popular</label>
                        <input type="checkbox" name="popular" id="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
