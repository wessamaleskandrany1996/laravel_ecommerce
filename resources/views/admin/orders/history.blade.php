@extends('layouts.admin')

@section('title')
   orders
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Completed Orders
                        <a href="{{ url('orders') }}" class="btn btn-warning" style="float: right">orders</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Order Date</th>
                                <th>Tracking NO.</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item )
                                <tr class="text-center">
                                    <td>{{ date('d-m-20y',strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->tracking_no }}</td>
                                    <td>{{ $item->total_price }}</td>
                                    <td>{{ $item->status == '0' ? 'pending' : 'completed' }}</td>
                                    <td>
                                        <a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-outline-success">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
