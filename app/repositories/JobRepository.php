<?php

namespace App\repositories;

use App\Models\Job;

use App\Http\Requests\JobRequest;


class JobRepository
{
    public function all()
    {
        $sections = Job::all();

        return $sections;
    }


    public function store(JobRequest $jobRequest)
    {
        $data_job = $jobRequest->validated();
        Job::create($data_job);
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);

        return $job;
    }

    public function update(JobRequest $jobRequest, $id)
    {
        $data_job = $jobRequest->validated();

        //update
        $job = Job::findOrFail($id);
        $job->update($data_job);
    }

    public function delete($id)
    {

        $job = Job::findOrFail($id);

        $job->delete();
    }
}
