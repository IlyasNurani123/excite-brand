<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Banners</h4>
            <div class="ml-auto text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Add Banner
                </button>
            </div>
        </div>
    </div>
    @include('livewire.admin.create-banner')
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
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
                    <th></th>
                    <th scope="col">Banner Name</th>
                    <th scope="col">banner image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @livewire('admin.delete-modal')
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <td></td>
                        <td>{{ $banner->banner_name }}</td>
                        <td><img src="{{ asset('storage/' . $banner->image) }}" alt="banner" width="100" height="100">
                        </td>
                        <td>

                            <!-- Rounded switch -->
                            <label class="switch">
                                <input type="checkbox" name="{{ $banner['status'] }}"
                                    wire:click="updateStatus({{ $banner->id }},{{ $banner->status }})"
                                    {{ $banner->status === 1 ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <span class="mdi  mdi-pencil  hover:bg-blue-600 btn btn-primary" data-toggle="modal"
                                data-target="#formModal" wire:click="edit({{ $banner->id }})"></span>
                            <button wire:click="selectItems({{ $banner->id }},'deleteLogo')"
                                class="mdi  mdi-delete  hover:bg-blue-600 btn btn-danger" data-toggle="modal"
                                data-target="#myModal"></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
