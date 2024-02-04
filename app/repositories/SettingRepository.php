<?php

namespace App\repositories;

//use App\Models\Job;

use App\Models\Country;
use App\Models\Setting;
use Illuminate\Support\Str;
use App\Http\Requests\JobRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\Storage;

class SettingRepository
{
    //public function edit()
    //{
    //    //$key =["title","background_image_home"];
    //    //$setting = Setting::where('key', $key)->first();
    //    //dd($setting);
    //}

    //public function update(SettingRequest $settingRequest , $key)
    //{

    //    $setting = Setting::where('key', $key)->first();
    //    dd($setting);
    //    $data = $settingRequest->validated();
    //    //dd($data['background_image_home']);

    //    if ($settingRequest->hasFile('background_image_home')) {
    //        //Storage::delete();

    //        $data['background_image_home'] = Storage::putFile("Settings",$data['background_image_home'] ); }

    //    if ($settingRequest->hasFile('background_image_service')) {
    //        $data['background_image_service'] = Storage::putFile("Settings",$data['background_image_service'] );
    //    }

    //    if ($settingRequest->hasFile('background_image_contact')) {
    //        $data['background_image_contact'] = Storage::putFile("Settings",$data['background_image_contact'] );
    //    }

    //    if ($settingRequest->hasFile('logo')) {
    //        $data['logo'] = Storage::putFile("Settings",$data['logo'] );
    //    }
    //    //dd($data['logo']);

    //    if ($settingRequest->hasFile('facebook')) {
    //        $data['facebook'] = Storage::putFile("Settings",$data['facebook'] );
    //    }
    //    //dd($data['facebook']);

    //    $this->updateSetting($data);
    //}

    //private function getSettingByKey(string $key)
    //{
    //    $setting = Setting::where('key', $key)->first();
    //    dd($setting);
    //    //return $setting ? Storage::url($setting->value) : null;
    //}

    //private function uploadFile($file)
    //{
    //    $path = $file->store('Settings');
    //    return Storage::url($path);
    //}

    //private function updateSetting(array $data)
    //{
    //    foreach ($data as $key => $value) {
    //        $setting = Setting::where('key', $key)->first();
    //        $setting->value = $value;
    //        $setting->save();
    //    }
    //}
}
