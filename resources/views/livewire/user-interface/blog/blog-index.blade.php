<section id="blog">
    <div class="banner">
        @php
        $banner = App\Models\Banner::where('status',1)
        ->Where('banner_name','our news and blog')
        ->get();
        @endphp
        @foreach ($banner as $ban)
            <img class="banner-image" src="{{ asset('storage/' . $ban->image) }}">
            @break
        @endforeach
        <div class="banner-description text-align-center">
            {{-- <h1>Our Blog And News</h1> --}}
            {{-- <h6></h6> --}}
        </div>
    </div>
    <div class="container container-wrapper">
        <div class=" row blog-title">
            <div class="blog-title">
                <h3>Most Recent</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 offset-md-1 offset-lg-1">
                @foreach ($lattest as $lat)

                    <div class="feature-image">
                        <img src="{{ asset('storage/' . $lat->feature_image) }}" height="250">
                    </div>
                    <div>{{ $lat->catagory->name }}</div>
                    <div class="time-date pt-3">
                        @php

                        $date = Carbon\Carbon::today()->toDateString();
                        @endphp
                        <strong>{{ $date }}</strong>
                    </div>

                    <div class="post-title pt-3">
                        <h3>{{ $lat->post_title }}</h3>
                    </div>
                    <div class="post-description">
                        {!! Illuminate\Support\Str::limit($lat->article, 200) !!}
                    </div>
                    <div class="read-article pt-4">
                        <a href="{{ route('details', ['slug' => $lat->slug]) }}">Read
                            Article
                            <span class="fa fa-long-arrow-right pt-2" aria-hidden="true"></span>
                        </a>

                    </div>
                    @break
                @endforeach
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="popular-post">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="popular-post-images">
                                <img src="" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="catagory-content">
                                <div class="post-description">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @livewire('user-interface.lets-talk')
    @livewire('user-interface.newsletters')
</section>
