<?php

use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileCannotBeAdded;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws FileCannotBeAdded
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function run()
    {
        //
        $setting= new \App\Setting();
        $setting->save();
        $setting->addMediaFromUrl("https://webinar-event-git-master.mostafaahmed20155.vercel.app/img/Image%202.png")->toMediaCollection('logo_dark');
        $setting->addMediaFromUrl("https://webinar-event.vercel.app/img/company-logo-white.svg")->toMediaCollection('logo');

    }
}
