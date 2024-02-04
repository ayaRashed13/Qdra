@extends('Admin.Dashboard.home')

@section('content')
    {{--@include('errors')--}}

    <div class="card-header">
        <h3 class="card-title">Edit Services</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ url('/services/update/' . $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label class="required">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter ..."
                            value="{{ $service->title }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label class="required">Short Description</label>
                        <textarea class="form-control" name="shortdesc" rows="3" placeholder="Enter ...">{{ $service->shortdesc }}</textarea>

                        @error('shortdesc')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label class="required">Description</label>
                            <textarea class="form-control" name="desc" rows="3" placeholder="Enter ...">{{ $service->desc }}</textarea>
                            @error('desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Background image</label>
                            <input type="file" name="background_image" class=" form-control-file" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter image">
                            <label for="exampleInputEmail1">old background image</label>
                            <img src="{{ asset('storage/' . $service->background_image) }}" width="40" alt=""
                                srcset="">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> image</label>
                                    <input type="file" name="image" class=" form-control-file" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter image">
                                    <label for="exampleInputEmail1">old image</label>
                                    <img src="{{ asset('storage/' . $service->image) }}" width="40" alt=""
                                        srcset="">
                                </div>
                            </div>
                        </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- file input for video -->
                                        <div class="form-group">
                                            <label for="video">Video</label>
                                            <input type="file" name="video" accept="video/*" class="form-control-file"
                                                id="video" aria-describedby="videoHelp">
                                            <small id="videoHelp" class="form-text text-muted">Upload a video file.</small>
                                            <label for="exampleInputEmail1">old video</label>
                                            <video src="{{ asset('storage/' . $service->video) }}" width="40">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> image of video</label>
                                            <input type="file" name="video_image" class=" form-control-file" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter image">
                                            <label for="exampleInputEmail1">old image of video</label>
                                            <img src="{{ asset('storage/' . $service->video_image) }}" width="40" alt=""
                                                srcset="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
