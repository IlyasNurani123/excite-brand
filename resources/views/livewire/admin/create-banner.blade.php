<div wire:ignore.self class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="createFeatureLabel"
    aria-hidden="true">>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPackageLabel">Logo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateOrcreatebanner">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">choose Banner name</label>
                                <select class="form-control" wire:model="banner_name">
                                    <option>choose banner name</option>
                                    <option>who we are</option>
                                    <option>what we do</option>
                                    <option>we design</option>
                                    <option>we develop</option>
                                    <option>we promote</option>
                                    <option>we support</option>
                                    <option>seo service</option>
                                    <option>ppc Agency</option>
                                    <option>our news and blog</option>
                                    <option>contact us</option>
                                </select>
                                @error('banner_name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        {{-- @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" width="300">
                            @else
                        @endif --}}
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Status</label>
                                <select class="form-control" wire:model="status">
                                    <option>choose status</option>
                                    <option value="1">Active</option>
                                    <option value="0">DeActive</option>
                                </select>
                                @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label"> image</label>
                                <input type="file" wire:model="image" class="form-control" id="recipient-name">
                                @error('image') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
