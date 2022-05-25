<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//tags -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}" type="text/css" />
    <link href="{{ asset('frontend/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>

@stack('front_css')
</head>
<body>

@include('layouts.frontend.partials.header')

@yield('content')

@include('layouts.frontend.partials.footer')

<!-- js -->
<script type="text/javascript" src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}" ></script>
{!! Toastr::message() !!}

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $('.add-to-cart').click(function(){
        var ProductId = $(this).attr("data-ProductId");

        $.ajax({
            url: '{{ route('cart.store') }}',
            type: "POST",
            data: {ProductId : ProductId},
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                if($.isEmptyObject(data.error)){
                    toastr.success(data.success);
                     $('.cart-qty').html(data.qty);
                    // $('.mini-shopping-cart').html(data.cart_data);
                    // $('.top-cart-total').html(data.total_price);
                }else{
                    toastr.error(data.error);
                }
            }
        });
    });
</script>

@stack('js')

</body>
</html>
