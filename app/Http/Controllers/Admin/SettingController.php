<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\repositories\SettingRepository;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function edit()
{
    $settings = Setting::all();

    return view('Admin/Dashboard/setting/edit', compact('settings'));
}
    public function update(Request $request)
    {

        $data = $request->validate([

                'logo' => 'nullable|image|mimes:svg,jpeg,png,jpg,gif',
                'background_image_index' => 'nullable|image|mimes:svg,jpeg,png,jpg,gif',
                'background_image_about' => 'nullable|image|mimes:svg,jpeg,png,jpg,gif',
                'background_image_service' => 'nullable|image|mimes:svg,jpeg,png,jpg,gif',
                'background_image_contact' => 'nullable|image|mimes:svg,jpeg,png,jpg,gif',
                'background_image_team' => 'nullable|image|mimes:svg,jpeg,png,jpg,gif',

                // Add other validation rules as needed
            ]);
            //dd($data);

            $settings = Setting::all();

            foreach ($settings as $setting) {
                $key =  $setting->key;
                //dd($key);
            //dd($request->file($key));


                if ($request->hasFile($key)) {
                    Storage::delete($setting->value);
                     $newValue= Storage::putFile("set", $request->file($key));
                      $setting->update([
                        'value' => $newValue,
                    ]);
                }
            }



            return redirect()->route('settings.edit')->with('success', 'Settings updated successfully');
        }

}
