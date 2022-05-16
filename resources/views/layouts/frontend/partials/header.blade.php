
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
{{--            <form action="#" method="post">--}}
{{--                <input type="search" name="search" placeholder="Search here..." required="">--}}
{{--                <input type="submit" value=" ">--}}
{{--                <div class="clearfix"></div>--}}
{{--            </form>--}}
        </div>
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <a href="{{ route('home') }}">
                <img src="{{ asset('frontend/images/logo2.png') }}" alt="" height="100px">
{{--                <h1><a href="{{ route('home') }}"><span>E</span>mirathai </a></h1>--}}
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="{{ (request()->is('/')) ? 'active menu__item--current' : '' }} menu__item "><a class="menu__link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a></li>
                            @php
                                $segment1 = Request::segment(2);
                            @endphp
                            @foreach($categories as $category)
                            <li class="menu__item @if($segment1 ==  $category->slug) active menu__item--current @endif"><a class="menu__link" href="{{ route('category.product', $category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                            <li class="menu__item {{ (request()->is('contact-us')) ? 'active menu__item--current' : '' }}"><a class="menu__link" href="{{ route('contact.us') }}">Contact</a></li>
                            <li class="menu__item {{ (request()->is('order')) ? 'active menu__item--current' : '' }}"><a class="menu__link" href="{{ route('order') }}">Order</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>

</div>
