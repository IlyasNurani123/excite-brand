<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Logos</h4>
            <div class="ml-auto text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Add Logo
                </button>
            </div>
        </div>
    </div>
    @livewire('admin.logos.create-logo')
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
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
                <th></th>
                <th></th>
              <th scope="col">Logo</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @livewire('admin.delete-modal')
          <tbody>
            @foreach ($logos as $logo )
            <tr>
                <td></td>
                <td></td>
              <td><img src="{{asset('storage/'.$logo->logo_url)}}" alt="logo" width="300" height="300"></td>
              <td><input type="checkbox" name="status[]" value="{{ $logo->id }}" 
                {{ $logo->status ? 'checked' : '' }} ></td>
              <td>
                <span class="mdi  mdi-pencil  hover:bg-blue-600 btn btn-primary" data-toggle="modal" data-target="#formModal" wire:click="$emit('onEdit',{{$logo->id}})"></span>
                <button wire:click="selectItems({{$logo->id}},'deleteLogo')" class="mdi  mdi-delete  hover:bg-blue-600 btn btn-danger" data-toggle="modal" data-target="#myModal" ></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>