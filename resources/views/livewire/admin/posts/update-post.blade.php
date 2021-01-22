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
                <h4 class="card-title m-2">Update Post </h4>
                <div class="card-body m-2">
                    <form class="form-horizontal" wire:submit.prevent="updatePost">
                        <div class="row">
                            @csrf
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" wire:model="post_title" class="form-control"
                                            id="validationServer01" placeholder="Post Title here" required>
                                        @error('post_title') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div wire:ignore id="for-bootstrap-select">

                                        <select class="form-control" wire:model="category_id" value="{{ $category_id }}"
                                            aria-placeholder="please">
                                            <option>choose category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old($selected_category) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach

                                        </select>

                                    </div>
                                    @error('category_id') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <div wire:ignore id="for-bootstrap-select">
                                        <select class="form-control" wire:model="status" aria-placeholder="please">
                                            <option>choose status</option>
                                            @php
                                            use App\Models\Post;
                                            $posts =Post::get()
                                            @endphp
                                            @foreach ($posts as $post)
                                                <option value="{{ $post->status }}"
                                                    {{ old('status') == $post->id ? 'selected' : '' }}>
                                                    {{ $post->status }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-mg-12 col-md-12">
                                <div class="form-group row" wire:ignore>
                                    <div class="col-sm-12 col-md-12 col-lg-12" id="editor">
                                        <label for="description" class="control-label col-form-label">addPost</label>
                                        {{-- <textarea type="text" input="description"
                                            id="summernote" class="form-control summernote"></textarea>
                                        --}}

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
            @include('livewire.admin.posts.add-category')
        </div>
    </div>
</div>
</div>

@push('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js">
    </script> --}}

    <script>
        // var options={
        //     filebrowserBrowseUrl: '/browser/browse.php',
        //     filebrowserUploadUrl: '/uploader/upload.php'
        // // }
        CKEDITOR.replace('addPost').on('change', function(e) {
            @this.set('article', e.editor.getData())
        });
        // CKEDITOR.replace('mytextarea', options)

        // $('.summernote').summernote({
        //     tabsize: 2,
        //     height: 200,
        //     toolbar: [
        //         ['style', ['style']],
        //         ['font', ['bold', 'underline', 'clear']],
        //         ['color', ['color']],
        //         ['para', ['ul', 'ol', 'paragraph']],
        //         ['table', ['table']],
        //         ['insert', ['link', 'picture', 'video']],
        //         ['view', ['fullscreen', 'codeview', 'help']]
        //     ],
        //     callbacks: {
        //         onChange: function(contents, $editable) {
        //             @this.set('description', contents);
        //         }
        //     }
        // });

    </script>
@endpush
