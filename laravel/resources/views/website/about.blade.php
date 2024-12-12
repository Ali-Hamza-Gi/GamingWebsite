@extends('website.include.master')
@section('title')
    About Us
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

                <li><a href="#">Blog</a></li>

                <li>
                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa"
                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                    </svg><!-- <span class="fa fa-angle-right"></span> -->
                </li>

                <li><span>About Us</span></li>

            </ul>
        </div>
        <div class="nk-gap-1"></div>

        <div class="container">
            <!-- START: Posts FullWidth -->
            <div class="nk-blog-fullwidth">

                <!-- START: Post -->
                <div class="nk-blog-post">
                    <div class="row vertical-gap">
                        <div class="col-12">
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>
                                    We've started playing games already in childhood. Actually, who hasn't? However, as we grew up, we had less and less time to play games. Buying and installing new games also didn't bring the joy of playing games as we were expecting. The solution was lying right before us, though. The Internet was ubiquitous, and the newly created and available {{ env('APP_NAME') }} engine brought the possibility of creating completely new games which could be played without the need for installation right in the browser. Unfortunately, there was no good worldwide website which would offer these games.
                                    That's why we decided to create one called {{ env('APP_NAME') }}. At that time, we came up with unique video previews along with video tutorials, and we fully adapted everything for the best gaming experience ever. We hope you enjoy your time spent with … {{ env('APP_NAME') }}!
                                </p>
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
