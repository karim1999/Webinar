<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Event;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class EventController extends Controller
{
    /**
     * Display a listing of the event.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('dashboard.event.index', [
            "events" => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new event.
     *
     * @return Response
     */
    public function create()
    {
        //
        $event= new Event();
        return view('dashboard.event.form', [
            "event" => $event
        ]);
    }

    /**
     * Store a newly created event in storage.
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
            'title' => 'required',
            'description' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);
        $event = new Event();
        $event->title= $request->post('title');
        $event->description= $request->post('description');
        $event->from= $request->post('from');
        $event->to= $request->post('to');
        $event->save();

        return redirect()->route('dashboard.event.index')->with("status", "The item was added successfully.");
    }

    /**
     * Display the specified event.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified event.
     *
     * @param Event $event
     * @return Response
     */
    public function edit(Event $event)
    {
        //
        return view('dashboard.event.form', [
            "event" => $event
        ]);
    }

    /**
     * Update the specified event in storage.
     *
     * @param Request $request
     * @param Event $event
     * @return Response
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function update(Request $request, Event $event)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);
        $event->title= $request->post('title');
        $event->description= $request->post('description');
        $event->from= $request->post('from');
        $event->to= $request->post('to');
        $event->save();

        return redirect()->route('dashboard.event.index')->with("status", "The item was edited successfully.");
    }

    /**
     * Remove the specified event from storage.
     *
     * @param Event $event
     * @return void
     * @throws Exception
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();
        return back()->with("status", "The event was deleted successfully.");
    }
}
