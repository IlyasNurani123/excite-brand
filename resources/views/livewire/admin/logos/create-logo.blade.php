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
                <form wire:submit.prevent="updateOrcreateLogo">
                    <div class="row">
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
                        <div class="col-sm-12 col-md-6 col-md-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label"> Price</label>
                                <input type="file" wire:model="logo_url" class="form-control" id="recipient-name">
                                @error('logo_url') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        {{-- @if ($logo_url)
                            <img src="{{ $logo_url->temporaryUrl() }}" width="300">
                            @else
                        @endif --}}
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div wire:loading wire:target="submit">
                            Updating quantity...
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
