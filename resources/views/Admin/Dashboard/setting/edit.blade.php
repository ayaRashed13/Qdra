@extends("Admin.Dashboard.home")

@section('content')
    @include("errors")
    @include("success")

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Setting</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input for Title -->
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter ..."
                                >
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <!-- file input for Background Image -->
                        <div class="form-group">
                            <label>Background Image Home</label>
                            <input type="file" name="background_image_home" class="form-control-file">
                            {{--@if ($background_home)--}}
                                {{--<img src="{{ asset("storage/" . "$background_home->value") }}" width="40" alt="Background Image">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- file input for Background Image -->
                        <div class="form-group">
                            <label>Background Image Service</label>
                            <input type="file" name="background_image_home" class="form-control-file">
                            {{--@if ($background_home)--}}
                                {{--<img src="{{ asset("storage/" . "$background_home->value") }}" width="40" alt="Background Image">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- file input for Background Image -->
                        <div class="form-group">
                            <label>Background Image Contact</label>
                            <input type="file" name="background_image_home" class="form-control-file">
                            {{--@if ($background_home)--}}
                                {{--<img src="{{ asset("storage/" . "$background_home->value") }}" width="40" alt="Background Image">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- file input for Logo -->
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control-file">
                            {{--@if ($logo)--}}
                                {{--<img src="{{ asset("storage/" . "$logo->value") }}" width="40" alt="Logo">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- file input for Logo -->
                        <div class="form-group">
                            <label>whatsup</label>
                            <input type="file" name="whatsapp" class="form-control-file">
                            {{--@if ($logo)--}}
                                {{--<img src="{{ asset("storage/" . "$logo->value") }}" width="40" alt="Logo">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- file input for Logo -->
                        <div class="form-group">
                            <label>facebook</label>
                            <input type="file" name="facebook" class="form-control-file">
                            {{--@if ($logo)--}}
                                {{--<img src="{{ asset("storage/" . "$logo->value") }}" width="40" alt="Logo">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- file input for Logo -->
                        <div class="form-group">
                            <label>twitter</label>
                            <input type="file" name="twitter" class="form-control-file">
                            {{--@if ($logo)--}}
                                {{--<img src="{{ asset("storage/" . "$logo->value") }}" width="40" alt="Logo">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- file input for Logo -->
                        <div class="form-group">
                            <label>phone</label>
                            <input type="file" name="phone" class="form-control-file">
                            {{--@if ($logo)--}}
                                {{--<img src="{{ asset("storage/" . "$logo->value") }}" width="40" alt="Logo">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>




                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

@endsection









