@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="">
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="right-banner">
                <img src="/images/refunds-21.jpg" alt="no">
            </div>
            <div class="right-banner">
                <img src="/images/refunds-21.jpg" alt="no">

            </div>

        </div>
    </div>
    {{-- section title --}}
    <div class="row">
        <div class="col-md-12">
            <div class="main-tilte">
                <h1>Specials </h1>
                <i class="fa fa-hand-o-right"></i>
                <a href="#">View All</a>
            </div>

        </div>
    </div>

    <div class="row products">

        @foreach($products as $product)
        <div class="col">
            <div class="single-products">
                <a href="{{ route('product.show', $product) }}">{{ $product->name }}</a>
                <a class="img-product" href="#"> <img @if($product->hasImage())
                    src="{{ $product->getThumbnailUrl() }}"
                    @else
                    src="/images/product.jpg"
                    @endif
                    alt="{{ $product->name }}" /></a>
                <div class="price-product">
                    <div>
                        <p class="sale-price">{{ format_price($product->price) }}</p>
                        <p class="normal-price">900$</p>
                    </div>
                </div>

                <div class="btn-container">
                    <button class=" btn-product addCart-btn">Add to Cart</button>
                    <button class=" btn-product detailes-btn">Detailes</button>
                </div>

            </div>
        </div>
        @endforeach

    </div> {{-- end specials --}}

    {{-- section 2 title --}}
    <div class="row">
        <div class="col-md-12">
            <div class="main-tilte">
                <h1>Latest Products </h1>
                <i class="fa fa-hand-o-right"></i>
                <a href="#">View All</a>
            </div>

        </div>
    </div>

    <div class="row products">
        @foreach($products as $product)
        <div class="col">
            @include('product.index._product')
        </div>
        @endforeach


    </div> {{-- end latest --}}





</div> {{-- end container --}}


@endsection