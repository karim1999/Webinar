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

        $setting->title= $request->post('title');
        $setting->event_title= $request->post('event_title');
        $setting->link= $request->post('link');
        $setting->description= $request->post('description');
        $setting->keywords= $request->post('keywords');
        $setting->gradient_from= $request->post('gradient_from');
        $setting->gradient_to= $request->post('gradient_to');
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
    public function reset(){
        Artisan::call('migrate:fresh --seed');
        return redirect()->back()->with("status", "The application was reset successfully.");
    }
}
