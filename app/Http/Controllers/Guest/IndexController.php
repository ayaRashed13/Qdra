<?php

namespace App\Http\Controllers\Guest;

use App\Models\Team;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceSection;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Social;

class IndexController extends Controller
{
    public function all(){
        $socials = Social::all();
        $settings = Setting::all();
        $services = Service::all();
        $teams = Team::all();
        return  view("Guest.index",compact("services","teams","socials","settings"));
    }


    public function show($id){
    $service = Service::findOrFail($id);
    $service_categories = ServiceCategory::all();
    $service_sections = ServiceSection::with('items')->get();
        return view("Guest.physiotherapy",compact("service","service_categories","service_sections"));
    }




}
