@extends('Admin.Dashboard.home')

@section('content')
@include("success")
  <!-- TABLE: LATEST ORDERS -->
  <div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title">Teams</h3>

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
            <th>Name</th>
            <th>Job Name</th>
            <th>Image</th>



            <th>Action</th>

          </tr>
          </thead>
          @foreach ($teams as $team )


          <tbody>
          <tr>

            <td>{{  $team->id }}</td>
            <td>{{  $team->name }}</td>
            <td>{{  $team->job?->name }}</td>

            <td><img src="{{asset("storage/" . $team->image)   }}" style="width: 40px; hight:40px"></td>

            <td>
                <div class="btn-group">
                    <a class="btn btn-success" href="{{ url("/team/edit/$team->id") }}">Edit</a>
                    <form action="{{ url("/team/delete/$team->id") }}" method="post">
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

      <a href="{{ url('team/create') }}" class="btn btn-sm btn-info float-left">Create New team</a>
      <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Contacts</a>
    </div>
    <!-- /.card-footer -->
  </div>
@endsection
