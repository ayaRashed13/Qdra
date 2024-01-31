<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\repositories\SettingRepository;

class SettingController extends Controller
{
    protected $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function edit()
    {
        //$settingEdit = $this->settingRepository->edit();
        //$socialIcons = [
        //    'facebook' => 'fab fa-facebook-f',
        //    'twitter' => 'fab fa-twitter',
        //    'instagram' => 'fab fa-instagram',
        //];

        //$title = $settingEdit['settingEditTitle']; // Get the 'settingEditTitle' from the $settingEdit array
        //$background_home = $settingEdit['settingEditBackgroundHome']; // Get the 'settingEditBackgroundHome' from the $settingEdit array
        //$logo = $settingEdit['settingEditLogo'];
        return view('Admin.Dashboard.setting.edit');


    }

    public function update(SettingRequest $settingRequest)
    {
        $this->settingRepository->update($settingRequest);

        return redirect()->route('setting.edit')->with('success', 'Data updated successfully');
    }


}
