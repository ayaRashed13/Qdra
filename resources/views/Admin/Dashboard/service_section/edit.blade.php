@extends("Admin.Dashboard.home")

@section('content')

    <div class="card-header">
      <h3 class="card-title">Create New categories</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ route("section/update",['id'=> $key1->id]) }}" method="post">
        @csrf
        @method("PUT")
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Title</label>
              <input type="text"name="title" class="form-control" placeholder="Enter ..." value="{{ $key1->title }}">
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-6">
            


        <div class="row">
            <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Service Name</label>
    <select name="service_id" id="">
        @foreach ($key2 as $service )
        <option value="{{ "$service->id" }}" > {{ $service->title}}</option>
        @endforeach

        </select>
        </div>
    </div>
</div>

        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection