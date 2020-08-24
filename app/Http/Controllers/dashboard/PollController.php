<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Option;
use App\Poll;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class PollController extends Controller
{
    /**
     * Display a listing of the poll.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('dashboard.poll.index', [
            "polls" => Poll::all()
        ]);
    }

    /**
     * Show the form for creating a new poll.
     *
     * @return Response
     */
    public function create()
    {
        //
        $poll= new Poll();
        return view('dashboard.poll.form', [
            "poll" => $poll
        ]);
    }

    /**
     * Store a newly created poll in storage.
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
            'question' => 'required',
        ]);
        $poll = new Poll();
        $poll->question= $request->post('question');
        $poll->save();

        for ($i= 1; $i <= 4; $i++){
            if($request->post('option'.$i)){
                $option= new Option();
                $option->option= $request->post('option'.$i);
                $poll->options()->save($option);
            }
        }

        return redirect()->route('dashboard.poll.index')->with("status", "The poll was added successfully.");
    }

    /**
     * Display the specified poll.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified poll.
     *
     * @param Poll $poll
     * @return Response
     */
    public function edit(Poll $poll)
    {
        //
        return view('dashboard.poll.form', [
            "poll" => $poll
        ]);
    }

    /**
     * Update the specified poll in storage.
     *
     * @param Request $request
     * @param Poll $poll
     * @return Response
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function update(Request $request, Poll $poll)
    {
        //
        $validatedData = $request->validate([
            'poll' => 'required',
        ]);
        $poll->poll= $request->post('poll');
        $poll->save();

        return redirect()->route('dashboard.poll.index')->with("status", "The poll was edited successfully.");
    }

    /**
     * Remove the specified poll from storage.
     *
     * @param Poll $poll
     * @return void
     * @throws Exception
     */
    public function destroy(Poll $poll)
    {
        //
        $poll->delete();
        return back()->with("status", "The poll was deleted successfully.");
    }
}
