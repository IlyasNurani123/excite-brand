<section id="blog" class="blog-class">
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
        <div class="row">
            <div class="blog-title">
                <h3 class="">Most Recent</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-8 col-lg-8">
                {{-- @foreach ($posts as $post) --}}

                    <div class="card mb-4 post-caption">
                        @if(!empty($recent->feature_image))
                        <div class="feature-image">
                            <img class="" src="{{ asset('storage/' . $recent->feature_image) }}"
                            alt="Card image cap">
                        </div>
                        @endif
                        <div class="card-body">
                            <h6 class="m-3"><b><a href="{{ route('post-by-category', ['category' => $recent->catagory->slug ]) }}">{{ $recent->catagory->name }}</a></b></h6>
                          <span><b>By ExciteBrand Admin</b> </span>       <small class="m-3"><b> {{$recent->created_at->toDateString() }}</b></small>
                            <h5 class="card-title">{{ $recent->post_title }}</h5>
                            <div class="card-text post-description-detail mb-4"> {!!
                               $recent->article  !!}</div>
                           
                            <a href="{{ route('details', ['slug' => $recent->slug]) }}" class="btn btn-primary">read
                                more</a>
                        </div>
                    </div>
                    {{-- @break
                @endforeach --}}
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
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
        <div class="blog-grid">
            @foreach ($posts->chunk(3) as $post)
                           
            <div class="row">
                @foreach ( $post as $p )
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/' . $p->feature_image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="m-3"><b><a href="{{ route('post-by-category', ['category' => $p->catagory->slug ]) }}">{{ $p->catagory->name }}</a></b></h6>
                            <span><b>By ExciteBrand Admin</b> </span>       <small class="m-3"><b> {{$p->created_at->toDateString() }}</b></small>
                          <h5 class="card-title">{{$p->post_title}}</h5>
                          <div class="card-text post-description-detail mb-4">
                                    <div> {!!
                                        $p->article !!}
                                        
                                    </div>
                          </div>
                                 
                       <div class="text-center">

                           <a href="{{ route('details', ['slug' => $p->slug]) }}" class="btn custom-button">read
                               more</a>
                       </div>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>


    
        <div>
            {{ $posts->links() }}
        </div>

    </div>
    @livewire('user-interface.lets-talk')
</section>
