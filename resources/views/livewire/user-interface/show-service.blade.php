<section id="our-service">

    <div class="our-services-text">
        <div class="main-service-text">
            <h1 class="mb-3">Our Services</h1>
            <p class="mb-5">We build strong,authentic brands that create real impact.</p>
        </div>
    </div>
    <div class="row service-container m-0">
        <div class="col-sm-12 col-md-5 col-lg-5 p-0">
            <div class="service-image"> <img src="{{ asset('images/services.png') }}" alt="">
            </div>
        </div>
        <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="container">
                @foreach ($services->chunk(2) as $service)
                    <div class="row m-0">
                        @foreach ($service as $ser)
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <img class="img-responsive" src="{{ asset('storage/' . $ser->icon) }}" alt="">
                                    </div>
                                    <div class="service-title">
                                        <h5 class="mb-3">{{ $ser->title }}</h5>
                                    </div>
                                    <div class="service-description">
                                        <p>{{ $ser->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @endforeach
            </div>
        </div>
    </div>

</section>
