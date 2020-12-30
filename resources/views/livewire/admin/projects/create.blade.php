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
        <form>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Project Title</label>
                        <input type="text" class="form-control" id="recipient-name">
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
                      </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Project Link</label>
                        <input type="text" class="form-control" wire:model="url" id="recipient-name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"> Project image</label>
                        <input type="file" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"> Project Description</label>
                        <textarea class="form-control" id="recipient-name" rows="4"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>