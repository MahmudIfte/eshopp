@extends('layouts.front')
@section('title')
    {{ $category->name }}

@endsection
@section('content')


    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <div class="mb-0">
                <h6>Collections/{{ $category->name }}</h6>
            </div>
        </div>
    </div>



    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{ $category->name }}</h2>
                @foreach ($products as $prod)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <a href="{{ url('view-category/' . $category->slug . '/' . $prod->slug) }}">
                                <img src="{{ asset('assets/uploads/products/' . $prod->image) }}" width="300px"
                                    height="300px" alt="Image here">
                                <div class="card-body">
                                    <h4>{{ $prod->name }}</h4>
                                    <span class="float-start">{{ $prod->selling_price }}</span>
                                    <span class="float-end"><s
                                            style="color:red">{{ $prod->original_price }}</s></span>
                                </div>
                        </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
