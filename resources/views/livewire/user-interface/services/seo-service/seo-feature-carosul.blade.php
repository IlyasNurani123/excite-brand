<div class="container">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">2</a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">3</a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">4</a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">5</a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">6</a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">7</a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">8</a>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i
                    class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i
                    class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>
{{-- </div> --}}
{{-- @push('scripts')

<script language="javascript">
    $('#myCarousel').carousel({
        interval: 5000
    });

    $('.carousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {

            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

        }
    });

</script>
@endPush --}}
