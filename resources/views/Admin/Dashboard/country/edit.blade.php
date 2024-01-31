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
              <label>Name</label>
              <input type="text"name="name" class="form-control" placeholder="Enter ..." value="{{ $countryEdit->name }}">
            </div>
          </div>
        </div>






</div>

        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection