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
            <div class="blog-title text-center">
                <h3 class="">Most Recent</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-7 offset-md-1 offset-lg-1">
                @foreach ($posts as $post)

                    <div class="card mb-4 post-caption">
                        <div class="feature-image">
                            <img class="" src="{{ asset('storage/' . $post->feature_image) }}"
                            alt="Card image cap">
                        </div>
                        <div class="card-body post-title">
                            <small class="m-3"><a href="{{ route('post-by-category', ['category' => $post->catagory->slug ]) }}">{{ $post->catagory->name }}</a></small><br>
                            <small class="m-3"> <strong>Admin {{$post->created_at}}</strong></small>
                            <h5 class="card-title">{{ $post->post_title }}</h5>
                            <div class="card-text post-description mb-4"> {!!
                                Illuminate\Support\Str::limit($post->article, 400) !!}</div>
                           
                            <a href="{{ route('details', ['slug' => $post->slug]) }}" class="btn btn-primary">read
                                more</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Catagories</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="blog-categories-detail">
                                @foreach ($catagories as $catagory)
                                    <div class="catagory-name">
                                        <a href="{{ route('post-by-category', ['category' => $catagory->slug]) }}">
                                            {{ $catagory->name }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            {{ $posts->links() }}
        </div>

    </div>
    @livewire('user-interface.lets-talk')
    @livewire('user-interface.newsletters')
</section>
