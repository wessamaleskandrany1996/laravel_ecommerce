@extends('layouts.front')

@section('title')
 My Cart
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Home
                </a> /
                <a href="{{ url('cart') }}">
                    cart
                </a>
            </h6>
        </div>
    </div>
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                @php
                    $total = 0 ;
                @endphp
                @foreach ($cartItems as $item)
                    <div class="row product_data">
                        <div class="col-md-2">
                            <img src="{{ asset('assets/uploads/product/'.$item->products->image) }}" alt="product in cart" height="70px" width="80px">
                        </div>
                        <div class="col-md-3">
                            <h6>{{ $item->products->name }}</h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>{{ $item->products->selling_price }} $</h6>
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            @if ($item->products->qty > $item->prod_qty)
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width: 130px">
                                    <button class="input-group-text changeQuantity decrement-btn">-</button>
                                    <input type="text" name="quantity" id="Quantity" class="form-control qty-input text-center" value="{{ $item->prod_qty }}">
                                    <button class="input-group-text changeQuantity increment-btn">+</button>
                                </div>
                                @php
                                $total += $item->products->selling_price * $item->prod_qty ;
                                @endphp
                            @else
                                <label class="badge bg-danger">Out Of Stock</label>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i> Delete</button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card-footer">
                <h4>Total Price : {{ $total }} $
                    <a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">CheckOut</a>
                </h4>
            </div>
        </div>
    </div>
@endsection
