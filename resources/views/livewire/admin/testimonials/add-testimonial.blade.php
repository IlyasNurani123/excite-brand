<div wire:ignore.self class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="createFeatureLabel"
    aria-hidden="true">>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPackageLabel">Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" wire:submit.prevent="updateOrStoreTestimonial">
                    <div class="card-body">
                        <div class="row">
                            @csrf
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label for="validationServer01" class="col-form-label"> Client Name </label>
                                        <input type="text" wire:model="name" class="form-control"
                                            id="validationServer01" placeholder="name Here" required>
                                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label for="validationServer01" class="col-form-label"> Site Link </label>
                                        <input type="text" wire:model="link" class="form-control"
                                            id="validationServer01" placeholder="please Add link">
                                        @error('link') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-mg-12 col-md-12">
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 col-lg-12" id="editor">
                                        <label for="description"
                                            class="control-label col-form-label">Testimonial</label>
                                        <textarea class="form-control" wire:model="testimonial" rows="8"></textarea>
                                        @error('testimonial') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body row">
                            <div class="col-sm-9 col-md-11 col-lg-11 text-right">
                                <button wire:loading.attr="disabled" type="submit"
                                    class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
