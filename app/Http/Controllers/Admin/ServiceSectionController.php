<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceSectionRequest;
use App\repositories\ServiceSectionRepository;

class ServiceSectionController extends Controller
{
    protected $sectionRepository;

    public function __construct(ServiceSectionRepository $sectionRepository)
    {
        $this->sectionRepository = $sectionRepository;
    }

    public function all()
    {
        $sections = $this->sectionRepository->all();
        //dd($service_categories);
        return view('Admin.Dashboard.service_sections', compact('sections'));
    }

    public function create()
    {
        $services = $this->sectionRepository->create();
        return view("Admin.Dashboard.service_section.create",compact('services'));
    }

    public function store(ServiceSectionRequest $request)
    {
        $this->sectionRepository->store($request);

        return redirect(url('section'))->with('success', 'Data inserted successfully');
    }

    public function edit($id)
    {
        $section = $this->sectionRepository->edit($id);
     
        return view("Admin.Dashboard.service_section.edit",)->with(["key1" =>$section[0] , "key2" => $section[1] ]);
    }

    public function update(ServiceSectionRequest $request, $id)
    {
        $this->sectionRepository->update($request, $id);

        return redirect(route('section/all'))->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->sectionRepository->delete($id);
        return redirect(route('section/all'))->with('success', 'Data deleted successfully');
    }

}
