@extends('website.include.master')
@section('title')
    Games
@endsection
@section('content')
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-9">
                <!-- START: Latest Games -->
                <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Latest</span> Games</span></h2>
                <div class="nk-gap"></div>
                <div class="container mt-4">
                    <div class="nk-popup-gallery">
                        <div class="row vertical-gap" id="gallery-container"></div>
                    </div>
                    <div class="loader text-center mt-4" id="loader" style="display: none;">
                        <span class="spinner-border" style="margin-top: 40px" role="status"></span> <i class="fa fa-spinner fa-spin fa-3x"></i>
                    </div>
                </div>
                <!-- END: Latest Pictures -->
            </div>
            <div class="col-lg-3">
                    <!-- START: Sidebar

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
                                    <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span></h4>
                        <div class="nk-widget-content">
                            @foreach ($games as $game)
                                <div class="nk-widget-post">
                                    <a href="{{ route('games.slug',$game->slug) }}" class="nk-post-image">
                                        <img src="{{ $game->thumb2 }}" alt="So saying he unbuckled">
                                    </a>
                                    <h3 class="nk-post-title"><a href="{{ route('games.slug',$game->slug) }}">{{ $game->name }}</a></h3>
                                    <div class="nk-product-rating"> {{ $game->category }} </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    let offset = 0;
    const limit = 12; // Number of items to load per request
    let isLoading = false;

    function fetchGalleryItems() {
        if (isLoading) return;

        isLoading = true;
        $('#loader').show();

        $.ajax({
            url: "{{ route('get.games') }}",
            type: 'GET',
            data: { offset, limit },
            success: function (items) {
                if (items.length > 0) {
                    renderGalleryItems(items);
                    offset += items.length;
                } else {
                    $(window).off('scroll'); // Stop further requests if no items
                }
            },
            error: function () {
                console.error('Failed to fetch gallery items.');
            },
            complete: function () {
                isLoading = false;
                $('#loader').hide();
            }
        });
    }

    function renderGalleryItems(items) {
        const container = $('#gallery-container');
        items.forEach(item => {
            const route = `{{ route('games.slug', ['slug' => '__slug__']) }}`.replace('__slug__', item.slug);
            container.append(`
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="${route}">
                            <div class="nk-gallery-item-overlay extra-gallery">
                                <span class="ion-play"></span>
                                <strong>${item.name}</strong>
                                <div>${item.category}</div>
                            </div>
                            <img src="${item.thumb7}" alt="${item.name}">
                        </a>
                    </div>
                </div>
            `);
        });
    }


    // Infinite scroll
    $(window).on('scroll', function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 400) {
            fetchGalleryItems();
        }
    });

    // Initial load
    fetchGalleryItems();
</script>
@endsection
