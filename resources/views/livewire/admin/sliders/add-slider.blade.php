<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 md-6 text-center">
                          @if (session()->has('message'))
                          <div class="alert {{ Session::get('alert-class') }}" role="alert">
                            <a href="#" class="close mdi mdi-window-close" data-dismiss="alert" aria-label="close" ></a>
                               <p class="blockquote">{{session('message')}}</p>
                           </div>
                        @endif
                        </div>
                      </div>
                 <h4 class="card-title">Slider</h4>
                 <form wire:submit.prevent="UpdateOrAddSlider" >
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Slider Title</label>
                                <input type="text" wire:model="slider_title" class="form-control" id="recipient-name" required>
                                @error('slider_title') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Button Text</label>
                                <input type="text" class="form-control" wire:model="button_text" id="recipient-name">
                                @error('button_text') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">heading</label>
                                <input type="text" wire:model="heading" class="form-control" id="recipient-name" required>
                                @error('heading') <span class="text-danger">{{ $message }}</span>@enderror
                              </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
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
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label"> Project Description</label>
                                <textarea class="form-control" wire:model="description" id="recipient-name" rows="2"></textarea>
                                 @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Images</label>
                                <input type="file" wire:model="images" class="form-control" id="recipient-name" multiple>
                                 @error('image.*') <span class="text-danger">{{ $message }}</span>@enderror
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
    </div>
    

