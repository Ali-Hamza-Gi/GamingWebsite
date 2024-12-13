<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet"
        type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/v4-shims.js') }}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/ionicons/css/ionicons.min.css') }}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/flickity/dist/flickity.min.css') }}">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/summernote/dist/summernote-bs4.css') }}">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ asset('assets/css/goodgames.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>


</head>


<!-- Additional Classes: .nk-page-boxed -->

<body>

    <!-- Additional Classes: .nk-header-opaque -->
    <header class="nk-header nk-header-opaque">



        <!-- START: Top Contacts -->
        <div class="nk-contacts-top">
            <div class="container">
                <div class="nk-contacts-right">
                    <ul class="nk-contacts-icons">

                        {{--  <li>
                            <a href="#" data-toggle="modal" data-target="#modalSearch">
                                <span class="fa fa-search"></span>
                            </a>
                        </li>


                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalLogin">
                                <span class="fa fa-user"></span>
                            </a>
                        </li>  --}}


                        <li>
                            <span class="nk-cart-toggle">
                                <span class="fa fa-shopping-cart"></span>
                                <span class="nk-badge">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                            </span>
                            <div class="nk-cart-dropdown" style="height:auto; max-height: 300px; overflow-y: auto;">
                                @if(session('cart') && count(session('cart')) > 0)
                                    @foreach(session('cart') as $item)
                                        <div class="nk-widget-post" style="padding-left: 10px">
                                            <h3 class="nk-post-title">
                                                <a href="{{ route('cart.remove', ['id' => $item['id'], 'duration' => $item['duration']]) }}" class="nk-cart-remove-item">
                                                    <span class="ion-android-close"></span>
                                                </a>
                                                <a href="#">
                                                    {{ ucfirst($item['duration']) }} - {{ $item['game_quantity'] }} {{ $item['game_quantity'] == 1 ? 'Game' : 'Games' }}
                                                </a>
                                            </h3>
                                            <span>{{ $item['quantity'] }} * ${{ number_format($item['price'], 2) }}</span>
                                            <div class="nk-product-price">
                                                ${{ number_format($item['quantity'] * $item['price'], 2) }}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="nk-gap-2"></div>
                                    <div class="text-center">
                                        <a href="{{ route('cart.checkout') }}" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">
                                            Proceed to Checkout
                                        </a>
                                    </div>
                                @else
                                    <center>
                                        <strong class="text-center h5">Your cart is empty!</strong>
                                    </center>
                                @endif
                            </div>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Top Contacts -->


        @include('website.include.header')


    </header>



    <!-- START: Navbar Mobile Additional Classes:
            .nk-navbar-left-side
            .nk-navbar-right-side
            .nk-navbar-lg
            .nk-navbar-overlay-content
        -->
    <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
        <div class="nano">
            <div class="nano-content">
                <a href="{{ route('home') }}" class="nk-nav-logo">
                    {{--  <img src="assets/images/logo.png" alt="" width="120">                  --}}
                    <svg width="120" height="" viewBox="0 0 370.20472440944883 98.92991764809778"
                        class="looka-1j8o68f">
                        <defs id="SvgjsDefs2816"></defs>
                        <g id="SvgjsG2817" featurekey="MI9fam-0"
                            transform="matrix(1.4658896974944415,0,0,1.4658896974944415,0.001648132643928388,0.03536317526525143)"
                            fill="#dd163b">
                            <g xmlns="http://www.w3.org/2000/svg" data-name="Layer 2">
                                <g data-name="Layer 1">
                                    <path d="M65.3,33.45a2,2,0,1,0,2,1.95A1.95,1.95,0,0,0,65.3,33.45Z"></path>
                                    <circle cx="71.45" cy="41.65" r="1.84"></circle>
                                    <path d="M71.45,27.3a1.95,1.95,0,1,0,2,1.95A2,2,0,0,0,71.45,27.3Z"></path>
                                    <path
                                        d="M22.7,22.8A12.6,12.6,0,1,0,35.31,35.4,12.62,12.62,0,0,0,22.7,22.8Zm7,14.42a.58.58,0,0,1-.58.58h-4v4a.57.57,0,0,1-.57.57H20.88a.58.58,0,0,1-.58-.57v-4h-4a.58.58,0,0,1-.58-.58V33.58a.58.58,0,0,1,.58-.58h4V29a.58.58,0,0,1,.58-.57h3.65a.57.57,0,0,1,.57.57v4h4a.58.58,0,0,1,.58.58Z">
                                    </path>
                                    <path
                                        d="M55.18,18.49v-3A2.16,2.16,0,0,0,53,13.36h-5.4A13.14,13.14,0,0,1,57,1.81l2.33-.68a.57.57,0,0,0,.39-.71A.57.57,0,0,0,59,0L56.68.7A14.31,14.31,0,0,0,46.46,13.36H41a2.16,2.16,0,0,0-2.16,2.15v3A21.31,21.31,0,0,0,47,20,21.64,21.64,0,0,0,55.18,18.49Z">
                                    </path>
                                    <path
                                        d="M24,33.58v-4H21.46v4a.57.57,0,0,1-.58.57h-4v2.5h4a.57.57,0,0,1,.58.57v4H24v-4a.57.57,0,0,1,.58-.57h4v-2.5h-4A.57.57,0,0,1,24,33.58Z">
                                    </path>
                                    <circle cx="77.7" cy="35.4" r="1.84"></circle>
                                    <path
                                        d="M71.45,22.8a12.6,12.6,0,1,0,12.6,12.6A12.62,12.62,0,0,0,71.45,22.8ZM65.3,38.51a3.11,3.11,0,1,1,3.11-3.11A3.12,3.12,0,0,1,65.3,38.51Zm6.15,6.15a3,3,0,1,1,3-3A3,3,0,0,1,71.45,44.66Zm0-12.3a3.11,3.11,0,1,1,3.11-3.11A3.11,3.11,0,0,1,71.45,32.36Zm6.25,6a3,3,0,1,1,3-3A3,3,0,0,1,77.7,38.4Z">
                                    </path>
                                    <path
                                        d="M93.73,45.33v-.07c0-.18-.15-17.91-8.84-28.64-.24-.29-5.5-6.93-15.45-4.39,0,0-4.41,1.48-6.44,3.26-.32.26-7.46,5.89-16,5.64-8.55.26-15.67-5.39-16-5.63-2-1.79-6.44-3.28-6.49-3.29-9.91-2.52-15.18,4.12-15.4,4.4C5.49,21.1,2.89,27.28,1.39,35A62.89,62.89,0,0,0,.27,45.26v.07C-1.13,56,3,65.19,10.16,67.09c7.39,2,15.75-4.19,19.89-14.61a.59.59,0,0,1,.54-.37H63.41a.59.59,0,0,1,.54.37c4.14,10.42,12.5,16.57,19.88,14.61C90,65.45,94,58.51,94,49.4A30.91,30.91,0,0,0,93.73,45.33Zm-71,3.82A13.75,13.75,0,1,1,36.46,35.4,13.76,13.76,0,0,1,22.7,49.15Zm48.75,0A13.75,13.75,0,1,1,85.2,35.4,13.76,13.76,0,0,1,71.45,49.15Z">
                                    </path>
                                </g>
                            </g>
                        </g>
                        <g id="SvgjsG2818" featurekey="EI8VXn-0"
                            transform="matrix(2.5118929448057647,0,0,2.5118929448057647,153.98097152786355,0.5769776542664946)"
                            fill="#dd163b">
                            <path
                                d="M1.6 6.140000000000001 l3.12 0 l0 13.86 l-3.12 0 l0 -13.86 z M17.22 20 q-1.34 -2.38 -2.9 -4.7 t-3.32 -4.38 l0 9.08 l-3.08 0 l0 -13.86 l2.54 0 q0.66 0.66 1.46 1.62 t1.63 2.05 t1.65 2.26 t1.54 2.25 l0 -8.18 l3.1 0 l0 13.86 l-2.62 0 z M23.040000000000003 20 l0 -13.86 l9.28 0 l0 2.62 l-6.16 0 l0 2.9 l5.48 0 l0 2.62 l-5.48 0 l0 5.72 l-3.12 0 z M34.52 6.140000000000001 l3.12 0 l0 13.86 l-3.12 0 l0 -13.86 z M50.14 20 q-1.34 -2.38 -2.9 -4.7 t-3.32 -4.38 l0 9.08 l-3.08 0 l0 -13.86 l2.54 0 q0.66 0.66 1.46 1.62 t1.63 2.05 t1.65 2.26 t1.54 2.25 l0 -8.18 l3.1 0 l0 13.86 l-2.62 0 z M55.96 6.140000000000001 l3.12 0 l0 13.86 l-3.12 0 l0 -13.86 z M72.56 6.140000000000001 l0 2.66 l-4.18 0 l0 11.2 l-3.12 0 l0 -11.2 l-4.18 0 l0 -2.66 l11.48 0 z M79.64000000000001 11.84 q0.84 -1.42 1.6 -2.84 t1.4 -2.86 l3.44 0 q-1.14 2.24 -2.36 4.34 t-2.58 4.22 l0 5.3 l-3.12 0 l0 -5.26 q-1.36 -2.12 -2.59 -4.24 t-2.37 -4.36 l3.62 0 q0.64 1.44 1.38 2.86 t1.58 2.84 z">
                            </path>
                        </g>
                        <g id="SvgjsG2819" featurekey="sloganFeature-0"
                            transform="matrix(1.5803321702078925,0,0,1.5803321702078925,156.41966839496294,51.80246649810807)"
                            fill="#ffffff">
                            <path
                                d="M8.36 8.54 q-2.18 0 -3.15 1.21 t-0.97 3.31 q0 1.02 0.24 1.85 t0.72 1.43 t1.2 0.93 t1.68 0.33 q0.52 0 0.89 -0.02 t0.65 -0.08 l0 -4.82 l3.12 0 l0 6.86 q-0.56 0.22 -1.8 0.47 t-3.06 0.25 q-1.56 0 -2.83 -0.48 t-2.17 -1.4 t-1.39 -2.26 t-0.49 -3.06 q0 -1.74 0.54 -3.08 t1.48 -2.27 t2.21 -1.41 t2.71 -0.48 q0.98 0 1.77 0.13 t1.36 0.3 t0.94 0.35 t0.53 0.28 l-0.9 2.5 q-0.64 -0.34 -1.47 -0.59 t-1.81 -0.25 z M24.92 20 q-0.22 -0.72 -0.49 -1.48 t-0.53 -1.52 l-5.4 0 q-0.26 0.76 -0.53 1.52 t-0.49 1.48 l-3.24 0 q0.78 -2.24 1.48 -4.14 t1.37 -3.58 t1.32 -3.19 t1.35 -2.95 l2.98 0 q0.68 1.44 1.34 2.95 t1.33 3.19 t1.37 3.58 t1.48 4.14 l-3.34 0 z M21.18 9.28 q-0.1 0.3 -0.3 0.82 t-0.46 1.2 t-0.57 1.5 t-0.63 1.72 l3.94 0 q-0.32 -0.9 -0.62 -1.72 t-0.57 -1.5 t-0.47 -1.2 t-0.32 -0.82 z M33.74 6.140000000000001 q0.36 0.66 0.83 1.63 t0.98 2.1 t1.01 2.31 t0.94 2.22 q0.44 -1.04 0.94 -2.22 t1.01 -2.31 t0.98 -2.1 t0.83 -1.63 l2.84 0 q0.2 1.38 0.37 3.09 t0.3 3.56 t0.24 3.71 t0.19 3.5 l-3.04 0 q-0.06 -2.02 -0.16 -4.4 t-0.3 -4.8 q-0.36 0.84 -0.8 1.86 t-0.87 2.04 t-0.83 1.95 t-0.68 1.59 l-2.18 0 q-0.28 -0.66 -0.68 -1.59 t-0.83 -1.95 t-0.87 -2.04 t-0.8 -1.86 q-0.2 2.42 -0.3 4.8 t-0.16 4.4 l-3.04 0 q0.08 -1.64 0.19 -3.5 t0.24 -3.71 t0.3 -3.56 t0.37 -3.09 l2.98 0 z M48.00000000000001 20 l0 -13.86 l9.36 0 l0 2.62 l-6.24 0 l0 2.72 l5.54 0 l0 2.56 l-5.54 0 l0 3.34 l6.7 0 l0 2.62 l-9.82 0 z M63.90000000000001 17.62 q0.66 0 1.09 -0.11 t0.69 -0.3 t0.36 -0.45 t0.1 -0.58 q0 -0.68 -0.64 -1.13 t-2.2 -0.97 q-0.68 -0.24 -1.36 -0.55 t-1.22 -0.78 t-0.88 -1.14 t-0.34 -1.63 t0.36 -1.73 t1.02 -1.31 t1.6 -0.83 t2.12 -0.29 q1.4 0 2.42 0.3 t1.68 0.66 l-0.9 2.46 q-0.58 -0.3 -1.29 -0.53 t-1.71 -0.23 q-1.12 0 -1.61 0.31 t-0.49 0.95 q0 0.38 0.18 0.64 t0.51 0.47 t0.76 0.38 t0.95 0.35 q1.08 0.4 1.88 0.79 t1.33 0.91 t0.79 1.22 t0.26 1.7 q0 1.94 -1.36 3.01 t-4.1 1.07 q-0.92 0 -1.66 -0.11 t-1.31 -0.27 t-0.98 -0.34 t-0.69 -0.34 l0.88 -2.48 q0.62 0.34 1.53 0.61 t2.23 0.27 z">
                            </path>
                        </g>
                    </svg>
                </a>
                <div class="nk-navbar-mobile-content">
                    <ul class="nk-nav">
                        <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Navbar Mobile -->



    <div class="nk-main">

        <div class="nk-gap-2"></div>

        @yield('content')

        <div class="nk-gap-4"></div>



        <!-- START: Footer -->

        @include('website.include.footer')
        <!-- END: Footer -->


    </div>




    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('assets/images/bg-top.png') }}" alt="">
    <img class="nk-page-background-bottom" src="{{ asset('assets/images/bg-bottom.png') }}" alt="">

    <!-- END: Page Background -->




    <!-- START: Search Modal -->
    <div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>

                    <h4 class="mb-0">Search</h4>

                    <div class="nk-gap-1"></div>
                    <form action="#" class="nk-form nk-form-style-1">
                        <input type="text" value="" name="search" class="form-control"
                            placeholder="Type something and press Enter" autofocus>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Search Modal -->



    <!-- START: Login Modal -->
    <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>

                    <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                    <div class="nk-gap-1"></div>
                    <form action="#" class="nk-form text-white">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                Use email and password:

                                <div class="nk-gap"></div>
                                <input type="email" value="" name="email" class=" form-control"
                                    placeholder="Email">

                                <div class="nk-gap"></div>
                                <input type="password" value="" name="password"
                                    class="required form-control" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                Or social account:

                                <div class="nk-gap"></div>

                                <ul class="nk-social-links-2">
                                    <li><a class="nk-social-facebook" href="#"><span
                                                class="fab fa-facebook"></span></a></li>
                                    <li><a class="nk-social-google-plus" href="#"><span
                                                class="fab fa-google-plus"></span></a></li>
                                    <li><a class="nk-social-twitter" href="#"><span
                                                class="fab fa-twitter"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="nk-gap-1"></div>
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign
                                    In</a>
                            </div>
                            <div class="col-md-6">
                                <div class="mnt-5">
                                    <small><a href="#">Forgot your password?</a></small>
                                </div>
                                <div class="mnt-5">
                                    <small><a href="#">Not a member? Sign up</a></small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Login Modal -->




    <!-- START: Scripts -->

    <!-- Object Fit Polyfill -->
    <script src="{{ asset('assets/vendor/object-fit-images/dist/ofi.min.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('assets/vendor/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>

    <!-- Popper -->
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Sticky Kit -->
    <script src="{{ asset('assets/vendor/sticky-kit/dist/sticky-kit.min.js') }}"></script>

    <!-- Jarallax -->
    <script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jarallax/dist/jarallax-video.min.js') }}"></script>

    <!-- imagesLoaded -->
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Flickity -->
    <script src="{{ asset('assets/vendor/flickity/dist/flickity.pkgd.min.js') }}"></script>

    <!-- Photoswipe -->
    <script src="{{ asset('assets/vendor/photoswipe/dist/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <!-- Jquery Countdown + Moment -->
    <script src="{{ asset('assets/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>

    <!-- Hammer.js -->
    <script src="{{ asset('assets/vendor/hammerjs/hammer.min.js') }}"></script>

    <!-- NanoSroller -->
    <script src="{{ asset('assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js') }}"></script>

    <!-- SoundManager2 -->
    <script src="{{ asset('assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>

    <!-- Seiyria Bootstrap Slider -->
    <script src="{{ asset('assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('assets/vendor/summernote/dist/summernote-bs4.min.js') }}"></script>

    <!-- nK Share -->
    <script src="{{ asset('assets/plugins/nk-share/nk-share.js') }}"></script>

    <!-- GoodGames -->
    <script src="{{ asset('assets/js/goodgames.min.js') }}"></script>
    <script src="{{ asset('assets/js/goodgames-init.js') }}"></script>
    <!-- END: Scripts -->
    @yield('script')


</body>

</html>
