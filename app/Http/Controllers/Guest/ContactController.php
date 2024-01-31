<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
       $contacts = Contact::all();

        return view("Guest.contact_us",compact("contacts"));
    }

    public function store(Request $request)
    {
        //validation
        $data = $request->validate([
            "name"=>"required|string|min:3",
            "email"=>"required|email",
            "phone"=>"required|string",
            "msg"=>"required|string"

        ]);
        // dd($data);


        //insert
          Contact::create($data);



        //redirect

        return redirect(url('/contacts'))->with('success', 'Data inserted successfully');
    }
}
