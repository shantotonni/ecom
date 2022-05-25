@extends('layouts.frontend.master')

@section('title','Order | Emirathai')

@section('content')
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="agile-contact-grids">
                <div class="agile-contact-left">
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <div class="col-md-6 col-md-offset-3 contact-form">
                        <h4 class="white-w3ls">Order <span>Form</span></h4>
                        <form action="{{ route('order.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="customer_name" required="">
                                <label>Customer Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="contact_number" required="">
                                <label>Contact Number</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="product_code" required="">
                                <label>Product Code</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="number" name="quantity" required="" class="form-control">
                                <label>Quantity</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="delivery_address" required="">
                                <label>Delivery Address</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="date" name="expected_delivery_date" required="" class="form-control">
                                <label>Expected Delivery Date</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="time" name="expected_delivery_time" required="" class="form-control">
                                <label>Expected Delivery Time</label>
                                <span></span>
                            </div>

                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection



