<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 06:41:54 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    @stack('css')
    <!--Chartist Chart CSS -->

    <link rel="stylesheet" href="{{ asset('assets/plugins/chartist/css/chartist.min.css') }}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}" />
    <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- Begin page -->
<div id="wrapper">
    @include('layouts.backend.partials.header')

    @include('layouts.backend.partials.sidebar')

    <div class="content-page">

    @yield('content')

    <footer class="footer">
        © 2022 <span class="d-none d-sm-inline-block">- Developed By Sentu</span>.
    </footer>
    </div>

</div>

@include('layouts.backend.partials.footer')

</body>

</html>
