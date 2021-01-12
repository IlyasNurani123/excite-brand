<div class="card">
    <div class="card-title">
        <h4 class="mt-5 text-center">Feature Image</h4>
        <div class="card-body">
            <form class="form-horizontal" wire:submit.prevent="updateOrStoreTestimonial">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-10 col-lg-10">
                                <input type="file" wire:model="post_image" class="form-control" id="validationServer01"
                                    required>
                                @error('post_image') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2 m-0 p-0">
                                <div class="add-icon" style=" margin-top:-7px">
                                    <span style="font-size:30px" class="mdi mdi-plus-box">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
