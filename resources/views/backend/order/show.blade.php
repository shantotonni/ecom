@extends('layouts.backend.master')
@section('title','Order Details')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Order Details</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="datatable">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped dt-responsive nowrap dataTable no-footer dtr-inline table-sm small">
                                        <thead>
                                        <tr>
                                            <th class="text-center">SN</th>
                                            <th class="text-center" style="width: 10%">Product Name</th>
                                            <th class="text-center">Product code</th>
                                            <th class="text-center">Quantity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order_details as $key => $detail)
                                            <tr>
                                                <th class="text-center">{{ ++$key }}</th>
                                                <td class="text-center">{{ $detail->product_name }}</td>
                                                <td class="text-center">{{ $detail->product_code }}</td>
                                                <td class="text-center">{{ $detail->quantity }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
