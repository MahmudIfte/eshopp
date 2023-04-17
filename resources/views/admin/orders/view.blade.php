@extends('layouts.front')
@section('title')
    My-orders
@endsection
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order View
                            <a href="{{ url('orders') }}" class="btn btn-warning  float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <label for="">First name</label>
                                <div class="border p-2">
                                    {{ $orders->fname }}
                                </div>
                                <label for="">Last name</label>
                                <div class="border p-2">
                                    {{ $orders->lname }}
                                </div>
                                <label for="">Email</label>
                                <div class="border p-2">
                                    {{ $orders->email }}
                                </div>
                                <label for="">Contact no</label>
                                <div class="border p-2">
                                    {{ $orders->phone }}
                                </div>
                                <label for="">Shipping Address</label>
                                <div class="border p-2">
                                    {{ $orders->address1 }},
                                    {{ $orders->address2 }},
                                    {{ $orders->city }},
                                    {{ $orders->state }},
                                    {{ $orders->country }},
                                </div>
                                <label for="">Zip code</label>
                                <div class="border p-2">
                                    {{ $orders->pincode }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderItems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td><img src=" {{ asset('assets/uploads/products/' . $item->products->image) }}"
                                                        width="50px" alt="Product image"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total:{{ $orders->total_price }}</h4>
                                <div class="mt-5 px-2">
                                    <label for="">Order status</label>
                                    <form class="form-control" action="{{ url('update-order/' .$orders->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select class="form-select" name="order_status">
                                            {{-- <option selected>Open this select menu</option> --}}
                                            <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">pending
                                            </option>
                                            <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">Delivered
                                            </option>
                                        </select>
                                        <button type="submit" class="btn btn-danger mt-3 float-end">Update</button>
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
