<?php

namespace App\repositories;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Requests\ServiceCategoryRequest;

class ServiceCategoryRepository
{
    public function all()
    {
        $serviceCategory = ServiceCategory::all();

        return $serviceCategory;
    }

    public function create()
    {
        $services = Service::all();
        return $services;
    }

    public function store(Request $request)
    {
        $data_category = $request->validate(
            [
            "title" => "required|string|max:255",
            "desc" => "required|string",
            "service_id"=>"required|exists:services,id"
        ]);
        ServiceCategory::create($data_category);
    }

    public function edit($id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);
        $services = Service::all();
        return [$serviceCategory, $services];
    }

    public function update(Request $request, $id)
    {
        $data_category = $request->validate(
        [
            "title" => "required|string|max:255",
            "desc" => "required|string",
            "service_id"=>"required|exists:services,id"
        ]);
        //storage
        //dd($data_category);
        //update
        $service_category = ServiceCategory::findOrFail($id);
        $service_category->update($data_category);
    }

    public function delete($id)
    {

        $service_category = ServiceCategory::findOrFail($id);

        $service_category->delete();
    }
}
