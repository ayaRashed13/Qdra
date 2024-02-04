<?php
namespace App\repositories;

use App\Models\Job;
use App\Models\Team;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Storage;

class TeamRepository
{
    public function all()
    {
        return Team::all();
    }

    public function create()
    {
        $jobs = Job::all();
        return $jobs;
    }

    public function store(Request $request)
    {

         //validation
         $data = $request->validate([
            "name"=>"required|string|min:3",
            "image"=>"|required|mimes:png,jpg,",
            "job_id"=>"required|exists:jobs,id"
        ]);
        // dd($data);


        //storage

 $data['image'] = Storage::putFile('teams', $data['image']);


        //insert
        Team::create($data);

        //redirect

    }

    public function edit($id)
    {
         $team = Team::findOrFail($id);

         $jobs = Job::all();
         return [$team,$jobs];
        // dd(team);

    }

    public function update(Request $request, $id)
    {

         //validation
         $data = $request->validate([
            "name"=>"required|string|min:3",
            "image"=>"image|mimes:png,jpg,",
            "job_id"=>"required|exists:jobs,id"
        ]);
        // dd($data);


        //update
        $team = Team::findOrFail($id);
        //dd($service);


        if ($request->has("image")) {
            Storage::delete($team->image);
            $data['image'] = Storage::putFile('teams', $data['image']);

        }

        $team->update($data);




    }

    public function delete($id)
    {
        $team = Team::findOrFail($id);
        if ($team->image !== null) {
            Storage::delete($team->image);
        }

        $team->delete();


    }
}