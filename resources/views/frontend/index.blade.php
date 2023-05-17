@extends('layouts.front')

@section('title')
 Welcome To WISH Ecommerce
@endsection

@section('content')
@include('layouts.inc.slider')
 <div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Trending Products</h2>
            <div class="owl-carousel owl-theme">
                @foreach ($product as $item )
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/product/'.$item->image) }}" height="300px" alt="{{ $item->name }}">
                            <div class="card-body">
                                <h5 class="text-center">{{ $item->name }}</h5>
                                <span class="float-start text-danger"><s>{{ $item->original_price }} $</s></span>

                                <span class="float-end font-weight-bold">Price {{ $item->selling_price }} $</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
 </div>

 <div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Trending Categories</h2>
            <div class="owl-carousel owl-theme">
                @foreach ($categories as $item )
                    <div class="item">
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
@endsection

@section('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
@endsection
