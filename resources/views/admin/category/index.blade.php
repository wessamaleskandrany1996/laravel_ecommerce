@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Categories</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item )
                    <tr class="text-center">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/category/'.$item->image)}}" alt="category image" width="100px" height="80px">
                        </td>
                        <td>
                            <a href="{{ url('editcategory/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
