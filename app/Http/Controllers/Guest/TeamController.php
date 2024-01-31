<?php

namespace App\Http\Controllers\Guest;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function all(){
        $teams = Team::all();
        return view("Guest.our_team",compact("teams"));
    }
}
