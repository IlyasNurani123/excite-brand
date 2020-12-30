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
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Collspan Table Example</h5>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
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