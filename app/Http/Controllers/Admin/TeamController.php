<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;
use App\repositories\TeamRepository;

class TeamController extends Controller
{
    protected $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function all()
    {
        $teams = $this->teamRepository->all();
        return view('Admin.Dashboard.teams', compact('teams'));
    }

    public function create()
    {
        $jobs = $this->teamRepository->create();
        return view("Admin.Dashboard.team.create",compact("jobs"));
    }

    public function store(TeamRequest $request)
    {
        $this->teamRepository->store($request);

        return redirect(url('/team'))->with('success', 'Data inserted successfully');
    }

    public function edit($id)
    {
        $teamEdit = $this->teamRepository->edit($id);
        //dd($teamEdit);
        return view("Admin/Dashboard/team/edit")->with(["key1" => $teamEdit[0],"key2" => $teamEdit[1] ] );
    }

    public function update(TeamRequest $request, $id)
    {
        $this->teamRepository->update($request, $id);

        return redirect(url('team'))->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->teamRepository->delete($id);
        return redirect(url("/team"))->with('success', 'Data deleted successfully');
    }
}
