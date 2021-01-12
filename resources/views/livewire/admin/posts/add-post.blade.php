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
        <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="card">
                <h4 class="card-title m-2"> Add New Post </h4>
                <div class="card-body m-2">
                    <form class="form-horizontal" wire:submit.prevent="updateOrStorePost">
                        <div class="row">
                            @csrf
                            <div class="col-sm-12 col-md-9 col-lg-9">
                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" wire:model="post_title" class="form-control"
                                            id="validationServer01" placeholder="Post Title here" required>
                                        @error('post_title') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <select class="form-control" wire:model="status" aria-placeholder="please">
                                        <option>choose status</option>
                                        <option value="1">Active</option>
                                        <option value="0">DeActive</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-mg-12 col-md-12">
                                <div class="form-group row" wire:ignore>
                                    <div class="col-sm-12 col-md-12 col-lg-12" id="editor">
                                        <label for="description" class="control-label col-form-label">addPost</label>
                                        <textarea class="form-control" id="addPost"
                                            wire:model.debounce.9999999ms="article" rows="8"></textarea>
                                        @error('article') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
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
        <div class="col-sm-12 col-md-3 col-lg-3">
            @include('livewire.admin.posts.tag')
            @include('livewire.admin.posts.add-image')
        </div>
    </div>
</div>
</div>

@push('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        // var options={
        //     filebrowserBrowseUrl: '/browser/browse.php',
        //     filebrowserUploadUrl: '/uploader/upload.php'
        // }
        CKEDITOR.replace('addPost').on('change', function(e) {
            @this.set('article', e.editor.getData())
        });
        // CKEDITOR.replace('mytextarea',options)

    </script>
@endpush
