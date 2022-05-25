@extends('layouts.frontend.master')

@section('title','Category Product | Emirathai')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="py-5 text-center">

                <h2>Checkout form</h2>
                <p class="lead" style="border-bottom: 1px solid black"></p>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">
                            @if (Cart::instance('default')->count() > 0)
                                {{ Cart::instance('default')->count() }}
                            @else
                                0
                            @endif
                        </span>
                    </h4>
                    <br>
                    <ul class="list-group mb-3">
                        @foreach(Cart::content() as $item)
                            <?php
                            //dd($item->name);
                            ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <i class="fa fa-times removeCartItem" style="float: right" data-rowId="{{ $item->rowId }}"></i>
                            <div>
                                <h6 class="my-0">{{ $item->name }}</h6>
                                <small class="text-muted">
                                    <?php
                                    $short = strip_tags($item->model->description);
                                    ?>
                                        {{ Illuminate\Support\Str::limit($short, 30) }}

                                </small>
                            </div>
                            <span class="text-muted">Quantity :
                            <input type="number" class="quantity" id="quantity{{ $item->id }}" name="quantity" value="{{ $item->qty }}" min="1" max="100">
                                <input type="button" class="update_button" data-ProductId="{{ $item->id }}" data-rowId="{{ $item->rowId }}" id="update-cart" name="update" value="Update">
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <form class="needs-validation" novalidate action="{{ route('submit.order') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="customer_name">Customer name</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_number">Contact number</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="delivery_address">Delivery address</label>
                                <input type="text" class="form-control" id="delivery_address" name="delivery_address" placeholder="Enter Address"  required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="delivery_address">Expected delivery date</label>
                                <input type="date" class="form-control" id="expected_delivery_date" name="expected_delivery_date"  required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="expected_delivery_time">Expected delivery Time</label>
                                <input type="time" class="form-control" id="expected_delivery_time" name="expected_delivery_time"  required>
                            </div>
                        </div>

                        <br>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

@push('js')
    <script>
        $('.update_button').click(function(e){
            e.preventDefault();
            var ProductId = $(this).attr("data-ProductId");
            var rowId = $(this).attr("data-rowId");
            var quantity = $('#quantity'+ProductId).val();

            $.ajax({
                url: '{{ route('cart.update') }}',
                type: "POST",
                data: {ProductId : ProductId, quantity : quantity, rowId : rowId},
                dataType: 'JSON',
                success: function (data) {
                    console.log(data);
                    if($.isEmptyObject(data.error)){
                        toastr.success(data.success);
                        $('.cart-qty').html(data.qty);
                    }else{
                        toastr.error(data.error);
                    }
                }
            });
        });

        $('.removeCartItem').click(function (){
            var rowId = $(this).attr("data-rowId");
            Swal.fire({
                title: 'Are you sure?',
                text: "Cart Item will be trashed",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, trash it!'
            }).then(function(result){
                if (result.value) {
                    $.ajax({
                        url: "{{ route('cart.destroy', '__id__') }}".replace('__id__', rowId),
                        method: 'DELETE'
                    }).done(function(data) {
                        console.log(data);
                        toastr.success(data.success);
                        Swal.fire({
                            title: 'Success',
                            text: "Cart Item trashed",
                            type: 'success',
                        }).then(function(res){
                            window.location = '{{ route('cart.details') }}';
                        });
                    });
                }
            })
        })

    </script>
@endpush

