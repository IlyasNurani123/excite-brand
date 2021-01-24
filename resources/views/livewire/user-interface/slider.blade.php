    <section id="banner">
        <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <div class="animation-wrapper">
                            <img src="{{ asset('images/slide-1.png') }}" class="d-block" alt="...">
                        </div>
                        <div class="box-control">
                            <div id="image-box-1">
                            </div>
                           
                        </div>
                        <div id="box-c-1">
                            <div id="img-box-2">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">

                        <img src="{{ asset('images/slide-2.png') }}" class="d-block" alt="...">
                        <div id="image-box-2" style="background:black;  
                        height: 80px; 
                        width: 80px;">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide-1.png') }}" class="d-block" alt="...">
                    </div> --}}
                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a> -->
                <!-- <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a> -->
            </div>
        </div>
    </section>


    @push('scripts')

    <script src="{{asset('userInterface/js/animation.js')}}"></script>

        {{-- <script>

      

            // let animation2 = anime({
            //     targets: "#image-box-2",
            //     backgroundColor: "#b784a7",
            //     borderRadius: "50px",
            //     easing: "easeInOutQuad",
            //     loop: true,
            // });

            

            // const stageAnimation = anime.timeline({
            //         target: '.tail',
            //         easing: 'easeInOutExpo',
            //         delay: anime.stagger(10, {
            //             from: 'last'
            //         }),
            //         duration: 750,
            //         endDelay: 1000,
            //         loop: true,
            //         autoplay: false
            //     })
            //     .add({
            //         translateX: () => anime.random(-250, 250),
            //         translateY: () => anime.random(-250, 250),
            //         delay: anime.stagger(200, {grid:grid, from:"last"
            //         }),
            //         scale:0.5,
            //         backgroundColor:"#2b8c4c",
            //         borderRadius:"50%"
            //     });

            //     stageAnimation.play();
            //     console.log(stageAnimation)
        </script> --}}
    @endpush
