<div wire:ignore.self class="modal fade" id="createProject" tabindex="-1" role="dialog" aria-labelledby="createProjectLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createProjectLabel">Add Portfolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form wire:submit.prevent="store">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Project Title</label>
                        <input type="text" wire:model="project_name" class="form-control" id="recipient-name" required>
                        @error('project_name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"> Project Type</label>
                        <select class="form-control" wire:model="project_type">
                            <option>Mobile App</option>
                            <option>Web Site</option>
                            <option>Other</option>
                        </select>
                        @error('project_type') <span class="text-danger">{{ $message }}</span>@enderror
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Project Link</label>
                        <input type="text" class="form-control" wire:model="url" id="recipient-name">
                        @error('url') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"> Project image</label>
                        <input type="file" wire:model="project_image" class="form-control" id="recipient-name">
                        @error('project_image') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"> Project Description</label>
                        <textarea class="form-control" wire:model="project_description" id="recipient-name" rows="4"></textarea>
                         @error('project_description') <span class="text-danger">{{ $message }}</span>@enderror
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