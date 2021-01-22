<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">testimonials</h4>
            <div class="ml-auto text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Add Testimonial
                </button>
            </div>
        </div>
    </div>
    @livewire('admin.testimonials.add-testimonial')
    <div class="row">
        <div class="col-sm-12 md-8 text-center">
            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ session('message') }}</p>
                </div>
            @endif
        </div>
    </div>
    @livewire('admin.delete-modal')
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Testimonial</th>
                    <th scope="col">Site Link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <th scope="row">{{ $testimonial->id }}</th>
                        <th scope="row">{{ $testimonial->name }}</th>
                        <td>{{ Illuminate\Support\Str::limit($testimonial->review, 50) }}</td>
                        <td>{{ $testimonial->link }}</td>
                        <td><span class="mdi  mdi-pencil  hover:bg-blue-600 btn btn-primary" data-toggle="modal"
                                data-target="#formModal" wire:click="$emit('onEdit',{{ $testimonial->id }})"></span>
                            <button wire:click="selectItems({{ $testimonial->id }},'onDelete')"
                                class="mdi  mdi-delete  hover:bg-blue-600 btn btn-danger" data-toggle="modal"
                                data-target="#myModal"></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
