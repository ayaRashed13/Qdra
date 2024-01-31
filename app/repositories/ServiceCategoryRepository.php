<?php

namespace App\repositories;

use App\Models\ServiceCategory;
use App\Http\Requests\ServiceCategoryRequest;
use App\Models\Service;

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

    public function store(ServiceCategoryRequest $service_categoryRequest)
    {
        $data_category = $service_categoryRequest->validated();
        ServiceCategory::create($data_category);
    }

    public function edit($id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);
        $services = Service::all();
        return [$serviceCategory, $services];
    }

    public function update(ServiceCategoryRequest $service_categoryRequest, $id)
    {
        $data_category = $service_categoryRequest->validated();
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
