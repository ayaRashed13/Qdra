<?php

namespace App\Http\Controllers\Admin;

use App\Models\RequestJob;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestJobRequest;
use App\repositories\RequestJobRepository;

class RequestJobController extends Controller
{
    protected $requestJodRepository;

    public function __construct(RequestJobRepository $requestJodRepository)
    {
        $this->requestJodRepository = $requestJodRepository;
    }

    public function all()
    {
        $requestJobs = $this->requestJodRepository->all();
        return view('Admin.Dashboard.requestJobs', compact('requestJobs'));
    }



    public function delete($id)
    {
        $this->requestJodRepository->delete($id);
        return redirect(url("/requestJob"))->with('success', 'Data deleted successfully');
    }
}
