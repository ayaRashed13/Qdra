<?php
namespace App\repositories;

use App\Models\Job;
use App\Models\Team;
use App\Models\Service;
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

    public function store(TeamRequest $teamRequest)
    {

         //validation
         $data = $teamRequest->validated();
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

    public function update(TeamRequest $teamRequest, $id)
    {

         //validation
         $data = $teamRequest->validated();
        // dd($data);


        //update
        $team = Team::findOrFail($id);
        //dd($service);


        if ($teamRequest->has("image")) {
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