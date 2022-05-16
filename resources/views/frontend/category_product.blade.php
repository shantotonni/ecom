@extends('layouts.frontend.master')

@section('title','Category Product | Emirathai')

@section('content')
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info">{{ $category->name }}</h3>
            <p>{!! $category->description !!}</p>
            @foreach($products as $product)
                <div class="single-pro">
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ url('product/'.$product->image) }}" alt="" class="pro-image-front">
                                <img src="{{ url('product/'.$product->image) }}" alt="" class="pro-image-back">
                            </div>
                            <div class="item-info-product ">
                                <h4><a href="{{ route('product.details',$product->slug) }}">Formal Blue Shirt</a></h4>
                                <a href="{{ route('product.details',$product->slug) }}" class="btn btn-success" style="color: white;display: block;padding: 8px">View Details</a>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

