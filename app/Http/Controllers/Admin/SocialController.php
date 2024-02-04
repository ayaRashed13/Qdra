<?php

namespace App\Http\Controllers\Admin;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::all();


        return view('admin.dashboard.social', compact('socials'));
    }
    public function create()
    {

        $names = ['phone', 'whatsup', 'facebook', 'twitter', 'instagram', 'snapchat', 'tiktok'];

        return view('admin.dashboard.social/create', compact('names'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'img' => 'required|image|mimes:svg,jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
        ]);

        $social = new Social;
        $social->name = $request->name;
        $social->img = $request->file('img')->store('social_images');
        $social->link = $request->link;
        $social->save();

        return redirect(url("socials"))->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $social = Social::find($id);
        $social->delete();

        return redirect(route("socials.index"))->with('success', 'Data deleted successfully');
}
}