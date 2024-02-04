@extends('Admin.Dashboard.home')

@section('content')
    @include('success')

    <h3 class="card-title">Social Media </h3>


    <br><br>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table m-0">
                <thead>
                    <tr class="head">
                        <th>Name</th>
                        <th>Image</th>
                        <th>Link</th>

                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($socials as $social)
                        <tr id="row_{{ $social->id }}">
                            <td>{{ $social->name }}</td>
                            <td><img src="{{ asset('storage/' . $social->img) }}" alt="" style="width: 40px; hight:40px"></td>
                            <td>{{ $social->link }}</td>


                            <td>
                                <form action="{{ route('socials.destroy', $social->id) }}" method="post"
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer clearfix">

        <a href="{{ url('socials/create') }}" class="btn btn-sm btn-info float-left">Create New Service</a>

      </div>
        @endsection
