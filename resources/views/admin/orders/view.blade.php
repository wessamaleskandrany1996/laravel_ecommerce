@extends('layouts.admin')

@section('title')
   order page
@endsection

@section('content')
<div class="container py-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Order View
                        <a href="{{ url('orders') }}" class="btn btn-danger text-white" style="float: right;"><i class="fa fa-undo"></i> Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details">
                            <h4>Shipping Details</h4>
                            <hr>
                            <label for="fname">First Name</label>
                            <div class="border ">{{ $orders->fname }}</div>
                            <label for="lname">Last Name</label>
                            <div class="border ">{{ $orders->lname }}</div>
                            <label for="email">email</label>
                            <div class="border ">{{ $orders->email }}</div>
                            <label for="phone">Contact NO.</label>
                            <div class="border ">{{ $orders->phone }}</div>
                            <label for="address1">Shipping Address</label>
                            <div class="border ">
                                {{ $orders->address1 }},
                                {{ $orders->city }},
                                {{ $orders->country }}
                            </div>
                            <label for="pincode">PIN code</label>
                            <div class="border ">{{ $orders->pincode }}</div>
                        </div>
                        <div class="col-md-6">
                            <h4>Order Details</h4>
                            <hr>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item )
                                    <tr class="text-center">
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <img src="{{ asset('assets/uploads/product/'.$item->products->image) }}" width="50px" alt="{{ $item->products->name }}">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h5
                                class="px-2">Grand Total:
                                <span
                                    style="float: right"
                                    class=" text-success">
                                    {{ $orders->total_price }} $
                                </span>
                            </h5>

                            <div class="mt-5 px-2">
                                <label for="">Order Status</label>
                                <form action="{{ url('update-order/'.$orders->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-select" name="order_status">
                                        <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">pending</option>
                                        <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">completed</option>
                                    </select>
                                    <button type="submit" style="float: right" class="btn btn-primary mt-3">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
