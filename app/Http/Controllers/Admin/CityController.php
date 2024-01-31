<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CityRequest;
use App\Http\Controllers\Controller;
use App\repositories\CityRepository;

class CityController extends Controller
{
    protected $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function all()
    {
        $cities = $this->cityRepository->all();
        //dd($service_categories);
        return view('Admin.Dashboard.cities', compact('cities'));
    }

    public function create()
    {
        $countries = $this->cityRepository->create();
        return view("Admin.Dashboard.city.create",compact("countries"));
    }

    public function store(CityRequest $cityRequest)
    {
        $this->cityRepository->store($cityRequest);

        return redirect(url('city'))->with('success', 'Data inserted successfully');
    }

    public function edit($id)
    {
        $cityEdit = $this->cityRepository->edit($id);

        return view("Admin.Dashboard.city.edit")->with(["key1" =>$cityEdit[0] , "key2" => $cityEdit[1] ]);;
    }

    public function update(CityRequest $cityRequest, $id)
    {
        $this->cityRepository->update($cityRequest, $id);

        return redirect(route('city/all'))->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->cityRepository->delete($id);
        return redirect(route('city/all'))->with('success', 'Data deleted successfully');
    }
}
