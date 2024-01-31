<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\repositories\ServiceRepository;

class ServiceController extends Controller
{
    protected $serviceRepository;

    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function all()
    {
        $services = $this->serviceRepository->all();
        return view('Admin.Dashboard.services', compact('services'));
    }

    public function create()
    {
        return view("Admin.Dashboard.service.create");
    }

    public function store(ServiceRequest $request)
    {
        $this->serviceRepository->store($request);

        return redirect(url('/services'))->with('success', 'Data inserted successfully');
    }

    public function edit($id)
    {
        $service = $this->serviceRepository->edit($id);
        return view("Admin/Dashboard/service/edit", compact('service'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $this->serviceRepository->update($request, $id);

        return redirect(route('services'))->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->serviceRepository->delete($id);
        return redirect(url("/services"))->with('success', 'Data deleted successfully');
    }
}

