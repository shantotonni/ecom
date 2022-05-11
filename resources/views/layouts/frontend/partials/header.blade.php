
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
            <h1><a href="{{ route('home') }}"><span>E</span>mirathai </a></h1>
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
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a></li>
                            @foreach($categories as $category)
                            <li class="menu__item"><a class="menu__link" href="{{ route('category.product', $category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                            <li class="menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
