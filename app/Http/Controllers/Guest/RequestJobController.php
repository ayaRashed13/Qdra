<?php

namespace App\Http\Controllers\Guest;

use App\Models\Job;
use App\Models\City;
use App\Models\Country;
use App\Models\RequestJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\RequestJobRequest;

class RequestJobController extends Controller
{
    public function create()
    {
       $jobs = Job::all();
       $countries = Country::all();
       $cities = City::all();
        return view("Guest.join_our_team",compact("jobs","countries","cities"));
    }

    public function store(RequestJobRequest $guestRequest)
    {
        //validation
        $data = $guestRequest->validated();
        // dd($data);


        //storage
 $data['image'] = Storage::putFile('RequestJob', $data['image']);
 $data['file'] = Storage::putFile('RequestJob', $data['file']);

        //insert
          RequestJob::create($data);



        //redirect

        return redirect(url('guest/request/create'))->with('success', 'Data inserted successfully');
    }

}
