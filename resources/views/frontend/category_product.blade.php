@extends('layouts.frontend.master')

@section('title','Category Product | Ecom')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($sliders as $key => $slider)
                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? ' active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($sliders as $key => $slider)
                <div class="item {{ $key == 0 ? ' active' : '' }}">
                    <img src="{{ asset('slider/'.$slider->image) }}" alt="" style="height: 600px;width: 100%">
                </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //banner -->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
                @foreach($categories as $category)
                    <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                        <div class="section">
                            <h2>{{ $category->name }}</h2>
                            <?php
                            $short = strip_tags($category->description);
                            ?>
                            <p class="card-text">{{ Illuminate\Support\Str::limit($short, 150) }}</p>
                            <a href="">Click Here For Details</a>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection

<style>
    .section{
        background: #d9efdc;
        height: 200px;
        margin-top: 10px;
    }
    h2{
        padding: 20px;
    }
    .section p{
        margin-left: 20px;
    }
    .section a{
        margin-left: 20px;
        font-size: 14px;
        background: #7aa9a0;
        padding: 10px;
        margin-top: 8px;
        display: inline-block;
        color: white;
    }
</style>
