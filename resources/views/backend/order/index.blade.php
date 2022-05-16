@extends('layouts.backend.master')
@section('title','Order List')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Order</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="float-right d-none d-md-block">--}}
{{--                            <div class="card-tools">--}}
{{--                                <a href="{{ route('slider.create') }}" class="btn btn-success btn-sm">--}}
{{--                                    <i class="fas fa-plus"></i>--}}
{{--                                    Add Slider--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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
                                            <th class="text-center" style="width: 10%">Customer Name</th>
                                            <th class="text-center">Contact number</th>
                                            <th class="text-center">Product code</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Delivery address</th>
                                            <th class="text-center">Expected delivery date</th>
                                            <th class="text-center">Expected delivery time</th>
                                            <th class="text-center">Created at</th>
{{--                                            <th class="text-center" style="width: 10%">Action</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $key => $order)
                                            <tr>
                                                <th class="text-center">{{ ++$key }}</th>
                                                <td class="text-center">{{ $order->customer_name }}</td>
                                                <td class="text-center">{{ $order->contact_number }}</td>
                                                <td class="text-center">{{ $order->product_code }}</td>
                                                <td class="text-center">{{ $order->quantity }}</td>
                                                <td class="text-center">{{ $order->delivery_address }}</td>
                                                <td class="text-center">{{ $order->expected_delivery_date }}</td>
                                                <td class="text-center">{{ $order->expected_delivery_time }}</td>
                                                <td class="text-center">{{ $order->created_at }}</td>

{{--                                                <td class="text-center">--}}
{{--                                                    <a href="{{ url('/slider/'.$slider->id.'/edit') }}" class="btn btn-success btn-sm"><i class="far fa-edit"></i></a>--}}
{{--                                                </td>--}}
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
