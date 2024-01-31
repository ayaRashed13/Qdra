<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCategoryRequest;
use App\repositories\ServiceCategoryRepository;


class ServiceCategoryController extends Controller
{
    protected $serviceCategoryRepository;

    public function __construct(ServiceCategoryRepository $serviceCategoryRepository)
    {
        $this->serviceCategoryRepository = $serviceCategoryRepository;
    }

    public function all()
    {
        $categories = $this->serviceCategoryRepository->all();
        //dd($service_categories);
        return view('Admin.Dashboard.service_categories', compact('categories'));
    }

    public function create()
    {
        $service_categories = $this->serviceCategoryRepository->create();
        return view("Admin.Dashboard.service_category.create",compact('service_categories'));
    }

    public function store(ServiceCategoryRequest $request)
    {
        $this->serviceCategoryRepository->store($request);

        return redirect(url('category'))->with('success', 'Data inserted successfully');
    }

    public function edit($id)
    {
        $service_categories = $this->serviceCategoryRepository->edit($id);
        //dd($service_categories);
        return view("Admin.Dashboard.service_category.edit",)->with(["key1" =>$service_categories[0] , "key2" => $service_categories[1] ]);
    }

    public function update(ServiceCategoryRequest $request, $id)
    {
        $this->serviceCategoryRepository->update($request, $id);

        return redirect(route('category/all'))->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->serviceCategoryRepository->delete($id);
        return redirect(route('category/all'))->with('success', 'Data deleted successfully');
    }
}
