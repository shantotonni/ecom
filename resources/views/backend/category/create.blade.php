@extends('layouts.backend.master')
@section('title','Category Create')
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
                        <h4 class="page-title">Category</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="card-tools">
                                <a href="{{ route('category.index') }}" class="btn btn-success btn-sm">
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
                                <form action="{{ route('category.store') }}" method="post">
                                {{ csrf_field() }}
                                <!-- end row -->
                                    <div class="row">
                                        <div class="col-6 offset-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <input type="text" class="form-control" name="name" required="" placeholder="Enter Category Name">
                                                        @if ($errors->has('name'))
                                                            <div class="error" style="color: red">{{ $errors->first('name') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea name="description" class="summernote"></textarea>
                                                        @if ($errors->has('description'))
                                                            <div class="error" style="color: red">{{ $errors->first('description') }}</div>
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
