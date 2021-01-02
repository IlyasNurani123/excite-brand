<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Feature</h4>
            <div class="ml-auto text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createFeature">
                    Create Feature
                </button>
            </div>
        </div>
    </div>
    {{-- @include('livewire.admin.features.add-feature') --}}
    @livewire('admin.features.add-feature')
    
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
    <div class="card">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Feature Title</th>
              <th scope="col">Service Name</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @livewire('admin.delete-modal')
          <tbody>
            @foreach ($features as $feature )
            <tr>
              <th scope="row">{{$feature->id}}</th>
              <td>{{$feature->feature_title}}</td>
              <td>{{$feature->service->title}}</td>
              <td>{{$feature->unit_price}}</td>
              <td><input type="checkbox" name="status[]" value="{{ $feature->id }}" 
                {{ $feature->status ? 'checked' : '' }}></td>
              <td><span class="mdi  mdi-pencil  hover:bg-blue-600 btn btn-primary" data-toggle="modal" data-target="#createFeature" wire:click="$emit('onEdit',{{$feature->id}})"></span>
                <button wire:click="selectItems({{$feature->id}},'deleteFeature')" class="mdi  mdi-delete  hover:bg-blue-600 btn btn-danger" data-toggle="modal" data-target="#myModal" ></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    window.livewire.on('refreshPage', () => {
        $('#createFeature').modal('hide');
    });
</script> 
@endpush