@extends('Admin.Dashboard.home')

@section('content')
@include("success")
  <!-- TABLE: LATEST ORDERS -->
  <div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title">Job Requests</h3>

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
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>Job Name</th>
            <th>Country Name</th>
            <th>City Name</th>
            <th>image</th>
            <th>CV</th>

            <th>Action</th>

          </tr>
          </thead>
          @foreach ($requestJobs as $requestjob )


          <tbody>
          <tr>

            <td>{{  $requestjob->id }}</td>
            <td>{{  $requestjob->name }}</td>
            <td>{{  $requestjob->email }}</td>
            <td>{{  $requestjob->phone }}</td>
            <td>{{  $requestjob->job?->name }}</td>
            <td>{{  $requestjob->country?->name }}</td>
            <td>{{  $requestjob->city?->name }}</td>

            <td><img src="{{asset("storage/" . $requestjob->image)   }}" style="width: 40px; hight:40px"></td>
            <td>
                <a href="{{ asset("storage/" . $requestjob->file) }}" download>
                    <img src="{{ asset("admin/images/download.png") }}" style="width: 40px; height: 40px">
                </a>
            </td>            <td>
                <div class="btn-group">

                    <form action="{{ url("/requestJob/delete/$requestjob->id") }}" method="post">
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

      {{--<a href="{{ url('services/create') }}" class="btn btn-sm btn-info float-left">Create New Service</a>--}}
      {{--<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Contacts</a>--}}
    </div>
    <!-- /.card-footer -->
  </div>
@endsection
