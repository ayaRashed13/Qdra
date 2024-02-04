@extends("Admin.Dashboard.home")

@section('content')

    @include("success")
    <div class="card-header">
        <h3 class="card-title">Edit Setting</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="background_image" class="required">logo</label>
            <input type="file" name="logo" class="form-control-file">
            @error('logo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
            <label for="exampleInputEmail1">old logo</label>
            <img src="{{ asset('storage/' . $settings[0]->value) }}" width="40" alt=""
                srcset="">
        </div>
        <div class="form-group">
            <label for="background_image" class="required">Background Image index</label>
            <input type="file" name="background_image_index" class="form-control-file">
            @error('background_image_index')
            <span class="text-danger">{{ $message }}</span>
        @enderror
            <label for="exampleInputEmail1">old background image index</label>
            <img src="{{ asset('storage/' . $settings[1]->value) }}" width="40" alt=""
                srcset="">
        </div>

        <div class="form-group">
            <label for="background_image" class="required">Background Image about</label>
            <input type="file" name="background_image_about" class="form-control-file">
            @error('background_image_about')
            <span class="text-danger">{{ $message }}</span>
        @enderror
            <label for="exampleInputEmail1">old background image about</label>
            <img src="{{ asset('storage/' . $settings[2]->value) }}" width="40" alt=""
                srcset="">
        </div>
        <div class="form-group">
            <label for="background_image" class="required">Background Image service</label>
            <input type="file" name="background_image_service" class="form-control-file">
            @error('background_image_service')
            <span class="text-danger">{{ $message }}</span>
        @enderror
            <label for="exampleInputEmail1">old background image service</label>
            <img src="{{ asset('storage/' . $settings[3]->value) }}" width="40" alt=""
                srcset="">
        </div>
        <div class="form-group">
            <label for="background_image" class="required">Background Image contact</label>
            <input type="file" name="background_image_contact" class="form-control-file">
            @error('background_image_contact')
            <span class="text-danger">{{ $message }}</span>
        @enderror
            <label for="exampleInputEmail1">old background image contact</label>
            <img src="{{ asset('storage/' . $settings[4]->value) }}" width="40" alt=""
                srcset="">
        </div>

        <div class="form-group">
            <label for="background_image" class="required">Background Image team</label>
            <input type="file" name="background_image_team" class="form-control-file">
            @error('background_image_team')
            <span class="text-danger">{{ $message }}</span>
        @enderror
            <label for="exampleInputEmail1">old background image team</label>
            <img src="{{ asset('storage/' . $settings[5]->value) }}" width="40" alt=""
                srcset="">
        </div>



        <!-- Add other form fields as needed -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>


@endsection









