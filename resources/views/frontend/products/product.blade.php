@extends('layouts.front')
@section('title',$products->name)
@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">Categories / {{ $products->category->name }} / {{ $products->name }}</h6>
        </div>
    </div>
    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/product/'.$products->image) }}" class="w-100" alt="{{ $products->name }}">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->name }}
                            @if ($products->trending == '1')
                                <label style="font-size: 16px" class="float-end badge bg-danger trending_tag">Trending</label>
                            @endif
                        </h2>
                        <hr>
                        <label class="me-3">Original Price : <s>{{ $products->original_price }} $</s></label>
                        <label class="fw-bold float-end">Selling Price : {{ $products->selling_price }} $</label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <hr>
                        @if ($products->qty > 0)
                            <label class="badge bg-success">In Stock</label>
                        @else
                            <label class="badge bg-danger">Out Of Stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="widows: 130px;">
                                    <span class="input-group-text decrement-btn pointer">-</span>
                                    <input type="text" name="quantity" value="1" id="Quantity" class="form-control text-center qty-input">
                                    <span class="input-group-text increment-btn pointer">+</span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br/>
                                @if ($products->qty > 0)
                                    <button type="button" class="btn btn-primary me-3 addToCartbtn float-start">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                                @endif
                                <button type="button" class="btn btn-success me-3 float-start">Add To Wish List <i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
