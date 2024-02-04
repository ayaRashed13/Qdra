@extends("Admin.Dashboard.home")

@section('content')


    <div class="card-header">
      <h3 class="card-title">Add New country</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ route("country/store") }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label class="required">name</label>
              <input type="text"name="name" class="form-control" placeholder="Enter ...">
              @error('name')
              <span class="text-danger">{{ $message }}</span>
          @enderror
            </div>
          </div>
        </div>



        <button type="submit" class="btn btn-primary">Create</button>
    </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection