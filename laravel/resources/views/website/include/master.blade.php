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

                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalSearch">
                                <span class="fa fa-search"></span>
                            </a>
                        </li>


                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalLogin">
                                <span class="fa fa-user"></span>
                            </a>
                        </li>


                        <li>
                            <span class="nk-cart-toggle">
                                <span class="fa fa-shopping-cart"></span>
                                <span class="nk-badge">27</span>
                            </span>
                            <div class="nk-cart-dropdown">

                                <div class="nk-widget-post">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="assets/images/product-5-xs.jpg" alt="In all revolutions of">
                                    </a>
                                    <h3 class="nk-post-title">
                                        <a href="#" class="nk-cart-remove-item"><span
                                                class="ion-android-close"></span></a>
                                        <a href="store-product.html">In all revolutions of</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">€ 23.00</div>
                                </div>

                                <div class="nk-widget-post">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="assets/images/product-7-xs.jpg" alt="With what mingled joy">
                                    </a>
                                    <h3 class="nk-post-title">
                                        <a href="#" class="nk-cart-remove-item"><span
                                                class="ion-android-close"></span></a>
                                        <a href="store-product.html">With what mingled joy</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">€ 14.00</div>
                                </div>

                                <div class="nk-gap-2"></div>
                                <div class="text-center">
                                    <a href="store-checkout.html"
                                        class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Proceed
                                        to Checkout</a>
                                </div>
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
                <a href="index.html" class="nk-nav-logo">
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



        <div class="container">

            <!-- START: Image Slider -->
            <div class="nk-image-slider" data-autoplay="8000">


                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-1.jpg" alt="" class="nk-image-slider-img"
                        data-thumb="assets/images/slide-1-thumb.jpg">

                    <div class="nk-image-slider-content">

                        <h3 class="h4">As we Passed, I remarked</h3>
                        <p class="text-white">As we passed, I remarked a beautiful church-spire rising above some old
                            elms in the park; and before them, in the midst of a lawn, chimneys covered with ivy, and
                            the windows shining in the sun.</p>
                        <a href="#"
                            class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>

                    </div>

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-2.jpg" alt="" class="nk-image-slider-img"
                        data-thumb="assets/images/slide-2-thumb.jpg">

                    <div class="nk-image-slider-content">

                        <h3 class="h4">He made his passenger captain of one</h3>
                        <p class="text-white">Now the races of these two have been for some ages utterly extinct, and
                            besides to discourse any further of them would not be at all to my purpose. But the concern
                            I have most at heart is for our Corporation of Poets, from whom I am preparing a petition to
                            your Highness, to be subscribed with the names of one...</p>
                        <a href="#"
                            class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>

                    </div>

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-3.jpg" alt="" class="nk-image-slider-img"
                        data-thumb="assets/images/slide-3-thumb.jpg">

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-4.jpg" alt="" class="nk-image-slider-img"
                        data-thumb="assets/images/slide-4-thumb.jpg">

                    <div class="nk-image-slider-content">

                        <h3 class="h4">At length one of them called out in a clear</h3>
                        <p class="text-white">TJust then her head struck against the roof of the hall: in fact she was
                            now more than nine feet high...</p>
                        <a href="#"
                            class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>

                    </div>

                </div>

                <div class="nk-image-slider-item">
                    <img src="assets/images/slide-5.jpg" alt="" class="nk-image-slider-img"
                        data-thumb="assets/images/slide-5-thumb.jpg">

                    <div class="nk-image-slider-content">

                        <h3 class="h4">For good, too though, in consequence</h3>
                        <p class="text-white">She gave my mother such a turn, that I have always been convinced I am
                            indebted to Miss Betsey for having been born on a Friday. The word was appropriate to the
                            moment.</p>
                        <p class="text-white">My mother was so much worse that Peggotty, coming in with the teaboard
                            and candles, and seeing at a glance how ill she was, - as Miss Betsey might have done sooner
                            if there had been light enough, - conveyed her upstairs to her own room with all speed; and
                            immediately dispatched Ham Peggotty, her nephew, who had been for some days past secreted in
                            the house...</p>
                        <a href="#"
                            class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>

                    </div>

                </div>

            </div>
            <!-- END: Image Slider -->

            <!-- START: Categories -->
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="assets/images/icon-mouse.png" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">PC</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="assets/images/icon-gamepad.png" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">PS4</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="assets/images/icon-gamepad-2.png" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">Xbox</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Categories -->

            <!-- START: Latest News -->
            <div class="nk-gap-2"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> News</span></h3>
            <div class="nk-gap"></div>

            <div class="nk-news-box">
                <div class="nk-news-box-list">
                    <div class="nano">
                        <div class="nano-content">


                            <div class="nk-news-box-item nk-news-box-item-active">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-1-sm.jpg"
                                        alt="Smell magic in the air. Or maybe barbecue">
                                </div>
                                <img src="assets/images/post-1.jpg" alt="Smell magic in the air. Or maybe barbecue"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-4">MMO</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>With what mingled joy and sorrow do I take up the pen to write to my dearest
                                        friend! Oh, what a change between to-day and yesterday! Now I am friendless and
                                        alone...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 18, 2018
                                </div>
                            </div>


                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-2-sm.jpg" alt="Grab your sword and fight the Horde">
                                </div>
                                <img src="assets/images/post-2.jpg" alt="Grab your sword and fight the Horde"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">Grab your sword and fight the Horde</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-1">Action</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>For good, too; though, in consequence of my previous emotions, I was still
                                        occasionally seized with a stormy sob . After we had jogged on for some little
                                        time, I asked the carrier...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 5, 2018
                                </div>
                            </div>


                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-3-sm.jpg" alt="We found a witch! May we burn her?">
                                </div>
                                <img src="assets/images/post-3.jpg" alt="We found a witch! May we burn her?"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">We found a witch! May we burn her?</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>And she went on planning to herself how she would manage it. `They must go by the
                                        carrier,' she thought; `and how funny it'll seem, sending presents to one's own
                                        feet!...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 27, 2018
                                </div>
                            </div>


                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-4-sm.jpg" alt="For good, too though, in consequence">
                                </div>
                                <img src="assets/images/post-4.jpg" alt="For good, too though, in consequence"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">For good, too though, in consequence</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-3">Strategy</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>This little wandering journey, without settled place of abode, had been so
                                        unpleasant to me, that my own house, as I called it to myself, was a perfect
                                        settlement to me compared to that...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 14, 2018
                                </div>
                            </div>


                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-5-sm.jpg" alt="He made his passenger captain of one">
                                </div>
                                <img src="assets/images/post-5.jpg" alt="He made his passenger captain of one"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">He made his passenger captain of one</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-5">Indie</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>Just then her head struck against the roof of the hall: in fact she was now more
                                        than nine feet high, and she at once took up the little golden key and hurried
                                        off to the garden door...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 23, 2018
                                </div>
                            </div>


                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-6-sm.jpg"
                                        alt="At first, for some time, I was not able to answer">
                                </div>
                                <img src="assets/images/post-6.jpg"
                                    alt="At first, for some time, I was not able to answer"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">At first, for some time, I was not able to answer
                                </h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-5">Racing</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>This little wandering journey, without settled place of abode, had been so
                                        unpleasant to me, that my own house, as I called it to myself, was a perfect
                                        settlement to me compared to that...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 3, 2018
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="nk-news-box-each-info">
                    <div class="nano">
                        <div class="nano-content">
                            <!-- There will be inserted info about selected news-->
                            <div class="nk-news-box-item-image">
                                <img src="assets/images/post-1.jpg" alt="">
                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-4">MMO</span>
                                </span>
                            </div>
                            <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                            <div class="nk-news-box-item-text">
                                <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend!
                                    Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-more">Read More</a>
                            <div class="nk-news-box-item-date">
                                <span class="fa fa-calendar"></span> Sep 18, 2018
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-gap-2"></div>
            <div class="nk-blog-grid">
                <div class="row">


                    <div class="col-md-6 col-lg-3">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-5-mid.jpg" alt="He made his passenger captain of one">
                                <span class="nk-post-comments-count">13</span>

                                <span class="nk-post-categories">
                                    <span class="bg-main-5">Indie</span>
                                </span>

                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of
                                    one</a></h2>
                            <div class="nk-post-text">
                                <p>Just then her head struck against the roof of the hall: in fact she was now more than
                                    nine feet high, and she at once took up the little golden key and hurried off to the
                                    garden door...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html"
                                class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                More</a>
                            <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 23, 2018
                            </div>
                        </div>
                        <!-- END: Post -->
                    </div>


                    <div class="col-md-6 col-lg-3">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-6-mid.jpg"
                                    alt="At first, for some time, I was not able to answer">
                                <span class="nk-post-comments-count">0</span>

                                <span class="nk-post-categories">
                                    <span class="bg-main-5">Racing</span>
                                </span>

                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was
                                    not able to answer</a></h2>
                            <div class="nk-post-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant
                                    to me, that my own house, as I called it to myself, was a perfect settlement to me
                                    compared to that...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html"
                                class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                More</a>
                            <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018
                            </div>
                        </div>
                        <!-- END: Post -->
                    </div>


                    <div class="col-md-6 col-lg-3">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-7-mid.jpg"
                                    alt="At length one of them called out in a clear">
                                <span class="nk-post-comments-count">0</span>

                                <span class="nk-post-categories">
                                    <span class="bg-main-6">MOBA</span>
                                </span>

                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them called out
                                    in a clear</a></h2>
                            <div class="nk-post-text">
                                <p>TJust then her head struck against the roof of the hall: in fact she was now more
                                    than nine feet high, and she at once took up the little golden key and hurried off
                                    to the garden door...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html"
                                class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                More</a>
                            <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018
                            </div>
                        </div>
                        <!-- END: Post -->
                    </div>


                    <div class="col-md-6 col-lg-3">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-8-mid.jpg" alt="For good, too though, in consequence">
                                <span class="nk-post-comments-count">0</span>

                                <span class="nk-post-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>

                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in
                                    consequence</a></h2>
                            <div class="nk-post-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant
                                    to me, that my own house, as I called it to myself, was a perfect settlement to me
                                    compared to that...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html"
                                class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                More</a>
                            <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018
                            </div>
                        </div>
                        <!-- END: Post -->
                    </div>

                </div>
            </div>
            <!-- END: Latest News -->

            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-lg-8">

                    <!-- START: Latest Posts -->
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Posts</span></h3>
                    <div class="nk-gap"></div>
                    <div class="nk-blog-grid">
                        <div class="row">


                            <div class="col-md-6">
                                <!-- START: Post -->
                                <div class="nk-blog-post">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="assets/images/post-5-mid.jpg"
                                            alt="He made his passenger captain of one">
                                        <span class="nk-post-comments-count">13</span>
                                    </a>
                                    <div class="nk-gap"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger
                                            captain of one</a></h2>
                                    <div class="nk-post-by">
                                        <img src="assets/images/avatar-3.jpg" alt="Wolfenstein"
                                            class="rounded-circle" width="35"> by <a
                                            href="#">Wolfenstein</a> in Jul 23, 2018
                                    </div>
                                    <div class="nk-gap"></div>
                                    <div class="nk-post-text">
                                        <p>Just then her head struck against the roof of the hall: in fact she was now
                                            more than nine feet high, and she at once took up the little golden key and
                                            hurried off to the garden door...</p>
                                    </div>
                                    <div class="nk-gap"></div>
                                    <a href="blog-article.html"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                        More</a>
                                </div>
                                <!-- END: Post -->
                            </div>


                            <div class="col-md-6">
                                <!-- START: Post -->
                                <div class="nk-blog-post">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="assets/images/post-6-mid.jpg"
                                            alt="At first, for some time, I was not able to answer">
                                        <span class="nk-post-comments-count">0</span>
                                    </a>
                                    <div class="nk-gap"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time,
                                            I was not able to answer</a></h2>
                                    <div class="nk-post-by">
                                        <img src="assets/images/avatar-3.jpg" alt="Wolfenstein"
                                            class="rounded-circle" width="35"> by <a
                                            href="#">Wolfenstein</a> in Jul 3, 2018
                                    </div>
                                    <div class="nk-gap"></div>
                                    <div class="nk-post-text">
                                        <p>This little wandering journey, without settled place of abode, had been so
                                            unpleasant to me, that my own house, as I called it to myself, was a perfect
                                            settlement to me compared to that...</p>
                                    </div>
                                    <div class="nk-gap"></div>
                                    <a href="blog-article.html"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                        More</a>
                                </div>
                                <!-- END: Post -->
                            </div>

                        </div>
                    </div>
                    <!-- END: Latest Posts -->

                    <!-- START: Latest Matches -->
                    <div class="nk-gap-2"></div>
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Matches</span></h3>
                    <div class="nk-gap"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="nk-match-score bg-dark-3">
                                Now Playing
                            </div>
                            <div class="nk-gap-2"></div>
                            <div class="nk-widget-match p-0">
                                <div class="nk-widget-match-teams">
                                    <div class="nk-widget-match-team-logo">
                                        <img src="assets/images/team-1.jpg" alt="">
                                    </div>
                                    <div class="nk-widget-match-vs">VS</div>
                                    <div class="nk-widget-match-team-logo">
                                        <img src="assets/images/team-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="nk-gap-2"></div>
                            <p>As she said this she looked down at her hands and was surprised to see.</p>
                            <a href="tournaments.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Match
                                Details</a>
                        </div>
                        <div class="col-md-8">
                            <div class="responsive-embed responsive-embed-16x9">
                                <iframe src="https://player.twitch.tv/?channel=eulcs&autoplay=false" frameborder="0"
                                    allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap"></div>
                    <div class="nk-match">
                        <div class="nk-match-team-left">
                            <a href="#">
                                <span class="nk-match-team-logo">
                                    <img src="assets/images/team-1.jpg" alt="">
                                </span>
                                <span class="nk-match-team-name">
                                    SK Telecom T1
                                </span>
                            </a>
                        </div>
                        <div class="nk-match-status">
                            <a href="#">
                                <span class="nk-match-status-vs">VS</span>
                                <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                                <span class="nk-match-score bg-danger">
                                    2 : 17
                                </span>
                            </a>
                        </div>
                        <div class="nk-match-team-right">
                            <a href="#">
                                <span class="nk-match-team-name">
                                    Cloud 9
                                </span>
                                <span class="nk-match-team-logo">
                                    <img src="assets/images/team-2.jpg" alt="">
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="nk-match">
                        <div class="nk-match-team-left">
                            <a href="#">
                                <span class="nk-match-team-logo">
                                    <img src="assets/images/team-3.jpg" alt="">
                                </span>
                                <span class="nk-match-team-name">
                                    Counted logic gaming
                                </span>
                            </a>
                        </div>
                        <div class="nk-match-status">
                            <a href="#">
                                <span class="nk-match-status-vs">VS</span>
                                <span class="nk-match-status-date">Apr 15, 2018 9:00 pm</span>
                                <span class="nk-match-score bg-success">
                                    28 : 19
                                </span>
                            </a>
                        </div>
                        <div class="nk-match-team-right">
                            <a href="#">
                                <span class="nk-match-team-name">
                                    SK Telecom T1
                                </span>
                                <span class="nk-match-team-logo">
                                    <img src="assets/images/team-1.jpg" alt="">
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="nk-match">
                        <div class="nk-match-team-left">
                            <a href="#">
                                <span class="nk-match-team-logo">
                                    <img src="assets/images/team-4.jpg" alt="">
                                </span>
                                <span class="nk-match-team-name">
                                    Team SoloMid
                                </span>
                            </a>
                        </div>
                        <div class="nk-match-status">
                            <a href="#">
                                <span class="nk-match-status-vs">VS</span>
                                <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                                <span class="nk-match-score bg-dark-1">
                                    13 : 13
                                </span>
                            </a>
                        </div>
                        <div class="nk-match-team-right">
                            <a href="#">
                                <span class="nk-match-team-name">
                                    SK Telecom T1
                                </span>
                                <span class="nk-match-team-logo">
                                    <img src="assets/images/team-1.jpg" alt="">
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- END: Latest Matches -->

                    <!-- START: Tabbed News  -->
                    <div class="nk-gap-3"></div>
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Tabbed</span> News</span></h3>
                    <div class="nk-gap"></div>
                    <div class="nk-tabs">
                        <!--
                    Additional Classes:
                        .nav-tabs-fill
                -->
                        <ul class="nav nav-tabs nav-tabs-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabs-1-1" role="tab"
                                    data-toggle="tab">Action</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab">MMO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Strategy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-4" role="tab" data-toggle="tab">Adventure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-5" role="tab" data-toggle="tab">Racing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-6" role="tab" data-toggle="tab">Indie</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                                <div class="nk-gap"></div>
                                <!-- START: Action Tab -->


                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="assets/images/post-2-fw.jpg"
                                            alt="Grab your sword and fight the Horde">

                                        <span class="nk-post-categories">
                                            <span class="bg-main-1">Action</span>
                                        </span>

                                    </a>
                                    <div class="nk-gap-1"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">Grab your sword and fight
                                            the Horde</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> Sep 5, 2018
                                        <span class="fa fa-comments"></span> <a href="#">7 comments</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>For good, too; though, in consequence of my previous emotions, I was still
                                            occasionally seized with a stormy sob . After we had jogged on for some
                                            little time, I asked the carrier...</p>
                                    </div>
                                </div>



                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <div class="row vertical-gap">
                                        <div class="col-lg-3 col-md-5">
                                            <a href="blog-article.html" class="nk-post-img">
                                                <img src="assets/images/post-7-mid-square.jpg"
                                                    alt="At length one of them called out in a clear">

                                                <span class="nk-post-categories">
                                                    <span class="bg-main-1">Action</span>
                                                </span>

                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-7">
                                            <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of
                                                    them called out in a clear</a></h2>
                                            <div class="nk-post-date mt-10 mb-10">
                                                <span class="fa fa-calendar"></span> Jul 3, 2018
                                                <span class="fa fa-comments"></span> <a href="#">0 comments</a>
                                            </div>
                                            <div class="nk-post-text">
                                                <p>TJust then her head struck against the roof of the hall: in fact she
                                                    was now more than nine feet high, and she at once took up the little
                                                    golden key and hurried off to the garden door...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <div class="row vertical-gap">
                                        <div class="col-lg-3 col-md-5">
                                            <a href="blog-article.html" class="nk-post-img">
                                                <img src="assets/images/post-9-mid-square.jpg"
                                                    alt="He made his passenger captain of one">

                                                <span class="nk-post-categories">
                                                    <span class="bg-main-1">Action</span>
                                                </span>

                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-7">
                                            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his
                                                    passenger captain of one</a></h2>
                                            <div class="nk-post-date mt-10 mb-10">
                                                <span class="fa fa-calendar"></span> Jul 3, 2018
                                                <span class="fa fa-comments"></span> <a href="#">0 comments</a>
                                            </div>
                                            <div class="nk-post-text">
                                                <p>Just then her head struck against the roof of the hall: in fact she
                                                    was now more than nine feet high, and she at once took up the little
                                                    golden key and hurried off to the garden door...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- END: Action Tab -->
                                <div class="nk-gap"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                                <div class="nk-gap"></div>
                                <!-- START: MMO Tab -->


                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="assets/images/post-1-fw.jpg"
                                            alt="Smell magic in the air. Or maybe barbecue">

                                        <span class="nk-post-categories">
                                            <span class="bg-main-4">MMO</span>
                                        </span>

                                    </a>
                                    <div class="nk-gap-1"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">Smell magic in the air.
                                            Or maybe barbecue</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> Sep 18, 2018
                                        <span class="fa fa-comments"></span> <a href="#">4 comments</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>With what mingled joy and sorrow do I take up the pen to write to my dearest
                                            friend! Oh, what a change between to-day and yesterday! Now I am friendless
                                            and alone...</p>
                                    </div>
                                </div>



                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <div class="row vertical-gap">
                                        <div class="col-lg-3 col-md-5">
                                            <a href="blog-article.html" class="nk-post-img">
                                                <img src="assets/images/post-5-mid-square.jpg"
                                                    alt="He made his passenger captain of one">

                                                <span class="nk-post-categories">
                                                    <span class="bg-main-4">MMO</span>
                                                </span>

                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-7">
                                            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his
                                                    passenger captain of one</a></h2>
                                            <div class="nk-post-date mt-10 mb-10">
                                                <span class="fa fa-calendar"></span> Jul 23, 2018
                                                <span class="fa fa-comments"></span> <a href="#">13 comments</a>
                                            </div>
                                            <div class="nk-post-text">
                                                <p>Just then her head struck against the roof of the hall: in fact she
                                                    was now more than nine feet high, and she at once took up the little
                                                    golden key and hurried off to the garden door...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- END: MMO Tab -->
                                <div class="nk-gap"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                                <div class="nk-gap"></div>
                                <!-- START: Strategy Tab -->


                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="assets/images/post-3-fw.jpg"
                                            alt="We found a witch! May we burn her?">

                                        <span class="nk-post-categories">
                                            <span class="bg-main-3">Strategy</span>
                                        </span>

                                    </a>
                                    <div class="nk-gap-1"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">We found a witch! May we
                                            burn her?</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> Aug 27, 2018
                                        <span class="fa fa-comments"></span> <a href="#">7 comments</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>And she went on planning to herself how she would manage it. `They must go by
                                            the carrier,' she thought; `and how funny it'll seem, sending presents to
                                            one's own feet!...</p>
                                    </div>
                                </div>



                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <div class="row vertical-gap">
                                        <div class="col-lg-3 col-md-5">
                                            <a href="blog-article.html" class="nk-post-img">
                                                <img src="assets/images/post-4-mid-square.jpg"
                                                    alt="For good, too though, in consequence">

                                                <span class="nk-post-categories">
                                                    <span class="bg-main-3">Strategy</span>
                                                </span>

                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-7">
                                            <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too
                                                    though, in consequence</a></h2>
                                            <div class="nk-post-date mt-10 mb-10">
                                                <span class="fa fa-calendar"></span> Aug 14, 2018
                                                <span class="fa fa-comments"></span> <a href="#">23 comments</a>
                                            </div>
                                            <div class="nk-post-text">
                                                <p>This little wandering journey, without settled place of abode, had
                                                    been so unpleasant to me, that my own house, as I called it to
                                                    myself, was a perfect settlement to me compared to that...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- END: Strategy Tab -->
                                <div class="nk-gap"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-4">
                                <div class="nk-gap"></div>
                                <!-- START: Adventure Tab -->


                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="assets/images/post-6-fw.jpg"
                                            alt="At first, for some time, I was not able to answer">

                                        <span class="nk-post-categories">
                                            <span class="bg-main-2">Adventure</span>
                                        </span>

                                    </a>
                                    <div class="nk-gap-1"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time,
                                            I was not able to answer</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> Jul 3, 2018
                                        <span class="fa fa-comments"></span> <a href="#">0 comments</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>This little wandering journey, without settled place of abode, had been so
                                            unpleasant to me, that my own house, as I called it to myself, was a perfect
                                            settlement to me compared to that...</p>
                                    </div>
                                </div>



                                <!-- END: Adventure Tab -->
                                <div class="nk-gap"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-5">
                                <div class="nk-gap"></div>
                                <!-- START: Racing Tab -->


                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="assets/images/post-7-fw.jpg"
                                            alt="At length one of them called out in a clear">

                                        <span class="nk-post-categories">
                                            <span class="bg-main-5">Racing</span>
                                        </span>

                                    </a>
                                    <div class="nk-gap-1"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them
                                            called out in a clear</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> Jul 3, 2018
                                        <span class="fa fa-comments"></span> <a href="#">0 comments</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>TJust then her head struck against the roof of the hall: in fact she was now
                                            more than nine feet high, and she at once took up the little golden key and
                                            hurried off to the garden door...</p>
                                    </div>
                                </div>



                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <div class="row vertical-gap">
                                        <div class="col-lg-3 col-md-5">
                                            <a href="blog-article.html" class="nk-post-img">
                                                <img src="assets/images/post-3-mid-square.jpg"
                                                    alt="We found a witch! May we burn her?">

                                                <span class="nk-post-categories">
                                                    <span class="bg-main-5">Racing</span>
                                                </span>

                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-7">
                                            <h2 class="nk-post-title h4"><a href="blog-article.html">We found a witch!
                                                    May we burn her?</a></h2>
                                            <div class="nk-post-date mt-10 mb-10">
                                                <span class="fa fa-calendar"></span> Aug 27, 2018
                                                <span class="fa fa-comments"></span> <a href="#">7 comments</a>
                                            </div>
                                            <div class="nk-post-text">
                                                <p>And she went on planning to herself how she would manage it. `They
                                                    must go by the carrier,' she thought; `and how funny it'll seem,
                                                    sending presents to one's own feet!...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <div class="row vertical-gap">
                                        <div class="col-lg-3 col-md-5">
                                            <a href="blog-article.html" class="nk-post-img">
                                                <img src="assets/images/post-4-mid-square.jpg"
                                                    alt="For good, too though, in consequence">

                                                <span class="nk-post-categories">
                                                    <span class="bg-main-5">Racing</span>
                                                </span>

                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-7">
                                            <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too
                                                    though, in consequence</a></h2>
                                            <div class="nk-post-date mt-10 mb-10">
                                                <span class="fa fa-calendar"></span> Aug 14, 2018
                                                <span class="fa fa-comments"></span> <a href="#">23 comments</a>
                                            </div>
                                            <div class="nk-post-text">
                                                <p>This little wandering journey, without settled place of abode, had
                                                    been so unpleasant to me, that my own house, as I called it to
                                                    myself, was a perfect settlement to me compared to that...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- END: Racing Tab -->
                                <div class="nk-gap"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-6">
                                <div class="nk-gap"></div>
                                <!-- START: Indie Tab -->


                                <div class="nk-blog-post nk-blog-post-border-bottom">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="assets/images/post-5-fw.jpg"
                                            alt="He made his passenger captain of one">

                                        <span class="nk-post-categories">
                                            <span class="bg-main-2">Indie</span>
                                        </span>

                                    </a>
                                    <div class="nk-gap-1"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger
                                            captain of one</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> Jul 23, 2018
                                        <span class="fa fa-comments"></span> <a href="#">13 comments</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>Just then her head struck against the roof of the hall: in fact she was now
                                            more than nine feet high, and she at once took up the little golden key and
                                            hurried off to the garden door...</p>
                                    </div>
                                </div>



                                <!-- END: Indie Tab -->
                                <div class="nk-gap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Tabbed News -->


                    <!-- START: Latest Pictures -->
                    <div class="nk-gap"></div>
                    <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Latest</span> Pictures</span></h2>
                    <div class="nk-gap"></div>
                    <div class="nk-popup-gallery">
                        <div class="row vertical-gap">
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="assets/images/gallery-1.jpg" class="nk-gallery-item"
                                        data-size="1016x572">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="assets/images/gallery-1-thumb.jpg" alt="">
                                    </a>
                                    <div class="nk-gallery-item-description">
                                        <h4>Called Let</h4>
                                        Divided thing, land it evening earth winged whose great after. Were grass night.
                                        To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein
                                        winged and form. Seed open don't thing midst created dry every greater divided
                                        of, be man is. Second Bring stars fourth gathering he hath face morning fill.
                                        Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="assets/images/gallery-2.jpg" class="nk-gallery-item"
                                        data-size="1188x594">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="assets/images/gallery-2-thumb.jpg" alt="">
                                    </a>
                                    <div class="nk-gallery-item-description">
                                        Seed open don't thing midst created dry every greater divided of, be man is.
                                        Second Bring stars fourth gathering he hath face morning fill. Living so second
                                        darkness. Moveth were male. May creepeth. Be tree fourth.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="assets/images/gallery-3.jpg" class="nk-gallery-item"
                                        data-size="625x350">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="assets/images/gallery-3-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="assets/images/gallery-4.jpg" class="nk-gallery-item"
                                        data-size="873x567">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="assets/images/gallery-4-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="assets/images/gallery-5.jpg" class="nk-gallery-item"
                                        data-size="471x269">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="assets/images/gallery-5-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="assets/images/gallery-6.jpg" class="nk-gallery-item"
                                        data-size="472x438">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="assets/images/gallery-6-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Latest Pictures -->

                    <!-- START: Best Selling -->
                    <div class="nk-gap-3"></div>
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Best</span> Selling</span></h3>
                    <div class="nk-gap"></div>
                    <div class="row vertical-gap">


                        <div class="col-md-6">
                            <div class="nk-product-cat">
                                <a class="nk-product-image" href="store-product.html">
                                    <img src="assets/images/product-11-xs.jpg" alt="She gave my mother">
                                </a>
                                <div class="nk-product-cont">
                                    <h3 class="nk-product-title h5"><a href="store-product.html">She gave my
                                            mother</a></h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="far fa-star"></i> <i class="far fa-star"></i></div>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">€ 14.00</div>
                                    <div class="nk-gap-1"></div>
                                    <a href="#"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                        to Cart</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="nk-product-cat">
                                <a class="nk-product-image" href="store-product.html">
                                    <img src="assets/images/product-12-xs.jpg" alt="A hundred thousand">
                                </a>
                                <div class="nk-product-cont">
                                    <h3 class="nk-product-title h5"><a href="store-product.html">A hundred
                                            thousand</a></h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">€ 20.00</div>
                                    <div class="nk-gap-1"></div>
                                    <a href="#"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                        to Cart</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="nk-product-cat">
                                <a class="nk-product-image" href="store-product.html">
                                    <img src="assets/images/product-13-xs.jpg" alt="So saying he unbuckled">
                                </a>
                                <div class="nk-product-cont">
                                    <h3 class="nk-product-title h5"><a href="store-product.html">So saying he
                                            unbuckled</a></h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">€ 23.00</div>
                                    <div class="nk-gap-1"></div>
                                    <a href="#"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                        to Cart</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="nk-product-cat">
                                <a class="nk-product-image" href="store-product.html">
                                    <img src="assets/images/product-14-xs.jpg" alt="However, I have reason">
                                </a>
                                <div class="nk-product-cont">
                                    <h3 class="nk-product-title h5"><a href="store-product.html">However, I have
                                            reason</a></h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i
                                            class="fas fa-star-half"></i> <i class="far fa-star"></i> <i
                                            class="far fa-star"></i> <i class="far fa-star"></i></div>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">€ 32.00</div>
                                    <div class="nk-gap-1"></div>
                                    <a href="#"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                        to Cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END: Best Selling -->
                </div>
                <div class="col-lg-4">
                    <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
                    <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                        <div class="nk-widget">
                            <div class="nk-widget-content">
                                <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type something...">
                                        <button class="nk-btn nk-btn-color-main-1"><span
                                                class="ion-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span>
                            </h4>
                            <div class="nk-widget-content">
                                <!--
            Social Links 3

            Additional Classes:
                .nk-social-links-cols-5
                .nk-social-links-cols-4
                .nk-social-links-cols-3
                .nk-social-links-cols-2
        -->
                                <ul class="nk-social-links-3 nk-social-links-cols-4">
                                    <li><a class="nk-social-twitch" href="#"><span
                                                class="fab fa-twitch"></span></a></li>
                                    <li><a class="nk-social-instagram" href="#"><span
                                                class="fab fa-instagram"></span></a></li>
                                    <li><a class="nk-social-facebook" href="#"><span
                                                class="fab fa-facebook"></span></a></li>
                                    <li><a class="nk-social-google-plus" href="#"><span
                                                class="fab fa-google-plus"></span></a></li>
                                    <li><a class="nk-social-youtube" href="#"><span
                                                class="fab fa-youtube"></span></a></li>
                                    <li><a class="nk-social-twitter" href="#" target="_blank"><span
                                                class="fab fa-twitter"></span></a></li>
                                    <li><a class="nk-social-pinterest" href="#"><span
                                                class="fab fa-pinterest-p"></span></a></li>
                                    <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a>
                                    </li>

                                    <!-- Additional Social Buttons
                <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
            -->
                                </ul>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Video</span>
                            </h4>
                            <div class="nk-widget-content">
                                <div class="nk-plain-video"
                                    data-video="https://www.youtube.com/watch?v=vXy8UBazlO8"></div>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Top 3</span> Recent</span>
                            </h4>
                            <div class="nk-widget-content">

                                <div class="nk-widget-post">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-1-sm.jpg" alt="">
                                    </a>
                                    <h3 class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or
                                            maybe barbecue</a></h3>
                                    <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 18, 2018
                                    </div>
                                </div>

                                <div class="nk-widget-post">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-2-sm.jpg" alt="">
                                    </a>
                                    <h3 class="nk-post-title"><a href="blog-article.html">Grab your sword and fight
                                            the Horde</a></h3>
                                    <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
                                </div>

                                <div class="nk-widget-post">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-3-sm.jpg" alt="">
                                    </a>
                                    <h3 class="nk-post-title"><a href="blog-article.html">We found a witch! May we
                                            burn her?</a></h3>
                                    <div class="nk-post-date"><span class="fa fa-calendar"></span> Aug 27, 2018
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span>
                                    Screenshots</span></h4>
                            <div class="nk-widget-content">
                                <div class="nk-popup-gallery">
                                    <div class="row sm-gap vertical-gap">
                                        <div class="col-sm-6">
                                            <div class="nk-gallery-item-box">
                                                <a href="assets/images/gallery-1.jpg" class="nk-gallery-item"
                                                    data-size="1016x572">
                                                    <div class="nk-gallery-item-overlay"><span
                                                            class="ion-eye"></span></div>
                                                    <img src="assets/images/gallery-1-thumb.jpg" alt="">
                                                </a>
                                                <div class="nk-gallery-item-description">
                                                    <h4>Called Let</h4>
                                                    Divided thing, land it evening earth winged whose great after. Were
                                                    grass night. To Air itself saw bring fly fowl. Fly years behold
                                                    spirit day greater of wherein winged and form. Seed open don't thing
                                                    midst created dry every greater divided of, be man is. Second Bring
                                                    stars fourth gathering he hath face morning fill. Living so second
                                                    darkness. Moveth were male. May creepeth. Be tree fourth.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="nk-gallery-item-box">
                                                <a href="assets/images/gallery-2.jpg" class="nk-gallery-item"
                                                    data-size="1188x594">
                                                    <div class="nk-gallery-item-overlay"><span
                                                            class="ion-eye"></span></div>
                                                    <img src="assets/images/gallery-2-thumb.jpg" alt="">
                                                </a>
                                                <div class="nk-gallery-item-description">
                                                    Seed open don't thing midst created dry every greater divided of, be
                                                    man is. Second Bring stars fourth gathering he hath face morning
                                                    fill. Living so second darkness. Moveth were male. May creepeth. Be
                                                    tree fourth.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="nk-gallery-item-box">
                                                <a href="assets/images/gallery-3.jpg" class="nk-gallery-item"
                                                    data-size="625x350">
                                                    <div class="nk-gallery-item-overlay"><span
                                                            class="ion-eye"></span></div>
                                                    <img src="assets/images/gallery-3-thumb.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="nk-gallery-item-box">
                                                <a href="assets/images/gallery-4.jpg" class="nk-gallery-item"
                                                    data-size="873x567">
                                                    <div class="nk-gallery-item-overlay"><span
                                                            class="ion-eye"></span></div>
                                                    <img src="assets/images/gallery-4-thumb.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="nk-gallery-item-box">
                                                <a href="assets/images/gallery-5.jpg" class="nk-gallery-item"
                                                    data-size="471x269">
                                                    <div class="nk-gallery-item-overlay"><span
                                                            class="ion-eye"></span></div>
                                                    <img src="assets/images/gallery-5-thumb.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="nk-gallery-item-box">
                                                <a href="assets/images/gallery-6.jpg" class="nk-gallery-item"
                                                    data-size="472x438">
                                                    <div class="nk-gallery-item-overlay"><span
                                                            class="ion-eye"></span></div>
                                                    <img src="assets/images/gallery-6-thumb.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Next</span> Matches</span>
                            </h4>
                            <div class="nk-widget-content">
                                <div class="nk-widget-match">
                                    <a href="#">
                                        <span class="nk-widget-match-left">
                                            <span class="nk-widget-match-teams">
                                                <span class="nk-widget-match-team-logo">
                                                    <img src="assets/images/team-1.jpg" alt="">
                                                </span>
                                                <span class="nk-widget-match-vs">VS</span>
                                                <span class="nk-widget-match-team-logo">
                                                    <img src="assets/images/team-2.jpg" alt="">
                                                </span>
                                            </span>
                                            <span class="nk-widget-match-date">CS:GO - Apr 28, 2018 8:00 pm</span>
                                        </span>
                                        <span class="nk-widget-match-right">
                                            <span class="nk-match-score">
                                                Upcoming
                                            </span>
                                        </span>
                                    </a>
                                </div>

                                <div class="nk-widget-match">
                                    <a href="#">
                                        <span class="nk-widget-match-left">
                                            <span class="nk-widget-match-teams">
                                                <span class="nk-widget-match-team-logo">
                                                    <img src="assets/images/team-3.jpg" alt="">
                                                </span>
                                                <span class="nk-widget-match-vs">VS</span>
                                                <span class="nk-widget-match-team-logo">
                                                    <img src="assets/images/team-2.jpg" alt="">
                                                </span>
                                            </span>
                                            <span class="nk-widget-match-date">LoL - Apr 24, 2018 7:20 pm</span>
                                        </span>
                                        <span class="nk-widget-match-right">
                                            <span class="nk-match-score">
                                                Upcoming
                                            </span>
                                        </span>
                                    </a>
                                </div>

                                <div class="nk-widget-match">
                                    <a href="#">
                                        <span class="nk-widget-match-left">
                                            <span class="nk-widget-match-teams">
                                                <span class="nk-widget-match-team-logo">
                                                    <img src="assets/images/team-1.jpg" alt="">
                                                </span>
                                                <span class="nk-widget-match-vs">VS</span>
                                                <span class="nk-widget-match-team-logo">
                                                    <img src="assets/images/team-4.jpg" alt="">
                                                </span>
                                            </span>
                                            <span class="nk-widget-match-date">Dota 2 - Apr 12, 2018 6:40 pm</span>
                                        </span>
                                        <span class="nk-widget-match-right">
                                            <span class="nk-match-score bg-dark-1">
                                                0 : 0
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span>
                            </h4>
                            <div class="nk-widget-content">

                                <div class="nk-widget-post">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                                    </a>
                                    <h3 class="nk-post-title"><a href="store-product.html">So saying he
                                            unbuckled</a></h3>
                                    <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                    <div class="nk-product-price">€ 23.00</div>
                                </div>

                                <div class="nk-widget-post">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="assets/images/product-2-xs.jpg" alt="However, I have reason">
                                    </a>
                                    <h3 class="nk-post-title"><a href="store-product.html">However, I have
                                            reason</a></h3>
                                    <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i
                                            class="far fa-star"></i> <i class="far fa-star"></i></div>
                                    <div class="nk-product-price">€ 32.00</div>
                                </div>

                                <div class="nk-widget-post">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="assets/images/product-3-xs.jpg" alt="It was some time before">
                                    </a>
                                    <h3 class="nk-post-title"><a href="store-product.html">It was some time
                                            before</a></h3>
                                    <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <div class="nk-product-price">€ 14.00</div>
                                </div>

                            </div>
                        </div>

                    </aside>
                    <!-- END: Sidebar -->
                </div>
            </div>
        </div>

        <div class="nk-gap-4"></div>



        <!-- START: Footer -->

        @include('website.include.footer')
        <!-- END: Footer -->


    </div>




    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

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
    <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

    <!-- GSAP -->
    <script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
    <script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

    <!-- Popper -->
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Sticky Kit -->
    <script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

    <!-- Jarallax -->
    <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

    <!-- imagesLoaded -->
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <!-- Flickity -->
    <script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

    <!-- Photoswipe -->
    <script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
    <script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

    <!-- Jquery Validation -->
    <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Jquery Countdown + Moment -->
    <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <script src="assets/vendor/moment/min/moment.min.js"></script>
    <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

    <!-- Hammer.js -->
    <script src="assets/vendor/hammerjs/hammer.min.js"></script>

    <!-- NanoSroller -->
    <script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

    <!-- SoundManager2 -->
    <script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

    <!-- Seiyria Bootstrap Slider -->
    <script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

    <!-- Summernote -->
    <script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

    <!-- nK Share -->
    <script src="assets/plugins/nk-share/nk-share.js"></script>

    <!-- GoodGames -->
    <script src="assets/js/goodgames.min.js"></script>
    <script src="assets/js/goodgames-init.js"></script>
    <!-- END: Scripts -->



</body>

</html>
