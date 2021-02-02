<section id="our-portfolio-detail">

    <div class="container">

        <div class="our-portfolio-detail">
            <h1 class="portfolio-title">OUR WORK</h1>
        </div>

        <div class="portfolio-work-wrapper card p-3">
            <div class="">
                @foreach ($portfolio->chunk(3) as $chunk)
                    <div class="row py-3">
                        @foreach ($chunk as $port)
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
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
    </div>
    @livewire('user-interface.lets-talk')
</section>
