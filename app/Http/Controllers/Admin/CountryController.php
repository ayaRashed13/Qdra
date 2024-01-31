<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\repositories\CountryRepository;

class CountryController extends Controller
{
    protected $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function all()
    {
        $countries = $this->countryRepository->all();
        //dd($service_categories);
        return view('Admin.Dashboard.countries', compact('countries'));
    }

    public function create()
    {

        return view("Admin.Dashboard.country.create");
    }

    public function store(CountryRequest $countryRequest)
    {
        $this->countryRepository->store($countryRequest);

        return redirect(url('country'))->with('success', 'Data inserted successfully');
    }

    public function edit($id)
    {
        $countryEdit = $this->countryRepository->edit($id);

        return view("Admin.Dashboard.country.edit",compact("countryEdit"));
    }

    public function update(CountryRequest $countryRequest, $id)
    {
        $this->countryRepository->update($countryRequest, $id);

        return redirect(route('country/all'))->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->countryRepository->delete($id);
        return redirect(route('country/all'))->with('success', 'Data deleted successfully');
    }
}
