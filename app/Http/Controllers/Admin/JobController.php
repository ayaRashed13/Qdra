<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\repositories\JobRepository;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    protected $jobRepository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    public function all()
    {
        $jobs = $this->jobRepository->all();
        //dd($service_categories);
        return view('Admin.Dashboard.jobs', compact('jobs'));
    }

    public function create()
    {

        return view("Admin.Dashboard.job.create");
    }

    public function store(JobRequest $jobRequest)
    {
        $this->jobRepository->store($jobRequest);

        return redirect(url('job'))->with('success', 'Data inserted successfully');
    }

    public function edit($id)
    {
        $jobEdit = $this->jobRepository->edit($id);

        return view("Admin.Dashboard.job.edit",compact("jobEdit"));
    }

    public function update(JobRequest $jobRequest, $id)
    {
        $this->jobRepository->update($jobRequest, $id);

        return redirect(route('job/all'))->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $this->jobRepository->delete($id);
        return redirect(route('job/all'))->with('success', 'Data deleted successfully');
    }
}
