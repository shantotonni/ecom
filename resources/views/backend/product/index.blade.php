@extends('layouts.backend.master')
@section('title','Products List')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Product</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="card-tools">
                                <a href="{{ route('products.create') }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus"></i>
                                    Add Product
                                </a>
                            </div>
                        </div>
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
                                            <th class="text-center">Category</th>
                                            <th class="text-center" style="width: 10%">En Name</th>
                                            <th class="text-center" style="width: 10%">Thai Name</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Description Thai</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Remarks</th>
                                            <th class="text-center" style="width: 10%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key => $product)
                                            <tr>
                                                <th class="text-center">{{ ++$key }}</th>
                                                <th class="text-center">{{ isset($product->category) ? $product->category->name : '' }}</th>
                                                <td class="text-center">{{ $product->name }}</td>
                                                <td class="text-center">{{ $product->name_thai }}</td>
                                                <td class="text-center">
                                                    {!! $product->description  !!}
                                                </td>
                                                <td class="text-center">
                                                    {!! $product->description_thai  !!}
                                                </td>
                                                <td class="text-center">
                                                    <img src="{{ url('products/'.$product->image) }}" alt="" height="80">
{{--                                                    <img src="{{ url('product/'.$product->image_thai) }}" alt="" height="80">--}}
                                                </td>
                                                <td class="text-center">
                                                    {!! $product->remartks  !!}
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-success btn-sm"><i class="far fa-edit"></i></a>
{{--                                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>--}}
                                                </td>
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
