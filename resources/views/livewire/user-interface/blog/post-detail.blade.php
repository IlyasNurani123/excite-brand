<section id="our-portfolio-detail">

    <div class="container">
        <div class="our-portfolio-detail post-title">
            <h1 class="post-title">{{ $post[0]->post_title }}</h1>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-4 col-lg-4">
                @if (!empty($post[0]->feature_image))
                    <div class="feature-image-detail">
                        <img src="{{ asset('storage/' . $post[0]->feature_image) }}" height="250">
                    </div>
                @endif
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 ">
                {{-- <div class="post-title pt-3 text-white">
                    <h3>{{ $post[0]->post_title }}</h3>
                </div> --}}

                <div>
                    <h6 class="m-3 text-white"><b><span>Category : </span><a
                                href="{{ route('post-by-category', ['category' => $post[0]->catagory->slug]) }}">{{ $post[0]->catagory->name }}</a></b>
                    </h6>
                </div>

                <div class="time-date pt-3 text-white">
                    <span><b>ExciteBrand Admin /</b></span>
                    <strong>{{ $post[0]->created_at->toDateString() }}</strong>
                </div>

                <div class="post-description text-white">
                    {!! $post[0]->article !!}
                </div>
            </div>
        </div>
    </div>
    @livewire('user-interface.lets-talk')
</section>
