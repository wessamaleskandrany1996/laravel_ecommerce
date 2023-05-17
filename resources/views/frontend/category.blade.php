@extends('layouts.front')
@section('title')
    Categories
@endsection
@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Categories </h6>
    </div>
</div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Trending Categories</h2>
                    <div class="row">
                        @foreach ($category as $item)
                            <div class="col-md-3 mb-3">
                                <a href="{{ url('view-category/'.$item->slug) }}">
                                    <div class="card">
                                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" height="300px" alt="{{ $item->name }}">
                                        <div class="card-body">
                                            <h5 class="text-center">{{ $item->name }}</h5>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
