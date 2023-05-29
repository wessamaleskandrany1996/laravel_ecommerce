@extends('layouts.admin')

@section('title')
   User Page
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User details
                        <a href="{{ url('users') }}" class="btn btn-danger btn-sm text-white" style="float: right;"><i class="fa fa-undo"></i> Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <label for="">Role</label>
                            <div class="p-2 border">
                                {{ $users->role_as == 0 ? 'User' : 'Admin' }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">First Name</label>
                            <div class="p-2 border">
                                {{ $users->name }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">Last Name</label>
                            <div class="p-2 border">
                                {{ $users->lname }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">Email</label>
                            <div class="p-2 border">
                                {{ $users->email }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">phone</label>
                            <div class="p-2 border">
                                {{ $users->phone }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">Address 1</label>
                            <div class="p-2 border">
                                {{ $users->address1 }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">Address 2</label>
                            <div class="p-2 border">
                                {{ $users->address2 }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">city</label>
                            <div class="p-2 border">
                                {{ $users->city }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">state</label>
                            <div class="p-2 border">
                                {{ $users->state }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">country</label>
                            <div class="p-2 border">
                                {{ $users->country }}
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="">PIN code</label>
                            <div class="p-2 border">
                                {{ $users->pincode }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
