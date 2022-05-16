@extends('layouts.frontend.master')

@section('title','Contact Us | Emirathai')

@section('content')
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="contact-grid-agile-w3s">
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w31">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Address</h4>
                        <p>12K Street, 45 Building Road <span>California, USA.</span></p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w32">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4>Call Us</h4>
                        <p>+1234 758 839<span>+1273 748 730</span></p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w33">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h4>Email</h4>
                        <p><a href="mailto:info@example.com">info@example1.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="agile-contact-grids">
                <div class="agile-contact-left">
                    <div class="col-md-6 address-grid">
                        <h4>For More <span>Information</span></h4>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Telephone </p><span>+1 (100)222-23-33</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Mail </p><a href="mailto:info@example.com">info@example.com</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Location</p><span>7784 Diamonds street, California, US.</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

                    <div class="col-md-6 contact-form">
                        <h4 class="white-w3ls">Contact <span>Form</span></h4>
                        <form action="{{ route('contact.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="name" required="">
                                <label>Customer Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="mobile" required="">
                                <label>Contact Number</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" name="email" required="">
                                <label>Email</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="address" required="">
                                <label>Address</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="subject" required="">
                                <label>Subject</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <textarea name="message" required=""></textarea>
                                <label>Message</label>
                                <span></span>
                            </div>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection



