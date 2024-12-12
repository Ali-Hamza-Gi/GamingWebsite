@extends('website.include.master')
@section('title')
    Home
@endsection
@section('content')
<div class="container">
    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="5000">
        @foreach ($sliderGames as $game)
            <div class="nk-image-slider-item">
                <img src="{{ $game->thumb8 }}" width="1200" height="675" class="nk-image-slider-img" data-thumb="{{ $game->thumb1 }}" onerror="this.src='{{ $game->thumb6 }}'" />
                <div class="nk-image-slider-content">
                    <h3 class="h4">{{ $game->name }}</h3>
                    <strong>{{ $game->category }}</strong>
                    <p class="text-white">
                        {{ $game->description }}
                    </p>
                    <a href="{{ route('games.slug',$game->slug) }}" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Play Game</a>
                </div>
            </div>
        @endforeach
    </div>
    <!-- END: Image Slider -->
    <!-- START: Categories -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <i class="fa fa-puzzle-piece"></i>
                </div>
                <div class="nk-feature-cont">
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('games') }}">Puzzle Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <i class="fa fa-cube"></i>
                </div>
                <div class="nk-feature-cont">
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('games') }}">3D Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <i class="fa fa-font"></i> <!-- Font Awesome icon for Word Games -->
                </div>
                <div class="nk-feature-cont">
                    <h4 class="nk-feature-title text-main-1"><a href="{{ route('games') }}">Word Games</a></h4>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Categories -->
    <!-- START: Latest News -->
    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2">
      <span><span class="text-main-1">Latest</span> Games</span>
   </h3>
    <div class="nk-gap"></div>
    {{--  <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    <div class="nk-news-box-item nk-news-box-item-active">
                        <div class="nk-news-box-item-img">
                            <img src="assets/images/post-1-sm.jpg" alt="Smell magic in the air. Or maybe barbecue" />
                        </div>
                        <img src="assets/images/post-1.jpg" alt="Smell magic in the air. Or maybe barbecue" class="nk-news-box-item-full-img" />
                        <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                        <span class="nk-news-box-item-categories">
                        <span class="bg-main-4">MMO</span>
                        </span>
                        <div class="nk-news-box-item-text">
                            <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                        </div>
                        <a href="#" class="nk-news-box-item-url">Read More</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
                    </div>
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="assets/images/post-2-sm.jpg" alt="Grab your sword and fight the Horde" />
                        </div>
                        <img src="assets/images/post-2.jpg" alt="Grab your sword and fight the Horde" class="nk-news-box-item-full-img" />
                        <h3 class="nk-news-box-item-title">Grab your sword and fight the Horde</h3>
                        <span class="nk-news-box-item-categories">
                        <span class="bg-main-1">Action</span>
                            </span>
                            <div class="nk-news-box-item-text">
                                <p>For good, too; though, in consequence of my previous emotions, I was still occasionally seized with a stormy sob . After we had jogged on for some little time, I asked the carrier...</p>
                            </div>
                            <a href="#" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
                        </div>
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-3-sm.jpg" alt="We found a witch! May we burn her?" />
                            </div>
                            <img src="assets/images/post-3.jpg" alt="We found a witch! May we burn her?" class="nk-news-box-item-full-img" />
                            <h3 class="nk-news-box-item-title">We found a witch! May we burn her?</h3>
                            <span class="nk-news-box-item-categories">
                        <span class="bg-main-2">Adventure</span>
                            </span>
                            <div class="nk-news-box-item-text">
                                <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                            </div>
                            <a href="#" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
                        </div>
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-4-sm.jpg" alt="For good, too though, in consequence" />
                            </div>
                            <img src="assets/images/post-4.jpg" alt="For good, too though, in consequence" class="nk-news-box-item-full-img" />
                            <h3 class="nk-news-box-item-title">For good, too though, in consequence</h3>
                            <span class="nk-news-box-item-categories">
                        <span class="bg-main-3">Strategy</span>
                            </span>
                            <div class="nk-news-box-item-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <a href="#" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 14, 2018</div>
                        </div>
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-5-sm.jpg" alt="{{ $game->name }}" />
                            </div>
                            <img src="assets/images/post-5.jpg" alt="{{ $game->name }}" class="nk-news-box-item-full-img" />
                            <h3 class="nk-news-box-item-title">{{ $game->name }}</h3>
                            <span class="nk-news-box-item-categories">
                        <span class="bg-main-5">Indie</span>
                            </span>
                            <div class="nk-news-box-item-text">
                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            </div>
                            <a href="#" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 23, 2018</div>
                        </div>
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-6-sm.jpg" alt="At first, for some time, I was not able to answer" />
                            </div>
                            <img src="assets/images/post-6.jpg" alt="At first, for some time, I was not able to answer" class="nk-news-box-item-full-img" />
                            <h3 class="nk-news-box-item-title">At first, for some time, I was not able to answer</h3>
                            <span class="nk-news-box-item-categories">
                        <span class="bg-main-5">Racing</span>
                            </span>
                            <div class="nk-news-box-item-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <a href="#" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                        </div>
                </div>
            </div>
        </div>
        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <!-- There will be inserted info about selected news-->
                    <div class="nk-news-box-item-image">
                        <img src="assets/images/post-1.jpg" alt="" />
                        <span class="nk-news-box-item-categories">
                  <span class="bg-main-4">MMO</span>
                        </span>
                    </div>
                    <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                    <div class="nk-news-box-item-text">
                        <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                    </div>
                    <a href="#" class="nk-news-box-item-more">Read More</a>
                    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
                </div>
            </div>
        </div>
    </div>  --}}
    <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    @foreach ($latestGames as $key => $game)
                    <div class="nk-news-box-item {{ $key === 0 ? 'nk-news-box-item-active' : '' }}" data-key="{{ $key }}">
                        <div class="nk-news-box-item-img">
                            <img src="{{ $game->thumb2 }}" alt="{{ $game->name }}" />
                        </div>
                        <img src="{{ $game->thumb8 }}" alt="{{ $game->name }}" class="nk-news-box-item-full-img" />
                        <h3 class="nk-news-box-item-title">{{ $game->name }}</h3>
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-2">{{ $game->category }}</span>
                        </span>
                        <div class="nk-news-box-item-text">
                            <p>{{ $game->description }}</p>
                        </div>
                        <a href="{{ route('games.slug', $game->slug) }}" class="nk-news-box-item-url">Play Game</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-list-alt"></span> {{ $game->category }}</div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <!-- There will be inserted info about selected news-->
                    <div class="nk-news-box-item-image">
                        <img src="{{ $latestGames[0]->thumb8 }}" alt="" />
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-4">{{ $latestGames[0]->category }}</span>
                        </span>
                    </div>
                    <h3 class="nk-news-box-item-title">{{ $latestGames[0]->name }}</h3>
                    <div class="nk-news-box-item-text">
                        <p>
                            {{ $latestGames[0]->description }}
                        </p>
                    </div>
                    <a href="{{ route('games.slug',$latestGames[0]->slug) }}" class="nk-news-box-item-more">Play Game</a>
                    <div class="nk-news-box-item-date"><span class="fa fa-list-alt"></span> {{ $latestGames[0]->category }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-2"></div>
    <div class="nk-blog-grid">
        <div class="row">
            @foreach ($otherGames as $game)
                <div class="col-md-6 col-lg-3">
                    <!-- START: Post -->
                    <div class="nk-blog-post">
                        <a href="{{ route('games.slug',$game->slug) }}" class="nk-post-img">
                            <img src="{{ $game->thumb2 }}" alt="{{ $game->name }}" onerror="this.src='{{ $game->thumb4 }}'" />
                            <span class="nk-post-categories">
                            <span class="bg-main-5">{{ $game->category }}</span>
                            </span>
                        </a>
                        <div class="nk-gap"></div>
                        <h2 class="nk-post-title text-center h4"><a href="{{ route('games.slug',$game->slug) }}">{{ $game->name }}</a></h2>
                        <div class="nk-post-text">
                            <p>
                                {{ Str::limit($game->description, 80, '...') }}
                            </p>
                        </div>
                    </div>
                    <!-- END: Post -->
                </div>
            @endforeach
        </div>
    </div>
    <!-- END: Latest News -->
</div>
@endsection
