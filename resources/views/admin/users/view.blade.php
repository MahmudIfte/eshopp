@extends('layouts/admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Users details
                            <a href="{{ url('users') }}" class="btn btn-danger btn-sm">Back</a>
                        </h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Role</label>
                                <div class="p-2 border">
                                    {{ $users->role_as == '0' ? 'User' : 'Admin' }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">First name</label>
                                <div class="p-2 border">
                                    {{ $users->name }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Last name</label>
                                <div class="p-2 border">
                                    {{ $users->lname }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Email</label>
                                <div class="p-2 border">
                                    {{ $users->email }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Phone</label>
                                <div class="p-2 border">
                                    {{ $users->phone }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Address 1</label>
                                <div class="p-2 border">
                                    {{ $users->address1 }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Address 2</label>
                                <div class="p-2 border">
                                    {{ $users->address2 }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">City</label>
                                <div class="p-2 border">
                                    {{ $users->city }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">State</label>
                                <div class="p-2 border">
                                    {{ $users->state }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Country</label>
                                <div class="p-2 border">
                                    {{ $users->country }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
