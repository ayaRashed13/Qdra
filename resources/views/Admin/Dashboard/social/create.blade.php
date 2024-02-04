@extends('Admin.Dashboard.home')

@section('content')


    <div class="card-header">
        <h3 class="card-title">Create New Socials</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('socials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label for="name" class="required">Name</label>
                        <select name="name" id="name">
                            @foreach ($names as $name)
                                <option value="{{ $name }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="img" class="required">Image</label>
                        <input type="file" name="img" required>
                        @error('img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="link" class="required">Link</label>
                        <input type="text" name="link" required>
                        @error('link')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                    </div>
                </div>
            </div>




            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
