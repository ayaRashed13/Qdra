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
    public function edit()
    {
        //$settingEditTitle = $this->getSettingByKey('title');
        ////dd($settingEditTitle);
        //$settingEditBackgroundHome = $this->getSettingByKey('background_image_home');
        //$settingEditBackgroundService = $this->getSettingByKey('background_image_service');
        //$settingEditBackgroundContact = $this->getSettingByKey('background_image_contact');
        //$settingEditLogo = $this->getSettingByKey('logo');
        //$settingEditWhatsapp = $this->getSettingByKey('whatsapp');
        //$settingEditFacebook = $this->getSettingByKey('facebook');
        //$settingEditInstagram = $this->getSettingByKey('instagram');
        //$settingEditTwitter = $this->getSettingByKey('twitter');
        //$settingEditPhone = $this->getSettingByKey('phone');

        //return [
        //    'settingEditTitle' => $settingEditTitle,
        //    'settingEditBackgroundHome' => $settingEditBackgroundHome,
        //    'settingEditBackgroundService' => $settingEditBackgroundService,
        //    'settingEditBackgroundContact' => $settingEditBackgroundContact,
        //    'settingEditLogo' => $settingEditLogo,
        //    'settingEditWhatsapp' => $settingEditWhatsapp,
        //    'settingEditFacebook' => $settingEditFacebook,
        //    'settingEditInstagram' => $settingEditInstagram,
        //    'settingEditTwitter' => $settingEditTwitter,
        //    'settingEditPhone' => $settingEditPhone,
        //];
    }

    public function update(SettingRequest $settingRequest)
    {
        $data = $settingRequest->validated();
        dd($data);

       Continued:

        if ($settingRequest->hasFile('background_image_home')) {
            //$data['background_image_home'] = $this->uploadFile($settingRequest->file('background_image_home'));

            $data['background_image_home'] = Storage::putFile("Settings",$data['background_image_home'] ); }
//dd($data['background_image_home']);
        if ($settingRequest->hasFile('background_image_service')) {
            $data['background_image_service'] = Storage::putFile("Settings",$data['background_image_service'] );
        }

        if ($settingRequest->hasFile('background_image_contact')) {
            $data['background_image_contact'] = Storage::putFile("Settings",$data['background_image_contact'] );
        }

        if ($settingRequest->hasFile('logo')) {
            $data['logo'] = Storage::putFile("Settings",$data['logo'] );
        }
        //dd($data['logo']);

        if ($settingRequest->hasFile('facebook')) {
            $data['facebook'] = Storage::putFile("Settings",$data['facebook'] );
        }
        //dd($data['facebook']);

        $this->updateSetting($data);
    }

    private function getSettingByKey(string $key)
    {
        $setting = Setting::where('key', $key)->first();
        //dd($setting);
        //return $setting ? Storage::url($setting->value) : null;
    }

    //private function uploadFile($file)
    //{
    //    $path = $file->store('Settings');
    //    return Storage::url($path);
    //}

    private function updateSetting(array $data)
    {
        foreach ($data as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            $setting->value = $value;
            $setting->save();
        }
    }
}
