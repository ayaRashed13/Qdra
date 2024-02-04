@extends("Admin.Dashboard.home")

@section('content')

    <div class="card-header">
      <h3 class="card-title">Edit country</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ route("country/update",['id'=> $countryEdit->id]) }}" method="post">
        @csrf
        @method("PUT")
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label class="required">Name</label>
              <input type="text"name="name" class="form-control" placeholder="Enter ..." value="{{ $countryEdit->name }}">

              @error('name')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection