<div wire:ignore.self class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="createFeatureLabel" aria-hidden="true">>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createPackageLabel">Packages</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="updateOrStorePackage">
              <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                      @csrf
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Package</label>
                        <select class="form-control" wire:model="package_title">
                            <option>Choose Packages..</option>
                            <option>STARTER </option>
                            <option>ADVANCED </option>
                            <option>PREMIERE </option>
                            <option>ECOMMERCE </option>
                        </select>
                          @error('package_title') <span class="text-danger">{{ $message }}</span>@enderror
                      </div>
                  </div>
  
                  <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Duration</label>
                          <select class="form-control" wire:model="recurring_period">
                              <option>Choose Duration..</option>
                              <option>PER MONTH </option>
                              <option> PER YEAR </option>
                              <option> 15 DAYS </option>
                              <option>OTHERS </option>
                          </select>
                          @error('recurring_period') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                  </div>
                </div>
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
                        <input type="text" wire:model="pricing" class="form-control" id="recipient-name">
                        @error('priceing') <span class="text-danger">{{ $message }}</span>@enderror
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

