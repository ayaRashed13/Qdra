@extends("Admin.Dashboard.home")

@section('content')
@include("errors")

    <div class="card-header">
      <h3 class="card-title">Create New Services</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ route("services/store") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" placeholder="Enter ...">
            </div>
          </div>


        </div>
        <div class="row">
            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Short Description</label>
                <textarea class="form-control"  name="shortdesc" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control"  name="desc" rows="3" placeholder="Enter ..."></textarea>
            </div>
          </div>


        </div>
        <div class="row">
            <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> background image</label>
            <input type="file" name="background_image" class=" form-control-file" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter image" >
          </div>
            </div>
          </div>

        </div>
        <div class="row">
            <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> image</label>
            <input type="file" name="image" class=" form-control-file" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter image" >
          </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <!-- file input for video -->
              <div class="form-group">
                <label for="video">Video</label>
                <input type="file" name="video" accept="video/*" class="form-control-file" id="video" aria-describedby="videoHelp" >
                <small id="videoHelp" class="form-text text-muted">Upload a video file.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1">image of video</label>
            <input type="file" name="video_image" class=" form-control-file" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter image" >
          </div>
            </div>
          </div>
          <button type="submit"  class="btn btn-primary">Submit</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection