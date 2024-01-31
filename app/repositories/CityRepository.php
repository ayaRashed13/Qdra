<?php

namespace App\repositories;



use App\Models\Country;
use App\Models\City;
use App\Http\Requests\CityRequest;


class CityRepository
{
    public function all()
    {
        $cities = City::all();

        return $cities;
    }
    public function create()
    {

            $countries = Country::all();
            return $countries;
      

    }

    public function store(CityRequest $cityRequest)
    {
        $data_city = $cityRequest->validated();
        City::create($data_city);
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        $countries = Country::all();

        return [$city,$countries];
    }

    public function update(CityRequest $cityRequest, $id)
    {
        $data_city = $cityRequest->validated();

        //update
        $city = City::findOrFail($id);
        $city->update($data_city);
    }

    public function delete($id)
    {

        $city = City::findOrFail($id);

        $city->delete();
    }
}
