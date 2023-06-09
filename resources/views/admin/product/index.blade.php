@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Products</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item )
                    <tr class="text-center">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->selling_price }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/product/'.$item->image)}}" alt="category image" width="100px" height="80px">
                        </td>
                        <td>
                            <a href="{{ url('editproduct/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
