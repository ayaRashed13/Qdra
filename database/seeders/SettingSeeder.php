<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //DB::table('settings')->insert([
        //    'key' => 'background_image_home',
        //    'value' => '',
        //]);
        DB::table('settings')->insert([
            'key' => 'logo',
            'value' => '',
        ]);

        DB::table('settings')->insert([
            'key' => 'background_image_index',
            'value' => '',
        ]);
        DB::table('settings')->insert([
            'key' => 'background_image_about',
            'value' => '',
        ]);
        DB::table('settings')->insert([
            'key' => 'background_image_service',
            'value' => '',
        ]);
        DB::table('settings')->insert([
            'key' => 'background_image_contact',
            'value' => '',
        ]);
        DB::table('settings')->insert([
            'key' => 'background_image_team',
            'value' => '',
        ]);

    }
}
