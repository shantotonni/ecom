<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <title>Ecom Admin Login</title>
    <meta content="Admin Login" name="description" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="home-btn d-none d-sm-block">
    <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="wrapper-page">
    <div class="card overflow-hidden account-card mx-3">
        <div class="bg-primary p-4 text-white text-center position-relative">
            <h4 class="font-20 m-b-5">Welcome Back !</h4>
            <p class="text-white-50 mb-4">Sign in to continue to Admin Dashboard.</p>
            <a href="index.html" class="logo logo-admin"><img src="{{ asset('assets/images/logo-sm.png') }}" height="24" alt="logo"></a>
        </div>
        <div class="account-card-content">
            <form class="form-horizontal m-t-30" action="{{ route('admin.login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                <div class="form-group row m-t-20">
                    <div class="col-sm-6">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END wrapper --><!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}'"></script>
<script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/waves.min.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
