@extends("Admin.Dashboard.home")

@section('content')

    <div class="card-header">
      <h3 class="card-title">Edit city</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ route("city/update",['id'=> $key1->id]) }}" method="post">
        @csrf
        @method("PUT")
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label class="required">Name</label>
              <input type="text"name="name" class="form-control" placeholder="Enter ..." value="{{ $key1->name }}">
              @error('name')
              <span class="text-danger">{{ $message }}</span>
          @enderror
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1" class="required">Country Name</label>
    <select name="country_id" id="">
        @foreach ($key2 as $country )
        {{--@dd($countries)--}}
        <option value={{$country->id}} > {{ $country->name}}</option>
        @endforeach

        </select>
        @error('country_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
        </div>
    </div>




</div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection