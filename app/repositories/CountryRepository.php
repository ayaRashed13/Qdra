<?php

namespace App\repositories;

//use App\Models\Job;

use App\Models\Country;
use App\Http\Requests\JobRequest;
use App\Http\Requests\CountryRequest;

class CountryRepository
{
    public function all()
    {
        $countries = Country::all();

        return $countries;
    }


    public function store(CountryRequest $countryRequest)
    {
        $data_country = $countryRequest->validated();
        Country::create($data_country);
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);

        return $country;
    }

    public function update(CountryRequest $countryRequest, $id)
    {
        $data_country = $countryRequest->validated();

        //update
        $country = Country::findOrFail($id);
        $country->update($data_country);
    }

    public function delete($id)
    {

        $country = Country::findOrFail($id);

        $country->delete();
    }
}
