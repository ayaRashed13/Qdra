@extends('Admin.Dashboard.home')

@section('content')

  <!-- TABLE: LATEST ORDERS -->
  <div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title">countries</h3>
      @include("success")

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
            <th>Name of Country</th>


            <th>Action</th>


          </tr>
          </thead>

          @foreach($countries as $country )


          <tbody>
          <tr>

            <td>{{  $country->id }}</td>
            <td>{{  $country->name }}</td>


            <td>
                <div class="btn-group">
                    <a class="btn btn-success" href="{{ route("country/edit",['id'=> $country->id]) }}">Edit</a>
                    <form action="{{route("country/delete", ['id' => $country->id])  }}" method="POST">
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

      <a href="{{ url('/country/create') }}" class="btn btn-sm btn-info float-left">Add New country </a>
      <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Contacts</a>
    </div>
    <!-- /.card-footer -->
  </div>
@endsection
