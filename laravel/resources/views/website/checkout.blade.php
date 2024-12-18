@extends('website.include.master')
@section('title')
    Checkout
@endsection
@section('content')
    <div class="nk-main">

        <!-- START: Breadcrumbs -->
        <div class="nk-gap-1"></div>
        <div class="container">
            <ul class="nk-breadcrumbs">

                <li><a href="{{ route('home') }}">Home</a></li>

                <li>
                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa"
                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                    </svg><!-- <span class="fa fa-angle-right"></span> -->
                </li>

                <li><a href="#">Checkout</a></li>
                <li><span>Checkout</span></li>

            </ul>
        </div>
        <div class="nk-gap-1"></div>

        <div class="container">

            <div class="nk-store nk-store-checkout">
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Billing</span> Details</span></h3>

                <!-- START: Billing Details -->
                <div class="nk-gap"></div>
                <form action="#" class="nk-form" novalidate="novalidate">
                    <div class="row vertical-gap">
                        <div class="col-lg-6">
                            <div class="row vertical-gap">
                                <div class="col-sm-6">
                                    <label for="fname">First Name <span class="text-main-1">*</span>:</label>
                                    <input type="text" class="form-control required" name="fname" id="fname">
                                </div>
                                <div class="col-sm-6">
                                    <label for="lname">Last Name <span class="text-main-1">*</span>:</label>
                                    <input type="text" class="form-control required" name="lname" id="lname">
                                </div>
                            </div>

                            <div class="nk-gap-1"></div>
                            <label for="company">Company Name:</label>
                            <input type="text" class="form-control" name="company" id="company">

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap">
                                <div class="col-sm-6">
                                    <label for="email">Email Address <span class="text-main-1">*</span>:</label>
                                    <input type="email" class="form-control required" name="email" id="email">
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone">Phone <span class="text-main-1">*</span>:</label>
                                    <input type="tel" class="form-control required" name="phone" id="phone">
                                </div>
                            </div>

                            <div class="nk-gap-1"></div>
                            <label for="country-sel">Country <span class="text-main-1">*</span>:</label>
                            <select name="country" class="form-control required" id="country-sel">
                                <option value="">Select a country...</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="address">Address <span class="text-main-1">*</span>:</label>
                            <input type="text" class="form-control required" name="address" id="address">

                            <div class="nk-gap-1"></div>
                            <label for="city">Town / City <span class="text-main-1">*</span>:</label>
                            <input type="text" class="form-control required" name="city" id="city">

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap">
                                <div class="col-sm-6">
                                    <label for="state">State / Country <span class="text-main-1">*</span>:</label>
                                    <input type="text" class="form-control required" name="state" id="state">
                                </div>
                                <div class="col-sm-6">
                                    <label for="zip">Postcode / ZIP <span class="text-main-1">*</span>:</label>
                                    <input type="tel" class="form-control required" name="zip" id="zip">
                                </div>
                            </div>

                            <div class="nk-gap-1"></div>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                Ship to different address?
                            </label>
                        </div>
                    </div>
                </form>
                <!-- END: Billing Details -->

                <div class="nk-gap-2"></div>
                <form action="#" class="nk-form" novalidate="novalidate">
                    <div class="nk-gap-1"></div>
                    <label for="notes">Order Notes:</label>
                    <textarea class="form-control" name="notes" id="notes" placeholder="Order Notes" rows="6"></textarea>
                </form>

                <!-- START: Order Products -->
                <div class="nk-gap-3"></div>
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Your</span> Order</span></h3>
                <div class="nk-gap"></div>
                <div class="table-responsive">
                    <table class="nk-table nk-table-sm">
                        <thead class="thead-default">
                            <tr>
                                <th class="nk-product-cart-title">Product</th>
                                <th class="nk-product-cart-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $subtotal = 0; // Initialize subtotal
                            @endphp

                            @if(session('cart') && count(session('cart')) > 0)
                                @foreach(session('cart') as $item)
                                    @php
                                        $itemTotal = $item['quantity'] * $item['price'];
                                        $subtotal += $itemTotal; // Add item total to subtotal
                                    @endphp
                                    <tr>
                                        <td class="nk-product-cart-title">
                                            {{ ucfirst($item['duration']) }} - {{ $item['game_quantity'] }} {{ $item['game_quantity'] == 1 ? 'Game' : 'Games' }} × {{ $item['quantity'] }}
                                        </td>
                                        <td class="nk-product-cart-total">
                                            $ {{ number_format($itemTotal, 2) }}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr class="nk-store-cart-totals-subtotal">
                                    <td>Sub Total</td>
                                    <td>$ {{ number_format($subtotal, 2) }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="2" class="text-center">Your cart is empty!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- END: Order Products -->


                <div class="nk-gap-2"></div>
                <a class="nk-btn nk-btn-rounded nk-btn-color-main-1" href="#">Place Order</a>
            </div>
        </div>
    </div>
        @endsection

        @section('script')
        @endsection
