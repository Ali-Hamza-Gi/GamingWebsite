@extends('website.include.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="nk-main">

        <!-- START: Breadcrumbs -->
        <div class="nk-gap-1"></div>
        <div class="container">
            <ul class="nk-breadcrumbs">

                {{--  <li><a href="{{ route('home') }}">Home</a></li>  --}}

                {{--  <li>
                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa"
                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                    </svg><!-- <span class="fa fa-angle-right"></span> -->
                </li>  --}}

                {{--  <li><a href="#">Contact Us</a></li>  --}}
                {{--  <li>
                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" data-prefix="fa"
                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                    </svg><!-- <span class="fa fa-angle-right"></span> -->
                </li>  --}}

                <li><span>Contact Us</span></li>

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
