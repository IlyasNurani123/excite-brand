<div class="container-fluid">
    <div class="row m-4">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Projects</h4>
            <div class="ml-auto text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProject">
                    Create Portfolio
                </button>
            </div>
        </div>
    </div>
        @include('livewire.admin.projects.create')
        <div class="row">
            <div class="col-sm-12 md-8 text-center">
              @if (session()->has('message'))
              <div class="alert alert-success" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                   <p>{{session('message')}}</p>
               </div>
            @endif
            </div>
          </div>
          <div class="card">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">project Title</th>
                  <th scope="col">project Description</th>
                  <th scope="col">project Url</th>
                  <th scope="col">project type</th>
                  <th scope="col">project Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($portfolios as $project )
                <tr>
                  <th scope="row">{{$project->id}}</th>
                  <td>{{$project->project_name}}</td>
                  <td>{{Illuminate\Support\Str::limit($project->project_description, 50) }}</td> 
                  <td>{{$project->project_type}}</td>
                  <td>{{$project->url}}</td>
                  <td><img src="{{asset('storage/'.$project->project_image)}}" height="100" width="100" alt="{{$project->project_name}}"></td>
                  <td><span class="mdi  mdi-pencil  hover:bg-blue-600 btn btn-primary" data-toggle="modal" data-target="#createProject" wire:click="edit({{$project->id}})"></span>
                    <span class="mdi  mdi-delete  hover:bg-blue-600 btn btn-danger" wire:click="delete({{$project->id}})"></span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
</div>
@push('scripts')
<script type="text/javascript">
    window.livewire.on('projectStore', () => {
        $('#createProject').modal('hide');
    });
</script> 
@endpush