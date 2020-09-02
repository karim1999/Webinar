<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.setting.form', [
            "setting" => Setting::findOrFail(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Setting $setting
     * @return void
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function update(Request $request, Setting $setting)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'event_title' => 'required',
            'link' => 'required',
            'logo' => 'image',
            'gradient_from' => 'required|starts_with:#',
            'gradient_to' => 'required|starts_with:#',
        ]);

        if($request->file('logo'))
            $setting->addMediaFromRequest("logo")->toMediaCollection('logo');
        if($request->file('logo_dark'))
            $setting->addMediaFromRequest("logo_dark")->toMediaCollection('logo_dark');

        $setting->title= $request->post('title');
        $setting->event_title= $request->post('event_title');
        $setting->link= $request->post('link');
        $setting->description= $request->post('description');
        $setting->keywords= $request->post('keywords');
        $setting->gradient_from= $request->post('gradient_from');
        $setting->gradient_to= $request->post('gradient_to');
        $setting->chat_background= $request->post('chat_background');

        $setting->enable_questions= $request->post('enable_questions') ? 1 : 0;
        $setting->enable_polls= $request->post('enable_polls') ? 1 : 0;
        $setting->enable_speakers= $request->post('enable_speakers') ? 1 : 0;
        $setting->enable_resources= $request->post('enable_resources') ? 1 : 0;
        $setting->enable_agenda= $request->post('enable_agenda') ? 1 : 0;
//        $setting->enable_social= $request->post('enable_social') ? 1 : 0;

        $setting->polls_tab_name= $request->post('polls_tab_name');
        $setting->questions_tab_name= $request->post('questions_tab_name');
        $setting->resources_tab_name= $request->post('resources_tab_name');
        $setting->speakers_tab_name= $request->post('speakers_tab_name');
        $setting->agenda_tab_name= $request->post('agenda_tab_name');

        $setting->after_question= $request->post('after_question');
//        $setting->social_tab_name= $request->post('social_tab_name');

        $setting->save();
        return redirect()->back()->with("status", "The settings were added successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function open_question($id){
        $setting= Setting::findOrFail(1);
        $setting->question_tab= $id;
        $setting->save();
        if($id == 0)
            return redirect()->back()->with("status", "The questions tab was closed successfully.");
        return redirect()->back()->with("status", "The questions tab was opened successfully.");
    }
    public function open_poll($id){
        $setting= Setting::findOrFail(1);
        $setting->poll_tab= $id;
        $setting->save();
        if($id == 0)
            return redirect()->back()->with("status", "The polls tab was closed successfully.");
        return redirect()->back()->with("status", "The polls tab was opened successfully.");
    }
    public function reset(){
        Artisan::call('migrate:fresh --seed');
        return redirect()->back()->with("status", "The application was reset successfully.");
    }
}
