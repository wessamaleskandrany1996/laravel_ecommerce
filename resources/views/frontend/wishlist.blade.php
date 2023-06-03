@extends('layouts.front')

@section('title')
 My Wishlist
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Home
                </a> /
                <a href="{{ url('wishlist') }}">
                    wishlist
                </a>
            </h6>
        </div>
    </div>
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                @if ($wishlist->count() > 0)
                    @foreach ($wishlist as $item)
                    <div class="row product_data ">
                        <div class="col-md-2">
                            <img src="{{ asset('assets/uploads/product/'.$item->products->image) }}" alt="product in cart" height="70px" width="80px">
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>{{ $item->products->name }}</h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>{{ $item->products->selling_price }} $</h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            @if ($item->products->qty >= $item->prod_qty)
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" id="Quantity" class="form-control qty-input text-center" value="1">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                            @else
                                <label class="badge bg-danger">Out Of Stock</label>
                            @endif
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-primary me-3 addToCartbtn"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-danger remove-wishlist-item"><i class="fa fa-trash"></i> Delete</button>
                        </div>
                    </div>
                @endforeach
                @else
                    <h4>There Are NO Products In Your Wishlist</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
