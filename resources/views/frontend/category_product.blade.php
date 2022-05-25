@extends('layouts.frontend.master')

@section('title','Category Product | Emirathai')

@section('content')
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info">{{ $category->name }}</h3>
            <p>{!! $category->description !!}</p>
                <div class="single-pro">
                    @foreach($products as $product)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ url('product/'.$product->image) }}" alt="" class="pro-image-front">
                                <img src="{{ url('product/'.$product->image) }}" alt="" class="pro-image-back">
                            </div>
                            <div class="item-info-product ">
                                <h4><a href="{{ route('product.details',$product->slug) }}">{{ $product->name }}</a></h4>

                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <fieldset>
                                        <input type="button" data-ProductId="{{ $product->id }}" value="Add to cart" class="button add-to-cart" />
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

