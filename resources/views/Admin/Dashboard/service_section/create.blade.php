@extends("Admin.Dashboard.home")

@section('content')
{{--@include('errors')--}}

    <div class="card-header">
      <h3 class="card-title">Create New Sections</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ route("section/store") }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label class="required">Title</label>
              <input type="text"name="title" class="form-control" placeholder="Enter ...">
              @error('title')
              <span class="text-danger">{{ $message }}</span>
          @enderror
            </div>
          </div>
        </div>





        <div class="row">
            <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1" class="required">Service Name</label>
    <select name="service_id" id="">
        @foreach ($services as $service )
        <option value={{"$service->id"}} > {{ $service->title}}</option>
        @endforeach

        </select>
        @error('service_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
        </div>
    </div>
</div>

        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection