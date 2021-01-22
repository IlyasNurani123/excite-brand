<div class="card">
    <div class="card-title">
        <h4 class="mt-5 text-center">Feature Image</h4>
        <div class="card-body">
            <form class="form-horizontal" wire:submit.prevent="addFeatureImage">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-10 col-lg-10">
                                <input type="file" wire:model="feature_image" class="form-control"
                                    id="validationServer01" required>
                                @error('feature_image') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2 m-0 p-0">
                                <div class="add-icon">
                                    <button type="submit" class="btn btn-primary btn-sm">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
