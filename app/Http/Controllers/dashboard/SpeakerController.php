<?php

namespace App\Http\Controllers\dashboard;

use App\Exports\GuestExport;
use App\Exports\SpeakerExport;
use App\Http\Controllers\Controller;
use App\Speaker;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the speaker.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('dashboard.speaker.index', [
            "speakers" => Speaker::all()
        ]);
    }

    /**
     * Show the form for creating a new speaker.
     *
     * @return Response
     */
    public function create()
    {
        //
        $speaker= new Speaker();
        return view('dashboard.speaker.form', [
            "speaker" => $speaker
        ]);
    }

    /**
     * Store a newly created speaker in storage.
     *
     * @param Request $request
     * @return void
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image',
            'description' => 'required',
        ]);
        $speaker = new Speaker();
        $speaker->name= $request->post('name');
        $speaker->description= $request->post('description');
        $speaker->save();

        if($request->file('image'))
            $speaker->addMediaFromRequest("image")->toMediaCollection('image');

        return redirect()->route('dashboard.speaker.index')->with("status", "The speaker were added successfully.");
    }

    /**
     * Display the specified speaker.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified speaker.
     *
     * @param Speaker $speaker
     * @return Response
     */
    public function edit(Speaker $speaker)
    {
        //
        return view('dashboard.speaker.form', [
            "speaker" => $speaker
        ]);
    }

    /**
     * Update the specified speaker in storage.
     *
     * @param Request $request
     * @param Speaker $speaker
     * @return Response
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function update(Request $request, Speaker $speaker)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image',
            'description' => 'required',
        ]);
        $speaker->name= $request->post('name');
        $speaker->description= $request->post('description');
        $speaker->save();

        if($request->file('image'))
            $speaker->addMediaFromRequest("image")->toMediaCollection('image');

        return redirect()->route('dashboard.speaker.index')->with("status", "The speaker was edited successfully.");
    }

    /**
     * Remove the specified speaker from storage.
     *
     * @param Speaker $speaker
     * @return void
     * @throws Exception
     */
    public function destroy(Speaker $speaker)
    {
        //
        $speaker->delete();
        return back()->with("status", "The speaker was deleted successfully.");
    }
    public function export()
    {
        return Excel::download(new SpeakerExport, 'speakers.xlsx');
    }
}
