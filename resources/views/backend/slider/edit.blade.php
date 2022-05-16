@extends('layouts.backend.master')
@section('title','Slider Edit')

@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Slider</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Slider</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="card-tools">
                                <a href="{{ route('slider.list') }}" class="btn btn-success btn-sm">
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
                                <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PATCH')
                                <!-- end row -->
                                    <div class="row">
                                        <div class="col-6 offset-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Slider Name</label>
                                                        <input type="text" class="form-control" value="{{ $slider->name }}" name="name" required="" placeholder="Enter Slider Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Slider Image</label>
                                                        <input type="file" class="form-control" name="image" required="">
                                                        @if ($errors->has('image'))
                                                            <div class="error" style="color: red">{{ $errors->first('image') }}</div>
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
