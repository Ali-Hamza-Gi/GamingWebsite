@extends('website.include.master')
@section('title')
    Pricing
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

                <li><a href="#">Pricing</a></li>
                <li><span>Pricing</span></li>

            </ul>
        </div>
        <div class="nk-gap-1"></div>

        <div class="container">
            <!-- START: Posts FullWidth -->
            <div class="nk-blog-fullwidth">
                <style>
                    .pricing-card {
                        border: 1px solid #dd163b;
                        border-radius: 10px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        transition: transform 0.2s;
                        margin-bottom: 10px;
                    }

                    .pricing-card:hover {
                        transform: scale(1.05);
                    }

                    .pricing-card h4 {
                        padding-top: 10px;
                        font-weight: bold;
                    }

                    .pricing-card p {
                        color: #fff;
                    }

                    .cart-count {
                        background-color: #dd163b;
                        color: #fff;
                        font-size: 12px;
                        font-weight: bold;
                        border-radius: 50%;
                        width: 20px;
                        height: 20px;
                        line-height: 20px;
                        text-align: center;
                        top: -8px;
                        right: -8px;
                        display: inline-block;
                    }

                    .position-relative {
                        position: relative;
                    }

                    .position-absolute {
                        position: absolute;
                    }
                </style>
                @if (session('success'))
                    <div class="nk-info-box text-success">
                        <div class="nk-info-box-close nk-info-box-close-btn">
                            <i class="ion-close-round"></i>
                        </div>
                        <div class="nk-info-box-icon">
                            <i class="ion-checkmark-round"></i>
                        </div>

                        <h3>Success!</h3>
                        <em> {{ session('success') }} </em>
                    </div>
                @endif

                <!-- START: Post -->
                <div class="nk-blog-post">
                    <div class="row vertical-gap">
                        <div class="col-12">
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <div class="row">
                                    {{--  {{ dd(session('cart')) }}  --}}

                                    @foreach ($pricingGroup as $groupKey => $pricings)
                                        <div class="col-md-4">
                                            <div class="pricing-card p-4 text-center">
                                                <h4>{{ ucfirst($groupKey) }} Pricing</h4>
                                                @foreach ($pricings as $pricing)
                                                    <form action="{{ route('add.cart') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $pricing->id }}">
                                                        <input type="hidden" name="duration" value="{{ $pricing->duration }}">
                                                        <input type="hidden" name="game_quantity" value="{{ $pricing->game_quantity }}">
                                                        <input type="hidden" name="price" value="{{ $pricing->price }}">
                                                        <p>
                                                            {{ $pricing->game_quantity }} {{ $pricing->game_quantity == 1 ? 'Game:' : 'Games:' }} ${{ $pricing->price }}
                                                            <button class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1 position-relative">
                                                                <i class="fa fa-cart-plus"></i>
                                                                @php
                                                                    // Find the current pricing in the session data
                                                                    $currentCart = collect(session('cart', []))->firstWhere('id', $pricing->id);
                                                                @endphp
                                                                @if($currentCart && isset($currentCart['quantity']))
                                                                    <span class="cart-count position-absolute">
                                                                        {{ $currentCart['quantity'] }}
                                                                    </span>
                                                                @endif
                                                            </button>
                                                        </p>
                                                    </form>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12">
                                      <div class="pricing-card p-4 text-center">
                                        <h4 class="mb-0">VIP Membership</h4>
                                        <p class="m-4" style="padding:15px 0 3px">Contact us for pricing.</p>
                                        <a href="{{ route('contact.us') }}" class="nk-btn nk-btn-rounded nk-btn-color-main-1 mb-4">Contact Us</a>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

            </div>
        </div>
    </div>
        @endsection

        @section('script')
        @endsection
