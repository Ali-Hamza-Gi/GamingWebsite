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

                <li><a href="#">About Us</a></li>

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
        <!-- End Breadcrumbs -->
        <div class="nk-gap-1"></div>

        <div class="container">
            <div class="row vertical-gap">
                <div class="col-lg-8">
                    <!-- START: Post -->
                    <div class="nk-blog-post nk-blog-post-single">
                        <!-- START: Post Text -->
                        <div class="nk-post-text mt-0">

                            <div class="nk-gap"></div>
                            <div class="nk-plain-video" style="">

                                <iframe class="gameFrame" src="{{ $game->url }}" width="800" height="480" frameborder="0"></iframe>
                                <button class="fullscreenButton" style="position: absolute; top: 8px; right: 30px; z-index: 10; background-color: rgb(0 0 0 / 20%); color: white; border: none; cursor: pointer; font-size: 20px; border-radius: 5px;">
                                    <i class="fas fa-expand"></i>
                                </button>

                            </div>
                            <div class="nk-gap-2"></div>
                        </div>
                        <!-- END: Post Text -->
                        <!-- START: Similar Articles -->
                        <div class="nk-gap-2"></div>
                        <!-- END: Similar Articles -->
                    </div>
                    <!-- END: Post -->
                </div>
                <div class="col-lg-4 nk-sidebar-sticky-parent">
                    <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky" style="padding-top: 14px">
                        <div>
                            <div class="nk-widget nk-widget-highlighted">
                                <h4 class="nk-widget-title">
                                    <span>
                                        @php
                                            $nameParts = explode(' ', $game->name);
                                            $firstWord = $nameParts[0];
                                            $otherWords = count($nameParts) > 1 ? implode(' ', array_slice($nameParts, 1)) : '';
                                        @endphp
                                        <span class="text-main-1">{{ $firstWord }}</span>
                                        @if($otherWords)
                                            {{ $otherWords }}
                                        @endif
                                    </span>
                                </h4>
                                <div class="nk-widget-content">
                                    <div class="nk-widget-match">
                                        <a href="#">
                                            <span class="nk-widget-match-left">
                                                <span class="nk-widget-match-teams">
                                                    <span class="nk-widget-match-team-logo">
                                                        <img src="{{ $game->thumb1 }}" alt="">
                                                    </span>
                                                    <span class="nk-widget-match-vs">{{ $game->category }}</span>
                                                </span>
                                            </span>
                                            <span class="nk-widget-match-right fullscreenButton">
                                                <span class="nk-match-score fullscreenButton"> Full Screen Play </span>
                                            </span>
                                            <span class="nk-widget-match-date"> {{ $game->description }} </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- END: Sidebar -->
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
<script>
    document.querySelectorAll('.fullscreenButton').forEach(function(button) {
        button.addEventListener('click', function() {
            const iframe = document.querySelector('.gameFrame');
            // Check if the iframe supports fullscreen
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();  // For browsers like Chrome, Firefox, etc.
            } else if (iframe.webkitRequestFullscreen) {  // For Safari
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) {  // For IE/Edge
                iframe.msRequestFullscreen();
            }
        });
    });
</script>

@endsection
