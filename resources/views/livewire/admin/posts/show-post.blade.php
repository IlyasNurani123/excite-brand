<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">post</h4>
            <div class="ml-auto text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Create Post
                </button>
            </div>
        </div>
    </div>

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
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Post Title</th>
                    <th scope="col">Post Tag</th>
                    <th scope="col">Article</th>
                    <th scope="col">Post Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @livewire('admin.delete-modal')
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->post_title }}</td>
                        <td>{{ $post->tag->tag_title }}</td>
                        <td>{!! $post->article !!}</td>
                        <td><input type="checkbox" name="status[]" value="{{ $post->id }}"
                                {{ $post->status ? 'checked' : '' }}></td>
                        <td><span class="mdi  mdi-pencil  hover:bg-blue-600 btn btn-primary" data-target="#formModal"
                                wire:click="$emit('onEdit',{{ $post->id }})"></span>
                            <button wire:click="selectItems({{ $post->id }},'deletepost')"
                                class="mdi  mdi-delete  hover:bg-blue-600 btn btn-danger" data-toggle="modal"
                                data-target="#myModal"></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
