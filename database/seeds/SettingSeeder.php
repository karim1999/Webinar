<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileCannotBeAdded
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function run()
    {
        //
        $setting= new \App\Setting();
        $setting->save();
        $setting->addMediaFromUrl("https://webinar-event-git-master.mostafaahmed20155.vercel.app/img/Image%202.png")->toMediaCollection('logo');

    }
}
