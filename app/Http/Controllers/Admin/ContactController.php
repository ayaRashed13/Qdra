<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUpdateStatusRequest;
use App\repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactRepository;
    public function __construct(ContactRepository $contactRepository){

$this->contactRepository = $contactRepository;

    }
    public function all(){
        $contacts = $this->contactRepository->all();
        return view('Admin.Dashboard.contacts', compact('contacts'));
    }
    public function updateStatus(ContactUpdateStatusRequest $request, $id)
    {
        $this->contactRepository->toggleReadStatus($id);
        return redirect(url('contacts'))->with('success', 'Contact status updated successfully.');
    }
}
