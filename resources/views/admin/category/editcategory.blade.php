@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" value="{{ $category->name }}" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">slug</label>
                        <input type="text" value="{{ $category->slug }}" name="slug" id="slug" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" value="{{ $category->meta_title }}" name="meta_title" id="meta_title" class="form-control">
                    </div>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="category image">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea rows="3" name="meta_description" id="meta_description" class="form-control">{{ $category->meta_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_keyword">Meta Keywords</label>
                        <textarea rows="3" name="meta_keywords" id="meta_keyword" class="form-control">{{ $category->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" {{ $category->status == '1'?'checked':'' }} name="status" id="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="popular">Popular</label>
                        <input type="checkbox" {{ $category->popular == '1'?'checked':'' }} name="popular" id="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" name="update_category_btn">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
