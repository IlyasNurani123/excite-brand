<section class="catagory-detail">
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
    <div class="container">     
    <div class="row">
        <div class="catagory-title m-4">
            <h3>Post By Category</h3>
        </div>
    </div>
        @foreach ($posts->chunk(3) as $chunk)
            <div class="row mb-4">
                @foreach ($chunk as $post)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card post-title">
                            <img class="card-img-top" src="{{ asset('storage/' . $post->feature_image) }}"
                                alt="Card image cap">
                                <small class="m-3"> <strong>Admin {{$post->created_at}}</strong></small>
                            <div class="card-body post-description-detail">
                                <h5 class="card-title">{{ $post->post_title }}</h5>
                                <p class="  mb-4">{!!
                                    $post->article !!}.</p>
                            </div>
                            <a  href="{{ route('details', ['slug' => $post->slug]) }}" class="btn btn-primary mt-3">read
                                more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
        @livewire('user-interface.lets-talk')
</section>


