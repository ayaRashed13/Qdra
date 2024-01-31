<?php
namespace App\repositories;

use App\Models\Service;
use App\Models\RequestJob;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\RequestJobRequest;

class RequestJobRepository
{
    public function all()
    {
         $requestJobss = RequestJob::all();
         return $requestJobss;
    }


    public function delete($id)
    {
        $requestJob = RequestJob::findOrFail($id);
        if ($requestJob->image !== null) {
            Storage::delete($requestJob->image);
        }
        if ($requestJob->file !== null) {
            Storage::delete($requestJob->file);
        }
        $requestJob->delete();


    }
}