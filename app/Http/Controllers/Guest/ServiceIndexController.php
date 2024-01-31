<?php

namespace App\Http\Controllers\Guest;

use App\Models\Team;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceSection;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class ServiceIndexController extends Controller
{
    public function all(){
        $services = Service::all();
        $teams = Team::all();
        return  view("Guest.index",compact("services","teams"));
    }


    public function show($id){
    $service = Service::findOrFail($id);
    $service_categories = ServiceCategory::all();
    $service_sections = ServiceSection::with('items')->get();
        return view("Guest.physiotherapy",compact("service","service_categories","service_sections"));
    }


  

}
