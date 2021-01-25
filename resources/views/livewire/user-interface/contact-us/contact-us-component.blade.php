<section id="contact-us">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1 offset-md-1">
                @include('livewire.user-interface.contact-us.contact-detail')
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5">

                {{-- Notification --}}

                <div class="row">
                    <div class="col-sm-12 md-6 text-center">
                        @if (session()->has('message'))
                            <div class="alert {{ Session::get('alert-class') }} alert-dismissible fade show"
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                {{-- end Notification --}}
                <div id="contact-us-form">
                    <div class="contact-us-form-header">
                        <h5 class="get-in-touch">Get in Touch</h5>
                        <h1 class="get-ready-to-start">Ready to Get Started?</h1>
                    </div>

                    <div class="contact-form row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <form wire:submit.prevent="submitContactUsForm">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        wire:model.debounce.500ms="full_name" placeholder="Your Name*" required>
                                    @error('full_name') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="formGroupExampleInput2"
                                        wire:model.debounce.500ms="email" placeholder="Your Email*" required>
                                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        wire:model.debounce.500ms="contact_no" placeholder="Your Contact No *" required>
                                    @error('contact_no') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" wire:model.debounce.500ms="message"
                                        id="exampleFormControlTextarea1" rows="3" placeholder="Message..."></textarea>
                                    @error('message') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <button class="contact-form-submit-btn" type="submi"
                                        wire:loading.attr="disabled">Send Message</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
