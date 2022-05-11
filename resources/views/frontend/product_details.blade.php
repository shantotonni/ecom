@extends('layouts.frontend.master')

@section('title','Category Product | Ecom')

@section('content')
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <div class="section">
                        <img src="{{ url('product/'.$product->image) }}" width="280" height="300" alt="" style="margin: 0 auto;display: block">
                        <hr style="color: black">
                        <p><span style="font-weight: bold">Product Name:</span> {{ $product->name }}</p>
                        <hr style="color: black">
                        <p><span style="font-weight: bold">Product Code:</span> {{ $product->code }}</p>
                        <hr style="color: black">
                        <?php
                        $short = strip_tags($product->description);
                        ?>
                        <p><span style="font-weight: bold">Description:</span> {{ $short }}</p>
                        <hr style="color: black">
                        <p><span style="font-weight: bold">Remarks:</span>
                            @if($product->remarks == 'in_stock')
                                In Stock
                            @else
                                Out Stock
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <div class="section">
                        <img src="{{ url('product/'.$product->image) }}" width="280" height="300" alt="" style="margin: 0 auto;display: block">
                        <hr style="color: black">
                        <p><span style="font-weight: bold">ชื#อสินค้า :</span> {{ $product->name_thai }}</p>
                        <hr style="color: black">
                        <p><span style="font-weight: bold">รหัสสินค้า:</span> {{ $product->code }}</p>
                        <hr style="color: black">
                        <?php
                        $short = strip_tags($product->description_thai);
                        ?>
                        <p><span style="font-weight: bold">คําอธิบาย:</span> {{ $short }}</p>
                        <hr style="color: black">
                        <p><span style="font-weight: bold">หมายเหตุ:</span>
                            @if($product->remarks == 'in_stock')
                                In Stock
                            @else
                                Out Stock
                            @endif
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
<style>
    .section{
        background: #d9efdc;
        min-height: 600px;
        margin-top: 10px;
    }

    .section p{
        padding: 5px;
        font-size: 18px;
    }

    hr {
        margin-top: 5px!important;
        margin-bottom: 0px!important;
        border: 0;
        border-top: 1px solid #c78d8d!important;
    }

</style>


