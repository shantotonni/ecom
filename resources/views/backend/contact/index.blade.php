@extends('layouts.backend.master')
@section('title','Contact List')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Contact</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Contact</a></li>
                            <li class="breadcrumb-item active">List</li>
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
                                            <th class="text-center" style="width: 10%">Name</th>
                                            <th class="text-center">Mobile</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Subject</th>
                                            <th class="text-center">Message</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contacts as $key => $contact)
                                            <tr>
                                                <th class="text-center">{{ ++$key }}</th>
                                                <td class="text-center">{{ $contact->name }}</td>
                                                <td class="text-center">{{ $contact->mobile }}</td>
                                                <td class="text-center">{{ $contact->email }}</td>
                                                <td class="text-center">{{ $contact->address }}</td>
                                                <td class="text-center">{{ $contact->subject }}</td>
                                                <td class="text-center">{{ $contact->message }}</td>
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
