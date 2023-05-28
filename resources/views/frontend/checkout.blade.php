@extends('layouts.front')
@section('title')
    welcome to checkout page
@endsection
@section('content')
    <div class="container mt-5">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body ">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6 mt-3 ">
                                <label for="firstName">First Name</label>
                                <input type="text" name="fname" value="{{ Auth::user()->name }}" class="form-control" required placeholder="Enter Your First Name : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lname" value="{{ Auth::user()->lname }}" class="form-control" required placeholder="Enter Your Last Name : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" required placeholder="Enter Your email : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control" required placeholder="Enter Your Phone Number : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="add1">Address 1</label>
                                <input type="text" name="address1" value="{{ Auth::user()->address1 }}" class="form-control" required placeholder="Enter Your Address 1 : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="add2">Address 2</label>
                                <input type="text" name="address2" value="{{ Auth::user()->address2 }}" class="form-control" required placeholder="Enter Your Address 2 : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="city">City</label>
                                <input type="text" name="city" value="{{ Auth::user()->city }}" class="form-control" required placeholder="Enter Your City : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="state">State</label>
                                <input type="text" name="state" value="{{ Auth::user()->state }}" class="form-control" required placeholder="Enter Your State : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="country">Country</label>
                                <input type="text" name="country" value="{{ Auth::user()->country }}" class="form-control" required placeholder="Enter Your Country : ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="code">PIN CODE</label>
                                <input type="text" name="pincode" value="{{ Auth::user()->pincode }}" class="form-control" required placeholder="Enter Your PIN CODE : ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-body">
                        @php
                            $total = 0;
                        @endphp
                        <h6>Order Details</h6>
                        <hr>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item )
                                <tr>
                                    <td>{{ $item->products->name }}</td>
                                    <td>{{ $item->prod_qty }}</td>
                                    <td>{{ $item->products->selling_price }}</td>
                                </tr>
                                @php
                                    $total += $item->products->selling_price * $item->prod_qty ;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <h4>Total Price : {{ $total }} $
                            <button type="submit" class="btn btn-primary btn-sm float-end">Place Order</button>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        </form>

    </div>
@endsection
