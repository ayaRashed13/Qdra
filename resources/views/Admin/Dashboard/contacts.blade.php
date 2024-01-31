@extends('Admin.Dashboard.home')

@section('content')
  <!-- TABLE: LATEST ORDERS -->
  <div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title">Contacts</h3>

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
            <th>message</th>
            <th>Status</th>
            <th>read_at</th>
          </tr>
          </thead>
          @foreach ($contacts as $contact )


          <tbody>
          <tr>

            <td>{{  $contact->id }}</td>
            <td>{{  $contact->name }}</td>
            <td>{{  $contact->email }}</td>
            <td>{{  $contact->phone }}</td>
            <td>{{  $contact->msg }}</td>
            <td>
                <form action="{{ url('contacts/' . $contact->id . '/update-status') }}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn {{ $contact->status === 'read' ? 'btn-success' : 'btn-danger' }}">
                        {{ $contact->status === 'read' ? 'Mark as Unread' : 'Mark as Read' }}
                    </button>
                </form>
            </td>
            <td>{{  $contact->read_at }}</td>
            
          </tr>

          </tbody>
          @endforeach
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      {{--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>--}}
      <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Contacts</a>
    </div>
    <!-- /.card-footer -->
  </div>
@endsection
