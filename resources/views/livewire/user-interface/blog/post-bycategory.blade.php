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
                            <div class="card-body post-description">
                                <h5 class="card-title">{{ $post->post_title }}</h5>
                                <p class="card-text  mb-4">{!!
                                    Illuminate\Support\Str::limit($post->article, 200) !!}.</p>
                                <a  href="{{ route('details', ['slug' => $post->slug]) }}" class="btn btn-primary mt-3">read
                                    more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
        @livewire('user-interface.lets-talk')
        @livewire('user-interface.newsletters')
