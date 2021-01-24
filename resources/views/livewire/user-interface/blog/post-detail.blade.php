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
                <h3></h3>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-5">
                <div class="feature-image-detail">
                    <img src="{{ asset('storage/' . $post[0]->feature_image) }}" height="250">
                </div>
                <small class="m-3"> <strong>Admin {{ $post[0]->created_at }}</strong></small>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                <div class="post-title pt-3">
                    <h3>{{ $post[0]->post_title }}</h3>
                </div>

                <div>{{ $post[0]->catagory->name }}</div>

                <div class="time-date pt-3">
                    <strong>{{ $post[0]->created_at }}</strong>
                </div>

                <div class="post-description">
                    {!! $post[0]->article !!}
                </div>
            </div>
        </div>
    </div>
    @livewire('user-interface.lets-talk')
    @livewire('user-interface.newsletters')
</section>
