<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\SectionItem;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceSection;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function all(){
        $services = Service::all();
        return  view("Guest.our_services",compact("services"));
    }


    public function show($id){
    $service = Service::findOrFail($id);
    $service_categories = ServiceCategory::all();
    $service_sections = ServiceSection::with('items')->get();
        return view("Guest.physiotherapy",compact("service","service_categories","service_sections"));
    }
}
