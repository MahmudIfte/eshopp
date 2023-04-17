@extends('layouts.front')
@section('title')
    Welcome to dibbabari
@endsection
@section('content')
    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured products</h2>

                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/' . $prod->image) }}" alt="Image here">
                                <div class="card-body">
                                    <h4>{{ $prod->name }}</h4>
                                    <span class="float-start">{{ $prod->selling_price }}</span>
                                    <span class="float-end"><s
                                            style="color:red">{{ $prod->original_price }}</s></span>

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
                <h2>Trending Category</h2>

                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcate)
                        <div class="item">
                            <a href="{{ url('view-category/'.$tcate->slug) }}">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/category/' . $tcate->image) }}" alt="Image here">
                                    <div class="card-body">
                                        <h4>{{ $tcate->name }}</h4>
                                        <p>{{ $tcate->small_description }}</p>

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
        $('.featured-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items:1
                },
                600: {
                    items:2
                },
                1000: {
                    items:4
                }
            }
        })
    </script>
@endsection