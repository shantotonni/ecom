@extends('layouts.backend.master')
@section('title','Product Edit')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">
@endpush
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
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="card-tools">
                                <a href="{{ route('products.list') }}" class="btn btn-success btn-sm">
                                    <i class="mdi mdi-keyboard-backspace"></i>
                                    Back
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
                                <form action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PATCH')
                                <!-- end row -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card">
                                                <h5>For English</h5>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" required="" placeholder="Enter product Name">
                                                        @if ($errors->has('name'))
                                                            <div class="error" style="color: red">{{ $errors->first('name') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Product Code</label>
                                                        <input type="text" class="form-control" name="code" value="{{ $product->code }}" required="" placeholder="Enter product code">
                                                        @if ($errors->has('code'))
                                                            <div class="error" style="color: red">{{ $errors->first('code') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Product Image</label>
                                                        <input type="file" class="form-control" name="image">
                                                        @if ($errors->has('image'))
                                                            <div class="error" style="color: red">{{ $errors->first('image') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" id="category_id" class="form-control">
                                                            <option value="" readonly="">Select Category</option>
                                                            @foreach($categories as $category)
                                                                @if($product->category_id == $category->id)
                                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                                @else
                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('category_id'))
                                                            <div class="error" style="color: red">{{ $errors->first('category_id') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Remarks</label>
                                                        <select name="remarks" id="remarks" class="form-control">
                                                            <option value="" readonly="">Select Remarks</option>
                                                            @if($product->remarks == 'in_stock')
                                                                <option value="in_stock" selected>In Stock</option>
                                                                <option value="out_stock">Out Stock</option>
                                                            @else
                                                                <option value="in_stock">In Stock</option>
                                                                <option value="out_stock" selected>Out Stock</option>
                                                            @endif


                                                        </select>
                                                        @if ($errors->has('remarks'))
                                                            <div class="error" style="color: red">{{ $errors->first('remarks') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea name="description" class="summernote">
                                                            {{ $product->description }}
                                                        </textarea>
                                                        @if ($errors->has('description'))
                                                            <div class="error" style="color: red">{{ $errors->first('description') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card">
                                                <h5>For Thai</h5>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" class="form-control" name="name_thai" value="{{ $product->name_thai }}" required="" placeholder="Enter Thai product Name">
                                                        @if ($errors->has('name_thai'))
                                                            <div class="error" style="color: red">{{ $errors->first('name_thai') }}</div>
                                                        @endif
                                                    </div>
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Product Image</label>--}}
{{--                                                        <input type="file" class="form-control" name="image_thai" required="">--}}
{{--                                                        @if ($errors->has('image_thai'))--}}
{{--                                                            <div class="error" style="color: red">{{ $errors->first('image_thai') }}</div>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea name="description_thai" class="summernote">
                                                            {{ $product->description_thai }}
                                                        </textarea>
                                                        @if ($errors->has('description_thai'))
                                                            <div class="error" style="color: red">{{ $errors->first('description_thai') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-items" style="text-align: center">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

    <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <!--Summernote js-->
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/pages/form-editors.int.js') }}"></script>
@endpush
