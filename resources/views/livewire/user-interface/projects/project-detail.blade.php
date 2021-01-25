<section id="portfolio-container">
    <div class="portfolio-our-work">
        <div class="our-work-caption">
            <h1 class="our-work-title text-center mb-3">our work</h1>
            <p class="our-work-description text-center">we build strong, authentic brands that create real impact</p>
        </div>
        <div class="our-work-left-image-container">
            <div class="left-top-image-wrapper">
                <img src="{{ asset('images/top-rectangle.png') }}" class="left-top-image" />
            </div>
            <div class="left-bottom-image-wrapper">
                <img src="{{ asset('images/middle-rectangle.png') }}" class="left-bottom-image" />
            </div>
        </div>
        <div class="our-work-top-right-container">
            <div class="top-right-image-wrapper">
                {{-- <img src="{{ asset('images/top-right-image.png') }}"
                    class="top-right-image" /> --}}
            </div>
        </div>
    </div>

    <div class="container">

        <div class=" our-work-grid-wrapper">
            <div class="our-work-grid-container">
                @foreach ($portfolio->chunk(3) as $chunk)
                    <div class="row py-2">
                        @foreach ($chunk as $port)
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-2">
                                <div class="hovereffect">
                                    <img class="img-responsive" src="{{ asset('storage/' . $port->project_image) }}"
                                        alt="">
                                    <div class="overlay">

                                        <a class="info" href="{{ $port->url }}" target="_blank">
                                            <h2>{{ $port->project_name }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mb-4"><button type="button" class="btn btn-outline-secondary custom-button"
                style="width: 150px">More</button></div>
    </div>
    </div>
</section>
