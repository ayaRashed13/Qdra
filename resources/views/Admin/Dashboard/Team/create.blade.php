@extends('Admin.Dashboard.home')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Create New Team</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('team/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label class="required">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter ...">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> image</label>
                        <input type="file" name="image" class=" form-control-file" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">job Name</label>
                        <select name="job_id" id="">
                            @foreach ($jobs as $job)
                                <option value={{ "$job->id" }}> {{ $job->name }}</option>
                            @endforeach

                        </select>
                        @error('job_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">

                <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <!-- /.card-body -->
    </div>
@endsection
