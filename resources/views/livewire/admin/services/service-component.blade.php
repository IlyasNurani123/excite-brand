<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Services</h4>
            <div class="ml-auto text-right">
              <a href="{{route('add-service')}}" class="font-medium btn btn-primary">Add Service</a>
            </div>
        </div>
    </div>
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
<div class="row">
  @livewire('admin.delete-modal')
  @foreach ($services as $service )
  <div class="col-md-6 col-lg-3">
   
      <div class="card card card-hover">
        <img class="card-img-top" src="{{asset('storage/'.$service->icon)}}" height="100" width="100" alt="{{$service->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$service->title}}</h5>
          <p class="card-text">{!! Illuminate\Support\Str::limit($service->description, 50) !!}</p>
          <div class="flex-column">
          <a href="#" class="btn btn-secondary mr-2 btn-sm">more</a>
          <a href="{{route('service.edit',['service' => $service->id])}}" class="btn btn-primary btn-sm">edit</a>
          {{-- <a href="{{route('service.delete',['id' => $service->id])}}" class="btn btn-primary btn-sm">delete</a> --}}
          <button wire:click="selectItems({{$service->id}},'onDelete')" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-sm">delete</button>
        </div>
        </div>
      </div>
    </div>
    @endforeach
    </div>
  </div>

