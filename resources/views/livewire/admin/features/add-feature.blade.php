<div wire:ignore.self class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="createFeatureLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createFeatureLabel">Add Feature</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="updateOrStore">
              <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                      @csrf
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Feature Title</label>
                          <input type="text" wire:model="feature_title" class="form-control" id="recipient-name" required>
                          @error('feature_title') <span class="text-danger">{{ $message }}</span>@enderror
                      </div>
                  </div>
  
                  <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Service Name</label>
                          <select class="form-control" wire:model="service_id">
                              @foreach ($services as $service )
                              <option>Choose services..</option>
                              <option value={{$service->id}}>{{$service->title}}</option>
                              @endforeach
                          </select>
                          @error('service_id') <span class="text-danger">{{ $message }}</span>@enderror
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
  
                  <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                          <label for="message-text" class="col-form-label"> Price</label>
                          <input type="text" wire:model="unit_price" class="form-control" id="recipient-name">
                          @error('unit_price') <span class="text-danger">{{ $message }}</span>@enderror
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
