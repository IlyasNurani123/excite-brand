<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">post</h4>
            <div class="ml-auto text-right">
                <a href="{{ route('add.post') }}" class="btn btn-primary">
                    Create Post
                </a>
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
                        <td>
                            @foreach ($post->tags as $tag)
                                {{ $tag->title }}
                            @endforeach
                        </td>
                        <td>{!! Illuminate\Support\Str::limit($post->article, 200) !!}</td>
                        <td>
                            <img src="{{ asset('storage/' . $post->feature_image) }}" width="50" height="50">
                        </td>
                        <td>

                            <!-- Rounded switch -->
                            <label class="switch">
                                <input type="checkbox" name="{{ $post->title }}"
                                    wire:click="updateStatus({{ $post->id }},{{ $post->status }})"
                                    {{ $post->status === 1 ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>


                        </td>
                        <td>
                            <a href="{{ route('update.post', ['id' => $post->id]) }}"
                                class="mdi  mdi-pencil  hover:bg-blue-600 btn btn-primary"></a>
                            <button wire:click="selectItems({{ $post->id }},'onDelete')"
                                class="mdi  mdi-delete  hover:bg-blue-600 btn btn-danger" data-toggle="modal"
                                data-target="#myModal"></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            {{ $posts->links() }}
        </table>
    </div>
</div>
