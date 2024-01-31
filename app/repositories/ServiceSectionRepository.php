<?php

namespace App\repositories;

use App\Models\Service;
use App\Models\ServiceSection;
//use App\Models\ServiceCategory;
use App\Http\Requests\ServiceSectionRequest;
use App\Http\Requests\ServiceCategoryRequest;

class ServiceSectionRepository
{
    public function all()
    {
        $sections = ServiceSection::all();

        return $sections;
    }

    public function create()
    {
        $services = Service::all();
        return $services;
    }

    public function store(ServiceSectionRequest $sectionRequest)
    {
        $data_section = $sectionRequest->validated();
        ServiceSection::create($data_section);
    }

    public function edit($id)
    {
        $section = ServiceSection::findOrFail($id);
        $services = Service::all();
        return [$section, $services];
    }

    public function update(ServiceSectionRequest $serviceSectionRequest, $id)
    {
        $data_ServiceSection = $serviceSectionRequest->validated();
        //storage
        //dd($data_category);
        //update
        $serviceSection = ServiceSection::findOrFail($id);
        $serviceSection->update($data_ServiceSection);
    }

    public function delete($id)
    {

        $serviceSection = ServiceSection::findOrFail($id);

        $serviceSection->delete();
    }
}
