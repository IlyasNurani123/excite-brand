<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Services</h4>
            <div class="ml-auto text-right">
                <a href="{{ route('add-service') }}" class="font-medium btn btn-primary">Add Service</a>
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
    <div class="row">
        @livewire('admin.delete-modal')

        <div class="col-md-12 col-lg-12">

            {{-- <div class="card card card-hover">
                <img class="card-img-top" src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $service->title }}</h5>
                    <p class="card-text">{{ Illuminate\Support\Str::limit($service->description, 50) }}</p>
                    <div class="flex-column">
                        <a href="#" class="btn btn-secondary mr-2 btn-sm">more</a>


                        <button wire:click="selectItems({{ $service->id }},'onDelete')" data-toggle="modal"
                            data-target="#myModal" class="btn btn-danger btn-sm">delete</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Service Title</th>
                        <th scope="col">Service Description</th>
                        <th scope="col">Service Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit($service->description, 50) }}</td>
                            <td><img src="{{ asset('storage/' . $service->icon) }}" height="100" width="100"
                                    alt="{{ $project->project_name }}"></td>
                            <td>
                                <a href="{{ route('service.edit', ['service' => $service->id]) }}"
                                    class="mdi  mdi-pencil  hover:bg-blue-600 btn btn-primary"></a>

                                <span class="mdi  mdi-delete  hover:bg-blue-600 btn btn-danger"
                                    wire:click="selectItems({{ $service->id }},'onDelete')"></span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
