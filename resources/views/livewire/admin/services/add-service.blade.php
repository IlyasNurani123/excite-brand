<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 md-6 text-center">
            @if (session()->has('message'))
                <div class="alert {{ Session::get('alert-class') }}" role="alert">
                    <a href="#" class="close mdi mdi-window-close" data-dismiss="alert" aria-label="close"></a>
                    <p class="blockquote">{{ session('message') }}</p>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Services form</h4>
                    <form class="form-horizontal" wire:submit.prevent="addAndUpdateService">
                        <div class="form-group row">
                            @csrf
                            <label for="validationServer01"
                                class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9 col-md-8 col-lg-8">
                                <input type="text" wire:model="title" class="form-control" id="validationServer01"
                                    placeholder="Title Here" required>
                                @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-3 text-right control-label col-form-label">Detail
                                Description</label>
                            <div class="col-sm-9 col-md-8 col-lg-8" id="editor">
                                <textarea class="form-control" id="mytextarea"
                                    wire:model.debounce.9999999ms="description" rows="8"></textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="icon" class="col-sm-3 text-right control-label col-form-label">Icon</label>
                            <div class="col-sm-9 col-md-8 col-lg-8">
                                <input type="file" wire:model="icon" class="form-control" id="icon"
                                    data-browse-on-zone-click="true" placeholder="please Add icon">
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

@push('scripts')
    {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        // var options={
        //     filebrowserBrowseUrl: '/browser/browse.php',
        //     filebrowserUploadUrl: '/uploader/upload.php'
        // }
        CKEDITOR.replace('mytextarea').on('change', function(e) {
            @this.set('description', e.editor.getData())
        });
        // CKEDITOR.replace('mytextarea',options)

    </script> --}}
@endpush
