<?php

namespace App\repositories;

use App\Models\Service;
use App\Http\Requests\ServiceRequest;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ServiceRepository
{
    public function all()
    {
        return Service::all();
    }

    public function store(Request $request)
    {
        //validation
        $data = $request->validate(
            [
                "title" => "required|string|max:255",
                "desc" => "required|string",
                "shortdesc" => "required|string",
                "background_image" => "required|image|mimes:png,jpg,jpeg",
                "image" => "required|image|mimes:png,jpg,svg,jpeg",
                'video' => "required|file|mimes:jpg,mp4,avi,mov,wmv|max:10240",
                "video_image" => "required|image|mimes:png,jpg,svg,jpeg"
            ]
        );

        //storage
        $data['background_image'] = Storage::putFile('services', $data['background_image']);
        $data['image'] = Storage::putFile('services', $data['image']);
        $data['video'] = Storage::putFile('services', $data['video']);
        $data['video_image'] = Storage::putFile('services', $data['video_image']);


        //insert
        Service::create($data);

        //redirect

    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return $service;
        // dd($service);

    }

    public function update(Request $request, $id)
    {

        //validation
        $data = $request->validate(
            [
                "title" => "required|string|max:255",
                "desc" => "required|string",
                "shortdesc" => "required|string",
                "background_image" => "image|mimes:png,jpg,jpeg",
                "image" => "image|mimes:png,jpg,svg,jpeg",
                'video' => "file|mimes:jpg,mp4,avi,mov,wmv|max:10240",
                "video_image" => "image|mimes:png,jpg,svg,jpeg"

            ]
        );
        // dd($data);


        //update
        $service = Service::findOrFail($id);
        //dd($service);
        if ($request->has("background_image")) {
            Storage::delete($service->background_image);
            $data['background_image'] = Storage::putFile('Services', $data['background_image']);
        }

        if ($request->has("image")) {
            Storage::delete($service->image);
            $data['image'] = Storage::putFile('Services', $data['image']);
        }
        if ($request->has("video")) {
            Storage::delete($service->video);

            $data['video'] = Storage::putFile('Services', $data['video']);
        }

        if ($request->has("video_image")) {
            Storage::delete($service->video_image);
            $data['video_image'] = Storage::putFile('Services', $data['video_image']);
        }
        $service->update($data);
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);
        if ($service->background_image !== null) {
            Storage::delete($service->background_image);
        }
        if ($service->image !== null) {
            Storage::delete($service->image);
        }
        if ($service->video !== null) {
            Storage::delete($service->video);
        }
        if ($service->video_image !== null) {
            Storage::delete($service->video_image);
        }
        $service->delete();
    }
}
