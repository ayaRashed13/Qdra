@extends('Admin.Dashboard.home')

@section('content')
@include("success")
  <!-- TABLE: LATEST ORDERS -->
  <div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title">Services</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table m-0">
          <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Short Desc</th>
            <th>Desc</th>
            <th>Backdground Image</th>

            <th>Image</th>
            <th>Video</th>
            <th>image of video</th>
            <th>Action</th>

          </tr>
          </thead>
          @foreach ($services as $service )


          <tbody>
          <tr>

            <td>{{  $service->id }}</td>
            <td>{{  $service->title }}</td>
            <td>{{  $service->shortdesc }}</td>
            <td>{{  $service->desc }}</td>

            <td><img src="{{asset("storage/" . $service->background_image)   }}" style="width: 40px; hight:40px"></td>

            <td><img src="{{asset("storage/" . $service->image)   }}" style="width: 40px; hight:40px"></td>
            <td><video src="{{asset("storage/" . $service->video)   }}" style="width: 40px; hight:40px"></video> </td>
            <td><img src="{{asset("storage/" . $service->video_image)   }}" style="width: 40px; hight:40px"></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success" href="{{ url("/services/edit/$service->id") }}">Edit</a>
                    <form action="{{ url("/services/delete/$service->id") }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mx-2">Delete</button>
                    </form>

                </div>
            </td>

          </tr>

          </tbody>
          @endforeach
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">

      <a href="{{ url('services/create') }}" class="btn btn-sm btn-info float-left">Create New Service</a>

    </div>
    <!-- /.card-footer -->
  </div>
@endsection
