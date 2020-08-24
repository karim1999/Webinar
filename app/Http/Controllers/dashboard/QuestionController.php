<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Question;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class QuestionController extends Controller
{
    /**
     * Display a listing of the question.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('dashboard.question.index', [
            "questions" => Question::all()
        ]);
    }

    /**
     * Show the form for creating a new question.
     *
     * @return Response
     */
    public function create()
    {
        //
        $question= new Question();
        return view('dashboard.question.form', [
            "question" => $question
        ]);
    }

    /**
     * Store a newly created question in storage.
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
        $question = new Question();
        $question->question= $request->post('question');
        $question->save();

        return redirect()->route('dashboard.question.index')->with("status", "The question was added successfully.");
    }

    /**
     * Display the specified question.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified question.
     *
     * @param Question $question
     * @return Response
     */
    public function edit(Question $question)
    {
        //
        return view('dashboard.question.form', [
            "question" => $question
        ]);
    }

    /**
     * Update the specified question in storage.
     *
     * @param Request $request
     * @param Question $question
     * @return Response
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function update(Request $request, Question $question)
    {
        //
        $validatedData = $request->validate([
            'question' => 'required',
        ]);
        $question->question= $request->post('question');
        $question->save();

        return redirect()->route('dashboard.question.index')->with("status", "The question was edited successfully.");
    }

    /**
     * Remove the specified question from storage.
     *
     * @param Question $question
     * @return void
     * @throws Exception
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
        return back()->with("status", "The question was deleted successfully.");
    }
}
