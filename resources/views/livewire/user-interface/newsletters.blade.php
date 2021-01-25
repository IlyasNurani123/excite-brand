<section id="newsletter">
    <div class="container my-4 p-4">
        <div class="card newsletter-card">
            <div class="card-body my-4">

                <div class="row newsletter-row">
                    <div class="col-sm-12 col-md-6 col-lg-6 pl-5">
                        <h2 class="newsletter-title mb-2">Subscribe Now To Our Newsletter</h2>
                        <p class="newsletter-description">Let's subscribe with us and find the fun</p>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 pr-5">
                        <div class="row text-center">
                            @if (session()->has('message'))
                                <div class="alert {{ Session::get('alert-class') }} alert-dismissible fade show "
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <form wire:submit.prevent="suscribeNewsletter">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-8 col-md-8 col-lg-8">
                                    <input type="email" wire:model.debounce.500ms="email" class="form-control"
                                        id="formGroupExampleInput" placeholder="Your email*" required>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <button class="newsletter-form-submit-btn" type="submit">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
