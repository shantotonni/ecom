@extends('layouts.backend.master')
@section('title','Admin Dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to Admin Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/01.png" alt="" /></div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Total Orders</h5>
                                <h4 class="font-500">{{ $total_order }} <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/02.png" alt="" /></div>
                                <h5 class="font-16 text-uppercase mt-0 text-white-50">Total Products</h5>
                                <h4 class="font-500">{{ $total_product }} <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection
