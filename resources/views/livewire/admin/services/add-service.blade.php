<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-title">Services form</h4>
                    <form class="form-horizontal" wire:submit.prevent="addAndUpdateService" >
                        <div class="form-group row">
                            @csrf
                            <label for="validationServer01" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9 col-md-8 col-lg-8">
                                <input type="text" wire:model="title" class="form-control" id="validationServer01"  placeholder="Title Here" required>
                                @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
               
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 text-right control-label col-form-label">Detail Description</label>
                            <div class="col-sm-9 col-md-8 col-lg-8">
                                <textarea class="form-control" wire:model="description" name="description" rows="8" id="description" required></textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="icon" class="col-sm-3 text-right control-label col-form-label">Icon</label>
                            <div class="col-sm-9 col-md-8 col-lg-8">
                                <input type="file" wire:model="icon" class="form-control" id="icon"  placeholder="please Add icon" >
                                @error('icon') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body row">
                            <div class="col-sm-9 col-md-11 col-lg-11 text-right"> 
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>