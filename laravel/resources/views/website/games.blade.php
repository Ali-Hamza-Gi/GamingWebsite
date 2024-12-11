@extends('website.include.master')
@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <!-- START: Latest Games -->
                <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Latest</span> Pictures</span></h2>
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
            {{--  <div class="col-lg-4">
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
                            <div class="nk-widget-post">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.html">So saying he unbuckled</a></h3>
                                <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                <div class="nk-product-price">€ 23.00</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="assets/images/product-2-xs.jpg" alt="However, I have reason">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.html">However, I have reason</a></h3>
                                <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                <div class="nk-product-price">€ 32.00</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="assets/images/product-3-xs.jpg" alt="It was some time before">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.html">It was some time before</a></h3>
                                <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                <div class="nk-product-price">€ 14.00</div>
                            </div>

                        </div>
                    </div>
                </aside>
                <!-- END: Sidebar -->
            </div>  --}}
        </div>
    </div>
@endsection

@section('script')
<script>
    let offset = 0;
    const limit = 8; // Number of items to load per request
    let isLoading = false;

    function fetchGalleryItems() {
        if (isLoading) return;

        isLoading = true;
        $('#loader').show();

        $.ajax({
            url: "{{ route('get.games') }}", // Replace with your Laravel route
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
            container.append(`
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="${item.url}">
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
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 170) {
            fetchGalleryItems();
        }
    });

    // Initial load
    fetchGalleryItems();
</script>
@endsection